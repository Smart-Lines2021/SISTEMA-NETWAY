<?php

namespace App\Http\Requests\Flotillas;

use Illuminate\Foundation\Http\FormRequest;

class PolizaVehiculoRequest extends FormRequest
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
            /*'foto_vehiculo' => 'image',*/
            'poliza' => 'required|string|max:40',
            'aseguradora_id' => 'required|integer',
            'vigencia_poliza' => 'required',
         ];
    }

    public function messages()
    {
        return [
            'poliza.required' => 'Es necesario ingresar el número de póliza',
            'poliza.max' => 'En el número de póliza solo se permiten 40 caracteres',
            'aseguradora_id.required' => 'Es necesario selecionar una aseguradora',
            'vigencia_poliza.required' => 'La vigencia de la póliza es requerida',
        ];
    }
}
