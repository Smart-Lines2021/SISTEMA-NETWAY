<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RolRequest extends FormRequest
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
        $rules = [
            'name' => 'required|unique:roles',
            'display_name' => 'required|unique:roles',
            'description' => 'required|string|max:254',
        ];
        if($this->method() === 'PUT'){ //Si es para actualizar
        $rules = [
            'display_name'=>['required',Rule::unique('roles')->ignore($this->route('role')->id)], //Obtenemos del parametro de la ruta la id del rol
            'description' => 'required|string|max:254',
        ];
    }
        return $rules;
    }
    public function messages(){
        return [
            'name.required'=>'Asigne un nombre identificador al rol',
            'name.unique'=>'Ya existe un rol con este nombre',
            'display_name.unique'=>'Ya existe un rol con este nombre a mostrar',
            'display_name.required'=>'Asigne un nombre al rol',
            'display_name.max'=>'Los datos ingresados deben de ser menores a 254 caracteres',
            'description.required'=>'Añada una descripción del rol',
            'description.max'=>'Los datos ingresados en la descripcion deben ser menores a 254 caracteres',
        ];
    }
}
