<?php
function hola(){
	return "HOLA";
}

function adios(){
	return "ADIOS";
}
function cargarXml($valor,$persona){
	if (file_exists($valor)) {
		$xml = simplexml_load_file($valor);
		$ns = $xml->getNamespaces(true);
		$xml->registerXPathNamespace('c', $ns['cfdi']);
		$xml->registerXPathNamespace('t', $ns['tfd']); //Util para el ultimo path
       	//Leemos la información de forma individual
		cfdiComprobante($xml);
		emisor($xml);
		receptor($xml);
		concepto($xml);
		traslado($xml);
		impuesto($xml);
		timbreFiscalDigital($xml);
	} else {
		exit('Error al abrir el archivo.');
	}

}
function cfdiComprobante($xml){
	foreach ($xml->xpath('//cfdi:Comprobante') as $cfdiComprobante){
		echo "Version: ".$cfdiComprobante['Version'];
		echo "<br>";
		echo "Condiciones de Pago: ".$cfdiComprobante['CondicionesDePago'];
		echo "<br>";
		echo "Fecha: ".$cfdiComprobante['Fecha'];
		echo "<br>";
		echo "Folio: ".$cfdiComprobante['Folio'];
		echo "<br>";
		echo "Forma de Pago: ".$cfdiComprobante['FormaPago'];
		echo "<br>";
		echo "Lugar de Expedición: ".$cfdiComprobante['LugarExpedicion'];
		echo "<br>";
		echo "Metodo de Pago: ".$cfdiComprobante['MetodoPago'];
		echo "<br>";
		echo "Moneda: ".$cfdiComprobante['Moneda'];
		echo "<br>";
		echo "Serie: ".$cfdiComprobante['Serie'];
		echo "<br>";
		echo "Subtotal: ".$cfdiComprobante['SubTotal'];
		echo "<br>";
		echo "Tipo de Cambio: ".$cfdiComprobante['TipoCambio'];
		echo "<br>";
		echo "Tipo de Comprobante: ".$cfdiComprobante['TipoDeComprobante'];
		echo "<br>";
		echo "Total: ".$cfdiComprobante['Total'];
		echo "<br>";
		echo "Certificado: ".$cfdiComprobante['Certificado'];
		echo "<br>";
		echo "No Certificado: ".$cfdiComprobante['NoCertificado'];
		echo "<br>";
		echo "Sello del contribuyente: ".$cfdiComprobante['Sello'];
		echo "<br>";
	}
}
function emisor($xml){
	foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor') as $emisor){
		echo "<br>";
		echo "RFC: ".$emisor['Rfc'];
		echo "<br>";
		echo "Nombre del Emisor: ".$emisor['Nombre'];
		echo "<br>";
		echo "Regimen Fiscal: ".$emisor['RegimenFiscal'];
		echo "<br>";
	}
}

function receptor($xml){
	foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Receptor') as $receptor){
		echo "Rfc: ".$receptor['Rfc'];
		echo "<br>";
		echo "Receptor: ".$receptor['Nombre'];
		echo "<br>";
		echo "Uso CFDI: ".$receptor['UsoCFDI'];
		echo "<br>";
	}
}
function concepto($xml){
	foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto') as $concepto){
		echo "<br>";
		echo "Cantidad: ".$concepto['Cantidad'];
		echo "<br>";
		echo "Unidad: ".$concepto['Unidad'];
		echo "<br>";
		echo "Número de Identificación: ".$concepto['NoIdentificacion'];
		echo "<br>";
		echo "Descripción: ".$concepto['Descripcion'];
		echo "<br>";
		echo "Valor Unitario: ".$concepto['ValorUnitario'];
		echo "<br>";
		echo "Importe: ".$concepto['Importe'];
		echo "<br>";
		echo "Clave Productos: ".$concepto['ClaveProdServ'];
		echo "<br>";
		echo "Clave Unidad: ".$concepto['ClaveUnidad'];
		echo "<br>";
		echo "<br>";
	}
}
function traslado($xml){
	foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto//cfdi:Impuestos//cfdi:Traslados//cfdi:Traslado') as $traslado){
		echo "Base: ".$traslado['Base'];
		echo "<br>";
		echo "Impuesto: ".$traslado['Impuesto'];
		echo "<br>";
		echo "Tipo de Factor: ".$traslado['TipoFactor'];
		echo "<br>";
		echo "Tasa o Cuota: ".$traslado['TasaOCuota'];
		echo "<br>";
		echo "Importe: ".$traslado['Importe'];
		echo "<br>";
		echo "<br>";
	}
}
function impuesto($xml){
	foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Impuestos') as $impuesto){
		if ($impuesto['TotalImpuestosTrasladados'] !== null) {
			echo "Impuesto: ".$impuesto['TotalImpuestosTrasladados'];
		}
		echo "<br>";
		echo "<br>";
	}
}

function timbreFiscalDigital($xml){
	foreach ($xml->xpath('//t:TimbreFiscalDigital') as $tfd) {
		echo "Version: ".$tfd['Version'];
		echo "<br>";
		echo "UUID: ".$tfd['UUID'];
		echo "<br>";
		echo "Fecha Timbrado: ".$tfd['FechaTimbrado'];
		echo "<br>";
		echo "RFCProv: ".$tfd['RfcProvCertif'];
		echo "<br>";
		echo "Sello: ".$tfd['SelloCFD'];
		echo "<br>";
		echo "No Certificado del SAT: ".$tfd['NoCertificadoSAT'];
		echo "<br>";
		echo "Sello del SAT: ".$tfd['SelloSAT'];
	}

}
?>