<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContactoClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:40|min:4',
            'apellido' => 'required|string|max:40|min:4',
            'correo' => 'required|string|max:80|min:4',
            'telefono' => 'required|string|max:12|min:4',
            'cumpleaños' => 'required|date',
            'cliente_id' => 'required|integer',
            
        ];
    }

     public function messages(){
        return [
            'nombre.required' => 'Es necesario ingresar el nombre de la persona a contactar',
            'nombre.max' => 'En el nombre del contacto solo se permiten 40 caracteres',
            'nombre.min' => 'En el nombre del contacto al menos debe ingresar 2 caracteres',
            'apellido.required' => 'Es necesario ingresar los apellidos de la persona a contactar',
            'apellido.max' => 'En los apellidos del contacto solo se permiten 40 caracteres',
            'apellido.min' => 'En los apellidos del contacto al menos debe ingresar 2 caracteres',
            'correo.required' => 'Es necesario ingresar el correo de la persona a contactar',
            'correo.max' => 'El correo debe tener menos de 80 caracteres',
            'correo.min' => 'En el correo debe ingresar minimo 4 caracteres',
            'telefono.required' => 'Es necesario ingresar el telefono de la persona a contactar',
            'telefono.max' => 'El telefono debe tener menos de 12 caracteres',
            'telefono.min' => 'En el telefono debe ingresar minimo 4 caracteres',
            'cumpleaños.required'=>'Ingrese la fecha de nacimiento',
            'cumpleaños.date'=>'Ingrese una fecha de nacimiento valida',
            'cliente_id.required'=>'Ingrese un valor correspondiente al campo foraneo',
            'cliente_id.integer'=>'El tipo de dato de id debe ser entero',
        ];
    }
}
