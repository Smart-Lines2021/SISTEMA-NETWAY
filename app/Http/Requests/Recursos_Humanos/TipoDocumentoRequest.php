<?php

namespace App\Http\Requests\Recursos_Humanos;

use Illuminate\Foundation\Http\FormRequest;

class TipoDocumentoRequest extends FormRequest
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
            'nombre'=> 'required|regex:/^[\pL\s]+$/u|max:30',
            'clave'=> 'required|regex:/^[\pL\s]+$/u|max:20',
            'descripcion'=> 'required|regex:/^[\pL\s]+$/u|max:50',
            'carpeta'=> 'required|regex:/^[\pL\s]+$/u|max:40',
            'formato'=> 'required|regex:/^[\pL\s]+$/u|max:5',
        ];
    }
    public function messages(){

        return [
         'nombre.required'=>'Es obligatorio ingresar el nombre del tipo de documento',
         'nombre.regex'=>'El nombre del tipo de documento solamente puede llevar letras',
         'nombre.max'=>'El nombre del tipo de documento no debe exceder a 30 caracteres',
         'clave.required'=>'Es obligatorio ingresar la clave del tipo de documento',
         'clave.regex'=>'La clave del tipo de documento solamente puede llevar letras',
         'clave.max'=>'La clave del tipo de documento no debe exceder a 30 caracteres',
         'descripcion.required'=>'Es obligatorio ingresar la descripcion del tipo de documento',
         'descripcion.regex'=>'La descripcion del tipo de documento solamente puede llevar letras',
         'descripcion.max'=>'La descripcion del tipo de documento no debe exceder a 50 caracteres',
         'carpeta.required'=>'Es obligatorio ingresar el nombre de la carpeta del tipo de documento',
         'carpeta.regex'=>'El nombre de la carpeta del tipo de documento solamente puede llevar letras',
         'carpeta.max'=>'El nombre de la carpeta del tipo de documento no debe exceder a 40 caracteres',
         'formato.required'=>'Es obligatorio ingresar el formato del tipo de documento',
         'formato.regex'=>'El formato del tipo de documento solamente puede llevar letras',
         'formato.max'=>'El formato del tipo de documento no debe exceder a 5 caracteres',

     ];
 }
}
