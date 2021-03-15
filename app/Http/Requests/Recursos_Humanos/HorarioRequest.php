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
            'hora_entrada' => 'required|string|max:5|min:4',
            'hora_salida' => 'required|string|max:5|min:4',
        ];
    }
    public function messages(){
        return [
            'dias.required'=>'Es necesario ingresar un rango de dias',
            'dias.string'=>'Ingrese un formato correcto en los dias',
            'dias.max'=>'Has excedido el número de caracteres en los dias',
            'dias.min'=>'La cantidad de caracteres minima en los dias es de 10',
            'hora_entrada.required'=>'Es necesario ingresar la hora de entrada',
            'hora_entrada.string'=>'Ingrese un formato correcto en la hora de entrada',
            'hora_entrada.max'=>'Has excedido el número de caracteres en la hora de entrada',
            'hora_entrada.min'=>'La cantidad de caracteres minima en las hora de entrada es de 5',
            'hora_salida.required'=>'Es necesario ingresar la hora de salida',
            'hora_salida.string'=>'Ingrese un formato correcto en la hora de salida',
            'hora_salida.max'=>'Has excedido el número de caracteres en la hora de salida',
            'hora_salida.min'=>'La cantidad de caracteres minima en las hora de salida es de 5',
        ];
    }
}
