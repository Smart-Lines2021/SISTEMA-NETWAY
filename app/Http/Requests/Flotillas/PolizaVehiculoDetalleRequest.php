<?php

namespace App\Http\Requests\Flotillas;

use Illuminate\Foundation\Http\FormRequest;

class PolizaVehiculoDetalleRequest extends FormRequest
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

            'poliza' => 'required|string|max:40',
            'aseguradora_id' => 'required|integer',
            'vigencia_poliza' => 'required',
            'inicio_poliza' => 'required',
        ];
    }

    public function messages()
    {
        return [
           
            'poliza.required' => 'Es necesario ingresar el número de póliza',
            'poliza.max' => 'En el número de póliza solo se permiten 40 caracteres',
            'aseguradora_id.required' => 'Es necesario selecionar una aseguradora',
            'inicio_poliza.required' => 'La vigencia de la póliza es requerida',
            'vigencia_poliza.required' => 'La vigencia de la póliza es requerida',
        ];
    }
}
