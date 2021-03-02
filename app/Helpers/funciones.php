<?php

use App\Recursos_Humanos\ComprobanteFactura;
use App\Recursos_Humanos\ConceptoFactura;
use App\Recursos_Humanos\EmisorFactura;
use App\Recursos_Humanos\ImpuestoFactura;
use App\Recursos_Humanos\ReceptorFactura;
use App\Recursos_Humanos\TimbreFiscalDigital;
use App\Recursos_Humanos\TrasladoFactura;
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
?>