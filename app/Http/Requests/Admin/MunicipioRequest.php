<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MunicipioRequest extends FormRequest
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
            'nombre' => 'required|string|max:20|min:5',
            'numero' => 'required|regex:[[0-9]+]|max:4|min:1'
            'estado_id' => 'required|integer',
        ];
    }
public function messages(){

        return [
        'nombre.required' => 'Es necesario ingresar el nombre del municipio',
        'nombre.max'=>'El nombre del municipio sobrepasa los 20 caracteres permitidos',
        'nombre.min'=>'Debes ingresar más de 5 caracteres en el campo nombre',
        'numero.required' => 'Es necesario ingresar número',
        'numero.max'=>'El número sobrepasa los 4 caracteres permitidos',
        'numero.min'=>'Debes ingresar más de 1 caracter en el campo número',
        'estado_id.required' => 'Es necesario seleccionar el estado',
        'estado_id.integer' => 'La clave del estado debe ser un valor entero',

        ];
    }

}

