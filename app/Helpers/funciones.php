<?php
function hola(){
	return "HOLA";
}

function adios(){
	return "ADIOS";
}
function cargarXml($valor){
	//Si metemos una url directa si funciona el simplexml pero al meter una variable no quiere
	$urlEstatica='C:\laragon\www\SISTEMA-NETWAY\storage\app\public\Facturas\1SRH5jOk6cE8OqUUhUe3UxyDdGFYImT2vrrdrXTR.xml';
	/*$urlEstatica='http://sistema-netway.test/storage/Facturas/ZkmqANSfE80waJlzWjymWf8tREpilM17IrciNBFu.xml';*/
	 //Intento con dos lineas
       /* $feed = file_get_contents($urlFactura);
       $items = simplexml_load_string($feed);*/
       if (file_exists($valor)) {
       	$xml = simplexml_load_file($valor);
       	dd($xml);
       } else {
       	exit('Error abriendo el archivo.');
       }

   }
   ?>