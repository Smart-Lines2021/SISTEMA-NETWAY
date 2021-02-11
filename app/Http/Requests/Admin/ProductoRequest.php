<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
           'nombre' => 'required|string|max:40',
           'descripcion' => 'required|string|max:250',
           'cantidad' => 'required|numeric',
           'marca_id' => 'required',
           'categoria_producto_id' => 'required',
           'tipo_producto_id' => 'required',
        ];
    }

    public function messages(){
        return [
            'nombre.required'=>'Asigne un nombre al producto',
            'nombre.max'=>'En el campo nombre solo se permiten ingresar 40 caracteres',
            'nombre.max'=>'No puedes ingresar mas de 60 caracteres en el campo nombre',
            'descripcion.required'=>'Ingrese la descripción del producto',
            'descripcion.max'=>'No puedes ingresar mas de 250 caracteres en el campo descripción',
            'cantidad.rquired'=>'Ingrese la cantidad del producto',
            'cantidad.numeric'=>'Solo se admiten números en el campo cantidad del producto',
            'marca_id'=>'Seleccione una marca',
            'categoria_producto_id'=>'Seleccione una categoría del producto',
            'tipo_producto_id'=>'Seleccione el tipo de producto',

        ];
    }
}
