<?php

namespace App\Http\Requests\Recursos_Humanos;

use Illuminate\Foundation\Http\FormRequest;

class HorarioRequest extends FormRequest
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
            'dias' => 'required|string|max:30|min:10',
            'horas' => 'required|string|max:11|min:10',
        ];
    }
    public function messages(){
        return [
            'dias.required'=>'Es necesario ingresar un rango de dias',
            'dias.string'=>'Ingrese un formato correcto en los dias',
            'dias.max'=>'Has excedido el número de caracteres en los dias',
            'dias.min'=>'La cantidad de caracteres minima en los dias es de 10',
            'horas.required'=>'Es necesario ingresar un rango de horas',
            'horas.string'=>'Ingrese un formato correcto en las horas',
            'horas.max'=>'Has excedido el número de caracteres en las horas',
            'horas.min'=>'La cantidad de caracteres minima en las horas es de 10',
        ];
    }
}
