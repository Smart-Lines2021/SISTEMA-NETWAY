<?php

namespace App\Http\Requests\Recursos_Humanos;

use Illuminate\Foundation\Http\FormRequest;

class AsistenciaRequest extends FormRequest
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
            'horario_id'=>'required|integer',
            'estado'=>'required|in:Presente,Ausente,Justificado',
            'fecha'=>'required|date',
        ];
    }
    public function messages(){

    return [
     'persona_id.required'=>'Es necesario seleccionar un empleado',
     'persona_id.integer'=>'Tipo de dato invalido al seleccionar empleado',
     'horario_id.required'=>'Es necesario seleccionar un horario',
     'horario_id.integer'=>'Tipo de dato invalido al seleccionar horario',
     'estado.required'=>'Es necesario seleccionar un estado',
     'estado.in'=>'Solamente puedes seleccionar las opciones presentadas en estado',
     'fecha.required'=>'Es necesario seleccionar una fecha',
     'fecha.date'=>'Formato de fecha no valido',
 ];
}
}
