<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {
        $factura = new Factura();//Creamos una nueva factura en la base de datos
        //Almacenamos nuestra factura en el servidor
        $rutaFactura=$request->file('ruta_factura')->store('public\Facturas');
        //Almacenamos la ruta en la base de datos y obtenemos la id de nuestra nueva factura
        $factura->url=$rutaFactura;
        $factura->save();
        $idFactura=$factura->id;
        //Obtenemos la ruta donde se almaceno y le concatenamos app
        $url=storage_path('app/'.$rutaFactura);
        //Cambiamos todas las diagonales para que ninguna este incorrecta
        $urlFactura = str_replace('/', '\\', $url);
        //Mandamos todos los objetos
        cargarXml($urlFactura,$idFactura);
        return back()->with('mensaje','Se ha guardado una nueva factura');
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
        /*foreach ($conceptoFactura as $concepto) {
            print_r($concepto->cantidad);
            print_r($concepto->valor_unitario);
            print_r($concepto->descripcion);
            foreach ($concepto->trasladosFacturas as $traslado) {
                print_r($traslado->base);
            }
        }*/
        return view('recursos_humanos.facturas.show',[
            'factura'=>$factura,
            'comprobanteFactura'=>$comprobanteFactura,
            'emisorFactura'=>$emisorFactura,
            'receptorFactura'=>$receptorFactura,
            'impuestoFactura'=>$impuestoFactura,
            'timbreFiscalDigital'=>$timbreFiscalDigital,
            'conceptosFacturas'=>$conceptosFacturas]);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
