<?php

namespace App\Http\Requests\Recursos_Humanos;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaClienteRequest extends FormRequest
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

            'nombre' => 'required|string|max:100|min:4',
            'rfc' => 'required|string|max:40|min:4',
            'domicilio_fiscal' => 'required|string|max:100|min:4',
            'telefono' => 'required|string|max:12|min:4',
            'correo' => 'required|string|max:80|min:4',
            'horario' => 'required|string|max:80|min:4',
            'cliente_id' => 'required|integer',
        ];
    }

    public function messages(){

        return [
            'nombre.required' => 'Es necesario ingresar el nombre de la subempresa del cliente',
            'nombre.max' => 'El nombre de la subempresa debe tener menos de 100 caracteres',
            'nombre.min' => 'Debe ingresar minimo 4 caracteres en el nombre de la subempresa',
            'rfc.required' => 'Es necesario ingresar el rfc de la subempresa',
            'rfc.max' => 'El RFC debe tener menos de 40 caracteres',
            'rfc.min' => 'Debe ingresar minimo 4 caracteres en el RFC',
            'domicilio_fiscal.required' => 'Es necesario ingresar el domicilio fiscal de la subempresa del cliente',
            'domicilio_fiscal.max' => 'El domicilio fiscal de la subempresa debe tener menos de 100 caracteres',
            'domicilio_fiscal.min' => 'Debe ingresar minimo 4 caracteres en el domicilio fiscal de la subempresa',
            'telefono.required' => 'Es necesario ingresar el teléfono de la subempresa',
            'telefono.max' => 'El teléfono debe tener menos de 12 caracteres',
            'telefono.min' => 'Debe ingresar minimo 4 caracteres en el teléfono',
            'correo.required' => 'Es necesario ingresar el correo de la subempresa',
            'correo.max' => 'El correo debe tener menos de 80 caracteres',
            'correo.min' => 'Debe ingresar minimo 4 caracteres en el correo',
            'horario.required' => 'Es necesario ingresar el horario de la subempresa del cliente',
            'horario.max' => 'El horario de la subempresa debe tener menos de 100 caracteres',
            'horario.min' => 'Debe ingresar minimo 4 caracteres en el horario de la subempresa',
            'cliente_id.required'=>'Ingrese un valor correspondiente al campo foraneo',
            'cliente_id.integer'=>'El tipo de dato de id debe ser entero',
            ];
    }
}
