<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recursos_Humanos\FacturaRequest;
use App\Recursos_Humanos\Cliente;
use App\Recursos_Humanos\ComprobanteFactura;
use App\Recursos_Humanos\ConceptoFactura;
use App\Recursos_Humanos\EmisorFactura;
use App\Recursos_Humanos\Factura;
use App\Recursos_Humanos\ImpuestoFactura;
use App\Recursos_Humanos\ReceptorFactura;
use App\Recursos_Humanos\TimbreFiscalDigital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Factura::where('activo','=',1)->get();
        return view('recursos_humanos.facturas.index',[
            'facturas'=>$facturas]);
    }

    public function store(FacturaRequest $request)
    {
        $factura = new Factura();//Creamos una nueva factura en la base de datos
        //Almacenamos nuestra factura en el servidor
        $rutaFactura=$request->file('url')->store('public\Facturas');
        $rutaPdfFactura=$request->file('url_pdf')->store('public\PDF de Facturas');
        //Almacenamos la ruta en la base de datos y obtenemos la id de nuestra nueva factura
        $factura->url=$rutaFactura;
        $factura->url_pdf=$rutaPdfFactura;
        $factura->save();
        $idFactura=$factura->id;
        //Obtenemos la ruta donde se almaceno y le concatenamos app
        $url=storage_path('app/'.$rutaFactura);
        //Cambiamos todas las diagonales para que ninguna este incorrecta
        $urlFactura = str_replace('/', '\\', $url);
        //Mandamos todos los objetos
        cargarXml($urlFactura,$idFactura);
        //Relacionamos el cliente a su factura
        asociarCliente($idFactura,$request->cliente_id);
        return redirect()->route('rh.facturas.index')->with('mensaje','Se ha guardado una nueva factura');
    }

    public function show($id)
    {
        $id=Crypt::decryptString($id);
        $factura=Factura::findOrFail($id);
        $comprobanteFactura=ComprobanteFactura::where('factura_id','=',$factura->id)->get()->last();
        $emisorFactura=EmisorFactura::where('factura_id','=',$factura->id)->get()->last();
        $receptorFactura=ReceptorFactura::where('factura_id','=',$factura->id)->get()->last();
        $impuestoFactura=ImpuestoFactura::where('factura_id','=',$factura->id)->get()->last();
        $timbreFiscalDigital=TimbreFiscalDigital::where('factura_id','=',$factura->id)->get()->last();
        $conceptosFacturas=ConceptoFactura::where('factura_id','=',$factura->id)->get();
        $cliente=Cliente::findOrFail($factura->facturasClientes->last()->cliente->id);
        return view('recursos_humanos.facturas.show',[
            'factura'=>$factura,
            'comprobanteFactura'=>$comprobanteFactura,
            'emisorFactura'=>$emisorFactura,
            'receptorFactura'=>$receptorFactura,
            'impuestoFactura'=>$impuestoFactura,
            'timbreFiscalDigital'=>$timbreFiscalDigital,
            'conceptosFacturas'=>$conceptosFacturas,
            'cliente'=>$cliente]);
    }
    public function edit($id)
    {
        //
    }
     public function create()
    {
        $clientes=Cliente::where('activo','=',1)->get();
        return view('recursos_humanos.facturas.create',[
            'clientes'=>$clientes]);
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        $id=Crypt::decryptString($id);
        $factura=Factura::findOrFail($id);
        $factura->activo=0;
        $factura->update();
        return back()->with('mensaje','Se ha eliminado la factura');
    }
}
