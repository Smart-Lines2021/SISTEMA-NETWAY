<?php

namespace App\Admin;

use App\Admin\Banco;
use App\Admin\TallerMecanico;
use Illuminate\Database\Eloquent\Model;

class CuentaBancariaTaller extends Model
{
    protected $table ="cuentas_bancarias_talleres";
    protected $guarded = [];
    public function banco()
	{
    	return $this->belongsTo(Banco::class, 'banco_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function taller()
	{
    	return $this->belongsTo(TallerMecanico::class, 'taller_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
