<?php

namespace App\Http\Requests\Recursos_Humanos;

use Illuminate\Foundation\Http\FormRequest;

class InformacionLaboralRequest extends FormRequest
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
            'departamento_id' => 'required|integer',
            'cargo_id' => 'required|integer',
            'salario' => 'required|numeric',
            'fecha_ingreso' => 'required|date',
        ];
    }
    public function messages(){

        return [
            'departamento_id.required'=>'Es obligatorio seleccionar un departamento',
            'cargo_id.required'=>'Es obligatorio seleccionar un cargo',
            'salario.required'=>'Es obligatorio ingresar el salario del empleado',
            'salario.numeric'=>'El salario debe tener un valor numerico',
            'fecha_ingreso.required'=>'Es necesario seleccionar la fecha de ingreso',
            'fecha_ingreso'=>'La fecha de ingreso debe de ser una fecha valida',
        ];
    }
}
