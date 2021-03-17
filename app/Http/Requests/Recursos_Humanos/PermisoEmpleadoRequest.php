<?php

namespace App\Http\Requests\Recursos_Humanos;

use Illuminate\Foundation\Http\FormRequest;

class PermisoEmpleadoRequest extends FormRequest
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
            'persona_id'=>'required|integer',
            'asistencia_id'=>'required|integer',
            'razon_permiso_id'=>'required|integer',
            'fecha_inicio'=>'required|date',
            'fecha_fin'=>'required|date',
        ];
    }
    public function messages(){

        return [
           'persona_id.required'=>'Es necesario seleccionar un empleado',
           'persona_id.integer'=>'Tipo de dato invalido al seleccionar empleado',
           'asistencia_id.required'=>'Es necesario seleccionar una asistencia',
           'asistencia_id.integer'=>'Tipo de dato invalido al seleccionar asistencia',
           'razon_permiso_id.required'=>'Es necesario seleccionar una justificación',
           'razon_permiso_id.integer'=>'Tipo de dato invalido al seleccionar una justificación',
           'fecha_inicio.required'=>'Es necesario seleccionar una fecha de inicio',
           'fecha_inicio.date'=>'Formato de fecha de inicio no valido',
           'fecha_fin.required'=>'Es necesario seleccionar una fecha de fin',
           'fecha_fin.date'=>'Formato de fecha de fin no valido',
       ];
   }
}
