<?php

namespace App\Recursos_Humanos;

use App\Admin\Persona;
use App\Recursos_Humanos\TipoDocumento;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table="documentos";
	protected $guarded = [];
    public function persona()
	{
    	return $this->belongsTo(Persona::class, 'persona_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
     public function tipoDocumento()
	{
    	return $this->belongsTo(TipoDocumento::class, 'tipo_documento_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }

}
