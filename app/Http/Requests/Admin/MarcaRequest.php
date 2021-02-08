<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MarcaRequest extends FormRequest
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
        ];
    }
     public function messages(){
        return [
            'nombre.required' => 'Es necesario ingresar el nombre de la marca',
            'nombre.max' => 'El nombre debe tener menos de 40 caracteres',
            'nombre.regex' => 'El nombre solo debe incluir letras',
            ];
    }
}
