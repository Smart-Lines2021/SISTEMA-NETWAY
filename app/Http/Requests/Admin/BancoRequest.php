<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BancoRequest extends FormRequest
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
            'nombre' => 'required|regex:/^[\pL\s]+$/u|max:40',
            'observaciones' => 'required|regex:/^[\pL\s]+$/u|max:80',
        ];
    }
    public function messages(){

        return [
            'nombre.required' => 'Es necesario ingresar el nombre del banco',
            'nombre.max' => 'El nombre debe tener menos de 80 caracteres',
            'nombre.regex' => 'El nombre solo debe incluir letras',
            'observaciones.required' => 'Es necesario ingresar una observaciones del banco',
            'observaciones.max' => 'La observaciones debe tener menos de 80 caracteres',
            'observaciones.regex' => 'La descripción solo debe incluir letras',
            ];
    }
}
