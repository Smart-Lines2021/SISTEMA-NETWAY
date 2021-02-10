<?php

namespace App\Admin;

use App\Admin\Persona;
use App\User;
use Illuminate\Database\Eloquent\Model;

class PersonaUsuario extends Model
{
    protected $table = "personas_usuarios";
    protected $guarded = [];
     public function persona()
	{
    	return $this->belongsTo(Persona::class, 'persona_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function usuario()
	{
    	return $this->belongsTo(User::class, 'user_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
