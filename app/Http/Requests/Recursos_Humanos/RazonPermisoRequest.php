<?php

namespace App\Http\Requests\Recursos_Humanos;

use Illuminate\Foundation\Http\FormRequest;

class RazonPermisoRequest extends FormRequest
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
            'descripcion' => 'required|string|max:100|min:5',
            'duracion' => 'required|string|max:25|min:5',
        ];
    }
    public function messages(){
        return [
            'descripcion.required'=>'Es necesario ingresar una descripción',
            'descripcion.string'=>'Ingrese un formato correcto en la descripción',
            'descripcion.max'=>'Has excedido el número de caracteres en la descripción',
            'descripcion.min'=>'La cantidad de caracteres minima de la descripción es de 5',
            'duracion.required'=>'Es necesario ingresar una duración',
            'duracion.string'=>'Ingrese un formato correcto en la duración',
            'duracion.max'=>'Has excedido el número de caracteres en la duración',
            'duracion.min'=>'La cantidad de caracteres minima de la duración es de 5',
        ];
    }
}
