<?php

use App\Recursos_Humanos\Asistencia;
use App\Recursos_Humanos\ComprobanteFactura;
use App\Recursos_Humanos\ConceptoFactura;
use App\Recursos_Humanos\EmisorFactura;
use App\Recursos_Humanos\FacturaCliente;
use App\Recursos_Humanos\ImpuestoFactura;
use App\Recursos_Humanos\PolizaVehiculo;
use App\Recursos_Humanos\ReceptorFactura;
use App\Recursos_Humanos\TimbreFiscalDigital;
use App\Recursos_Humanos\TrasladoFactura;
function asociarCliente($idFactura,$cliente_id){
	$facturaCliente=new FacturaCliente();
	$facturaCliente->factura_id = $idFactura;
	$facturaCliente->cliente_id=$cliente_id;
	$facturaCliente->save();
}
function cargarXml($valor,$idFactura){
	if (file_exists($valor)) {
		$xml = simplexml_load_file($valor);
		$ns = $xml->getNamespaces(true);
		$xml->registerXPathNamespace('t', $ns['tfd']); //Util para el ultimo path
       	//Leemos la información de forma individual
		comprobante($xml,$idFactura);
		emisor($xml,$idFactura);
		receptor($xml,$idFactura);
		concepto($xml,$idFactura);
		/*traslado($xml,$idFactura);*/
		impuesto($xml,$idFactura);
		timbreFiscalDigital($xml,$idFactura);
	} else {
		exit('Error al abrir el archivo.');
	}

}
function comprobante($xml,$idFactura){
	foreach ($xml->xpath('//cfdi:Comprobante') as $cfdiComprobante){
		$comprobanteFactura = new ComprobanteFactura();
		$comprobanteFactura->version= $cfdiComprobante['Version'];
		$comprobanteFactura->condiciones_pago= $cfdiComprobante['CondicionesDePago'];
		$comprobanteFactura->fecha= $cfdiComprobante['Fecha'];
		$comprobanteFactura->folio= $cfdiComprobante['Folio'];
		$comprobanteFactura->forma_pago= $cfdiComprobante['FormaPago'];
		$comprobanteFactura->lugar_expedicion= $cfdiComprobante['LugarExpedicion'];
		$comprobanteFactura->metodo_pago= $cfdiComprobante['MetodoPago'];
		$comprobanteFactura->moneda= $cfdiComprobante['Moneda'];
		$comprobanteFactura->serie= $cfdiComprobante['Serie'];
		$comprobanteFactura->subtotal= $cfdiComprobante['SubTotal'];
		$comprobanteFactura->tipo_cambio= $cfdiComprobante['TipoCambio'];
		$comprobanteFactura->tipo_comprobante= $cfdiComprobante['TipoDeComprobante'];
		$comprobanteFactura->total= $cfdiComprobante['Total'];
		$comprobanteFactura->certificado= $cfdiComprobante['Certificado'];
		$comprobanteFactura->no_certificado= $cfdiComprobante['NoCertificado'];
		$comprobanteFactura->sello_contribuyente= $cfdiComprobante['Sello'];
		$comprobanteFactura->factura_id= $idFactura;
		$comprobanteFactura->save();
	}
}
function emisor($xml,$idFactura){
	foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor') as $emisor){
		$emisorFactura = new EmisorFactura();
		$emisorFactura->rfc=$emisor['Rfc'];
		$emisorFactura->nombre=$emisor['Nombre'];
		$emisorFactura->regimen_fiscal=$emisor['RegimenFiscal'];
		$emisorFactura->factura_id=$idFactura;
		$emisorFactura->save();
	}
}
function receptor($xml,$idFactura){
	foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Receptor') as $receptor){
		$receptorFactura = new ReceptorFactura();
		$receptorFactura->rfc=$receptor['Rfc'];
		$receptorFactura->nombre=$receptor['Nombre'];
		$receptorFactura->cfdi=$receptor['UsoCFDI'];
		$receptorFactura->factura_id=$idFactura;
		$receptorFactura->save();
	}
}
function concepto($xml,$idFactura){
	$idConcepto=array();
	foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto') as $concepto){
		$conceptoFactura=new ConceptoFactura();
		$conceptoFactura->cantidad=$concepto['Cantidad'];
		$conceptoFactura->unidad=$concepto['Unidad'];
		$conceptoFactura->no_identificacion=$concepto['NoIdentificacion'];
		$conceptoFactura->descripcion=$concepto['Descripcion'];
		$conceptoFactura->valor_unitario=$concepto['ValorUnitario'];
		$conceptoFactura->importe=$concepto['Importe'];
		$conceptoFactura->clave_producto=$concepto['ClaveProdServ'];
		$conceptoFactura->clave_unidad=$concepto['ClaveUnidad'];
		$conceptoFactura->factura_id=$idFactura;
		$conceptoFactura->save();
		/*guardaConceptos($conceptoFactura->id);*/
		$idConcepto[]=$conceptoFactura->id;


	}
	guardaConceptos($xml,$idConcepto);
	/*print_r($idConcepto[1]);*/
}
function traslado($xml,$concepto){
	for ($i=0; $i < sizeof($concepto); $i++) {
		foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto//cfdi:Impuestos//cfdi:Traslados//cfdi:Traslado') as $traslado){
			$trasladoFactura=new TrasladoFactura();
			$trasladoFactura->base=$traslado['Base'];
			$trasladoFactura->impuesto=$traslado['Impuesto'];
			$trasladoFactura->tipo_factor=$traslado['TipoFactor'];
			$trasladoFactura->cuota=$traslado['TasaOCuota'];
			$trasladoFactura->importe=$traslado['Importe'];
			/*for ($j=1; $j <= $i; $j++) {*/
				$trasladoFactura->concepto_factura_id=$concepto[$i++];
				$trasladoFactura->save();
			}
		}
	}
	function impuesto($xml,$idFactura){
		foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Impuestos') as $impuesto){
			if ($impuesto['TotalImpuestosTrasladados'] !== null) {
				$impuestoFactura= new ImpuestoFactura();
				$impuestoFactura->impuesto_total=$impuesto['TotalImpuestosTrasladados'];
				$impuestoFactura->factura_id=$idFactura;
				$impuestoFactura->save();
			}
		}
	}

	function timbreFiscalDigital($xml,$idFactura){
		foreach ($xml->xpath('//t:TimbreFiscalDigital') as $tfd) {
			$timbreFiscalDigital = new TimbreFiscalDigital();
			$timbreFiscalDigital->version=$tfd['Version'];
			$timbreFiscalDigital->uuid=$tfd['UUID'];
			$timbreFiscalDigital->fecha=$tfd['FechaTimbrado'];
			$timbreFiscalDigital->rfc=$tfd['RfcProvCertif'];
			$timbreFiscalDigital->sello=$tfd['SelloCFD'];
			$timbreFiscalDigital->no_certificado_sat=$tfd['NoCertificadoSAT'];
			$timbreFiscalDigital->sello_sat=$tfd['SelloSAT'];
			$timbreFiscalDigital->factura_id=$idFactura;
			$timbreFiscalDigital->save();
		}

	}
	function guardaConceptos($xml,$concepto){
		traslado($xml,$concepto);
	}

	function verificaAsistencias($verificaAsistencias,$empleados,$fecha,$registroEmpleados){
		foreach ($verificaAsistencias as $asistencia) {
        //Si el empleado ya tiene la asistencia de hoy, ya no lo mandamos al select
			if ($asistencia->fecha === $fecha) {
				$registroEmpleados[]= $asistencia->persona_id;
			}
		}
		foreach ($registroEmpleados  as $registroEmpleado) {
			$empleados=$empleados->where('id', '!=', $registroEmpleado);
		}
		return $empleados;
	}
	function filtroAsistencias($consulta,$fecha){
		if ($consulta === null) {
			$asistencias=Asistencia::where('activo','=',1)->where('fecha','=',$fecha)->paginate(10);
		}else{
			$asistencias=Asistencia::join('personas as p', 'asistencias.persona_id', '=', 'p.id')->join('informaciones_laborales as informaciones','p.id','=','informaciones.persona_id')->join('departamentos as dep','informaciones.departamento_id','=','dep.id')->join('horarios as hor','asistencias.horario_id','=','hor.id')->orWhere('p.nombre','LIKE','%'.$consulta.'%')->orWhere('p.apellido','LIKE','%'.$consulta.'%')->orWhere('dep.nombre','LIKE','%'.$consulta.'%')->orWhere('asistencias.estado','LIKE','%'.$consulta.'%')->orWhere('asistencias.fecha','LIKE','%'.$consulta.'%')->orWhere('hor.dias','LIKE','%'.$consulta.'%')->orWhere('hor.hora_entrada','LIKE','%'.$consulta.'%')->orWhere('hor.hora_salida','LIKE','%'.$consulta.'%')->paginate(10);
		}
		return $asistencias;
	}

	function cantidadNotificaciones(){
		//Obtenemos la fecha de cada una de las polizas y mantenimientos
		$notificacion = 0; //Inicializamos la variable en cero
		$fecha=date('Y-m-d'); //Obtenemos la fecha actual
		$polizas=PolizaVehiculo::where('activo','=',1)->get();
		foreach ($polizas as $poliza) {
			$fechaPoliza = $poliza->vigencia_poliza;
			//Obtenemos la fecha de hace 3 dias
			$fechaPoliza =  date('Y-m-d',strtotime($fechaPoliza."- 3 days"));
			if ($fechaPoliza == $fecha) { //Si la fecha de hoy coincide con la fecha del vencimiento de la poliza 3 dias antes
				$notificacion++;
			}
		}
		return $notificacion;
	}
	?>