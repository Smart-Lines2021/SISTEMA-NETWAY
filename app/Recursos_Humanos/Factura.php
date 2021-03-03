<?php

namespace App\Recursos_Humanos;

use App\Recursos_Humanos\ComprobanteFactura;
use App\Recursos_Humanos\ConceptoFactura;
use App\Recursos_Humanos\EmisorFactura;
use App\Recursos_Humanos\FacturaCliente;
use App\Recursos_Humanos\ImpuestoFactura;
use App\Recursos_Humanos\ReceptorFactura;
use App\Recursos_Humanos\TimbreFiscalDigital;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
	protected $table = "facturas";
    protected $guarded = [];
    public function comprobantesFacturas(){
        return $this->hasMany(ComprobanteFactura::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function conceptosFacturas(){
        return $this->hasMany(ConceptoFactura::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function emisoresFacturas(){
        return $this->hasMany(EmisorFactura::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function impuestosFacturas(){
        return $this->hasMany(ImpuestoFactura::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function receptoresFacturas(){
        return $this->hasMany(ReceptorFactura::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function timbresFiscalesDigitales(){
        return $this->hasMany(TimbreFiscalDigital::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function facturasClientes(){
        return $this->hasMany(FacturaCliente::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
