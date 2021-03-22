<?php

namespace App\Http\Requests\Flotillas;

use Illuminate\Foundation\Http\FormRequest;

class ServicioVehiculoRequest extends FormRequest
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
           'kilometraje'=>'required|numeric|digits_between:1,8',
           'tipo_servicio_id'=>'required|integer',
           'taller_id'=>'required|integer',
           'vehiculo_id'=>'required|integer',
           'observaciones'=>'string|max:150',
           'fecha'=>'required|date',
           'estado'=>'required|in:Programado,Realizado,Suspendido,Cancelado',
           'tipo_mantenimiento'=>'required|in:Programado,Imprevisto',

       ];
   }
   public function messages(){
        return [
            'tipo_servicio_id.required' => 'Es necesario seleccionar un tipo de servicio',
            'tipo_servicio_id.integer' => 'Seleccione una opción valida para el tipo de servicio',
            'taller_id.required' => 'Es necesario seleccionar un taller',
            'taller_id.integer' => 'Seleccione una opción valida para el taller',
            'vehiculo_id.required' => 'Es necesario seleccionar un vehiculo',
            'vehiculo_id.integer' => 'Seleccione una opción valida para el vehiculo',
            'observaciones.max'=>'Las observaciones no deben pasar de 150 caracteres',
            'fecha.required'=>'Es necesario indicar la fecha de realización del servicio',
            'fecha.date'=>'El formato de fecha no es valido',
            'estado.required'=>'Seleccione un estado del servicio del vehiculo',
            'estado.in'=>'Seleccione una opcion valida del estado del servicio del vehiculo',
            'tipo_mantenimiento.required'=>'Seleccione un tipo de mantenimiento del vehiculo',
            'tipo_mantenimiento.in'=>'Seleccione una opcion valida del tipo de mantenimiento del vehiculo',
            'kilometraje.digits_between' => 'El kilometraje no debe exceder los 8 digitos',
            ];
    }
}
