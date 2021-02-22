<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AseguradoraRequest extends FormRequest
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
            'nombre' => 'required|regex:/^[\pL\s]+$/u|max:80',
            'observaciones' => 'required|regex:/^[\pL\s]+$/u|max:80',
        ];
    }
    public function messages(){

        return [
            'nombre.required' => 'Es necesario ingresar el nombre de la aseguradora',
            'nombre.max' => 'El nombre debe tener menos de 80 caracteres',
            'nombre.regex' => 'El nombre solo debe incluir letras',
            'observaciones.required' => 'Es necesario ingresar una observación en la aseguradora',
            'observaciones.max' => 'La observación debe tener menos de 80 caracteres',
            'observaciones.regex' => 'La observación solo debe incluir letras',
            ];
    }
}
