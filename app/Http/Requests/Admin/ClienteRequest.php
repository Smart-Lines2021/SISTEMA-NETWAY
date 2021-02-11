<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'no_cliente' => 'required|string|max:10|min:2',
            'nombre_empresa' => 'required|string|max:40|min:4',
            'iniciales' => 'required|string|max:10|min:2',
            'rfc' => 'required|string|max:40|min:4',
            'telefono' => 'required|string|max:12|min:4',
            'correo' => 'required|string|max:80|min:4',
        ];
    }
    public function messages(){

        return [
            'no_cliente.required' => 'Es necesario ingresar el número del cliente',
            'no_cliente.max' => 'El número debe tener menos de 10 caracteres',
            'no_cliente.min' => 'Debe ingresar minimo 2 caracteres',
            'nombre_empresa.required' => 'Es necesario ingresar el nombre de la empresa del cliente',
            'nombre_empresa.max' => 'El nombre de la empresa debe tener menos de 40 caracteres',
            'nombre_empresa.min' => 'Debe ingresar minimo 4 caracteres',
            'iniciales.required' => 'Es necesario ingresar las iniciales del cliente',
            'iniciales.max' => 'Las iniciales deben tener menos de 10 caracteres',
            'iniciales.min' => 'Debe ingresar minimo 2 caracteres',
            'rfc.required' => 'Es necesario ingresar el rfc del cliente',
            'rfc.max' => 'El rfc debe tener menos de 40 caracteres',
            'rfc.min' => 'Debe ingresar minimo 4 caracteres',
            'telefono.required' => 'Es necesario ingresar el telefono del cliente',
            'telefono.max' => 'El telefono debe tener menos de 12 caracteres',
            'telefono.min' => 'Debe ingresar minimo 4 caracteres',
            'correo.required' => 'Es necesario ingresar el correo del cliente',
            'correo.max' => 'El correo debe tener menos de 80 caracteres',
            'correo.min' => 'Debe ingresar minimo 4 caracteres',
            ];
    }
}
