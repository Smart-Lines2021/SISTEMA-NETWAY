<?php

namespace App\Recursos_Humanos;

use App\Recursos_Humanos\Documento;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table="tipos_documentos";
	protected $guarded = [];
	public function documentos(){
        return $this->hasMany(Documento::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
