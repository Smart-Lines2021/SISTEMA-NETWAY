<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TallerMecanicoRequest extends FormRequest
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

            'nombre' => 'required|string|max:40|min:2',
            'telefono' => 'required|regex:[[0-9]+]|max:10|min:1',
            'direccion' => 'required|string|max:40|min:2',
            'persona_contacto' => 'required|string|max:40|min:2',
            'correo_electronico' => 'required|string|max:40|min:2',
            'observaciones' => 'required|string|max:80|min:2',
            
        ];
    }

    public function messages(){

        return [
        'nombre.required' => 'Es necesario ingresar el nombre del taller mecanico',
        'nombre.max'=>'El nombre del taller mecanico sobrepasa los 40 caracteres permitidos',
        'nombre.min'=>'Debes ingresar más de 2 caracteres en el campo nombre',
        'telefono.required' => 'Es necesario ingresar número',
        'telefono.max'=>'El número sobrepasa los 10 caracteres permitidos',
        'telefono.min'=>'Debes ingresar más de 1 caracter en el campo número',
        'direccion.required' => 'Es necesario ingresar la dirección del taller mecanico',
        'direccion.max'=>'La dirección del taller mecanico sobrepasa los 40 caracteres permitidos',
        'direccion.min'=>'Debes ingresar más de 2 caracteres en el campo direccion',
        'persona_contacto.required' => 'Es necesario ingresar el nombre de la persona a contactar',
        'persona_contacto.max'=>'El nombre de la persona a contactar sobrepasa los 40 caracteres permitidos',
        'persona_contacto.min'=>'Debes ingresar más de 2 caracteres en el campo nombre de la persona a contactar',
        'correo_electronico.required' => 'Es necesario ingresar el correo electrónico',
        'correo_electronico.max'=>'El correo electrónico sobrepasa los 40 caracteres permitidos',
        'correo_electronico.min'=>'Debes ingresar más de 2 caracteres en el campo correo electrónico',
        'observaciones.required' => 'Es necesario ingresar observaciones',
        'observaciones.max'=>'Las observaciones sobrepasan los 80 caracteres permitidos',
        'observaciones.min'=>'Debes ingresar más de 2 caracteres en el campo observaciones',
        

        ];
    }

}

