<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EstadoRequest extends FormRequest
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
            'variable' => 'required|string|max:8|min:3',
            'renapo' => 'required|regex:/^[\pL\s]+$/u|max:2|min:2',
            'clave_curp' => 'required|regex:/^[\pL\s]+$/u|max:3|min:2',
            'tres_digitos' => 'required|regex:/^[\pL\s]+$/u|max:3|min:3',
            'pais_id' => 'required|integer',
        ];
    }
     public function messages(){

        return [
        'nombre.required' => 'Es necesario ingresar el nombre del Estado',
        'nombre.max'=>'El nombre del estado sobrepasa los 20 caracteres permitidos',
        'nombre.min'=>'Debes ingresar más de 5 caracteres en el campo nombre',
        'variable.required' => 'Es necesario ingresar variable',
        'variable.max'=>'La variable sobrepasa los 8 caracteres permitidos',
        'variable.min'=>'Debes ingresar más de 3 caracteres en el campo variable',
        'renapo.required' => 'Es necesario ingresar RENAPO',
        'renapo.max' => 'Solo ingresar 2 caracteres en RENAPO',
        'renapo.regex' => 'Solo se aceptan letras en el RENAPO',
        'renapo.min'=>'Debes ingresar más de 1 caracter en el campo RENAPO',
        'clave_curp.required' => 'Es necesario ingresar ISO 3166-2 (2 Dígitos)',
        'clave_curp.max' => 'Solo ingresar 3 caracteres en ISO 3166-2 (3 Dígitos)',
        'clave_curp.min'=>'Debes ingresar más de 1 caracter en el campo ISO 3166-2 (2 Dígitos)',
        'clave_curp.regex' => 'Solo se aceptan letras en la clave de la curp',
        'tres_digitos.required' => 'Es necesario ingresar ISO 3166-2 (3 Dígitos)',
        'tres_digitos.max' => 'Solo ingresar 3 caracteres en ISO 3166-2 (3 Dígitos)',
        'tres_digitos.min'=>'Debes ingresar más de 2 caracteres en el campo ISO 3166-2 (3 Dígitos)',
        'tres_digitos.regex' => 'Solo se aceptan letras en los tres digitos',
        'pais_id.required' => 'Es necesario seleccionar el país',
        'pais_id.integer' => 'La clave del pais debe ser un valor entero',

        ];
    }

}
