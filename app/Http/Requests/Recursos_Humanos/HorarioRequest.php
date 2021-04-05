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
            'dia_inicio' => 'required|string|max:10|min:5',
            'dia_final' => 'required|string|max:10|min:5',
            'hora_entrada' => 'required|string|max:5|min:4',
            'hora_salida' => 'required|string|max:5|min:4',
        ];
    }
    public function messages(){
        return [
            'dia_inicio.required'=>'Es necesario ingresar el dia de entrada',
            'dia_inicio.string'=>'Ingrese un formato correcto en el dia de entrada',
            'dia_inicio.max'=>'Has excedido el número de caracteres en el dia de entrada',
            'dia_inicio.min'=>'La cantidad de caracteres minima en el dia de entrada es de 5',
            'dia_final.required'=>'Es necesario ingresar el dia de salida',
            'dia_final.string'=>'Ingrese un formato correcto en el dia de salida',
            'dia_final.max'=>'Has excedido el número de caracteres en el dia de salida',
            'dia_final.min'=>'La cantidad de caracteres minima en el dia de salida es de 5',
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
