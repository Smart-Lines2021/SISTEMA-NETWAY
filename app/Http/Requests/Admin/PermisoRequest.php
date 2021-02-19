<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PermisoRequest extends FormRequest
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
        'name' => 'required|unique:permissions',
        'display_name' => 'required|unique:permissions',
        'description' => 'required|string|max:254',
        'category'=>'required|in:Control de Usuarios,Ubicación Geográfica,Recursos Humanos,Productos,Proveedores y Vehiculos,Gastos e Información Bancaria',
    ];
        if($this->method() === 'PUT'){ //Si es para actualizar
            $rules = [
            'display_name'=>['required',Rule::unique('permissions')->ignore($this->route('permiso'))], //Obtenemos del parametro de la ruta la id del permiso
            'description' => 'required|string|max:254',
             'category'=>'required|in:Control de Usuarios,Ubicación Geográfica,Recursos Humanos,Productos,Proveedores y Vehiculos,Gastos e Información Bancaria',
        ];
    }
    return $rules;
}
public function messages(){
            return [
                'name.required'=>'Asigne un nombre identificador al permiso',
                'name.unique'=>'Ya existe un permiso con este identificador',
                'display_name.unique'=>'El nombre a mostrar ya ha sido tomado',
                'display_name.required'=>'Asigne un nombre al permiso',
                'display_name.max'=>'Los datos ingresados deben de ser menores a 254 caracteres',
                'description.required'=>'Añada una descripción del permiso',
                'description.max'=>'Los datos ingresados en la descripcion deben ser menores a 254 caracteres',
                'category.required'=>'Añada una categoria al permiso',
                'category.in'=>'No se ha seleccionado una opcion valida en el campo categoría',

            ];
        }
}
