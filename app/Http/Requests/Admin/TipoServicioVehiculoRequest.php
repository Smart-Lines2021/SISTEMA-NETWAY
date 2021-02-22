<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TipoServicioVehiculoRequest extends FormRequest
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
            'nombre' => 'required|regex:/^[\pL\s]+$/u|max:120',
            'descripcion' => 'required|regex:/^[\pL\s]+$/u|max:80',
        ];
    }
    public function messages(){

        return [
            'nombre.required' => 'Es necesario ingresar el nombre del tipo de servicio de vehiculo',
            'nombre.max' => 'El nombre debe tener menos de 120 caracteres',
            'nombre.regex' => 'El nombre solo debe incluir letras',
            'observaciones.required' => 'Es necesario ingresar una descripción en el tipo de servicio de vehiculo',
            'observaciones.max' => 'La descripción debe tener menos de 80 caracteres',
            'observaciones.regex' => 'La descripción solo debe incluir letras',
            ];
    }
}
