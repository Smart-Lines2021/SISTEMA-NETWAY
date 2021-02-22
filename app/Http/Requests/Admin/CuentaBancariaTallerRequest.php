<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CuentaBancariaTallerRequest extends FormRequest
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
            'taller_id' => 'required|integer',
            'banco_id' => 'required|integer',
            'no_cuenta' => 'required|numeric|digits_between:24,24',
            'clabe_interbancaria' => 'required|numeric|digits_between:18,18',
        ];
    }
     public function messages(){
        return [
            'taller_id.required' => 'Es necesario seleccionar un taller',
            'taller_id.integer' => 'Seleccione una opción valida para el taller',
            'banco_id.required' => 'Es necesario seleccionar un banco',
            'banco_id.integer' => 'Seleccione una opción valida para el banco',
            'no_cuenta.required' => 'Es necesario ingresar el número de cuenta',
            'no_cuenta.integer' => 'Solamente se permite ingresar números en el número de cuenta',
            'no_cuenta.digits_between' => 'Es necesario ingresar 24 caracteres en el número de cuenta',
            'clabe_interbancaria.required' => 'Es necesario ingresar la clabe interbancaria',
            'clabe_interbancaria.integer' => 'Solamente se permite ingresar números en la clabe interbancaria',
            'clabe_interbancaria.digits_between' => 'Es necesario ingresar 18 caracteres en la clabe interbancaria',

            ];
    }
}
