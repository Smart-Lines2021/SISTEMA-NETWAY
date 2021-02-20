<?php

namespace App\Http\Requests\Recursos_Humanos;

use Illuminate\Foundation\Http\FormRequest;

class DomicilioProveedorRequest extends FormRequest
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
        'calle'=> 'required|regex:/^[\pL\s]+$/u|max:40',
        'codigo_postal'=> 'required|numeric|max:100000',
        'colonia'=> 'required|regex:/^[\pL\s]+$/u|max:40',
        'numero_interior'=> 'required|numeric|max:100000',
        'numero_exterior'=> 'required|numeric|max:100000',
        'estado'=> 'required|regex:/^[\pL\s]+$/u|max:40',
        'municipio'=> 'required|regex:/^[\pL\s]+$/u|max:40',
        'proveedor_id' => 'required|integer',
        ];
    }

    public function messages(){

    return [
     'calle.required'=>'Es obligatorio ingresar la calle del domicilio',
     'calle.regex'=>'El nombre de la calle solo puede incluir letras',
     'calle.max'=>'El nombre de la calle no debe exceder a 40 caracteres',
     'codigo_postal.numeric'=>'El codigo postal debe ser numerico',
     'codigo_postal.required'=>'Es necesario ingresar el codigo postal',
     'codigo_postal.max'=>'El codigo postal no debe exceder 5 caracteres',
     'colonia.required'=>'Es necesario ingresar el nombre de la colonia',
     'colonia.regex'=>'El nombre de la colonia debe contener solamente letras',
     'colonia.max'=>'El nombre de la colonia debe ser menor a 40 caracteres',
     'numero_interior.required'=>'Es necesario ingresar el número interior',
     'numero_interior.numeric'=>'El número interior debe ser de tipo numerico',
     'numero_interior.max'=>'El número interior debe contener menos de 5 caracteres',
     'numero_exterior.required'=>'Es necesario ingresar el número exterior',
     'numero_exterior.numeric'=>'El número exterior debe ser de tipo numerico',
     'numero_exterior.max'=>'El número exterior debe contener menos de 5 caracteres',
     'estado.required'=>'Es necesario ingresar el nombre del estado',
     'estado.regex'=>'El nombre del estado debe contener solamente letras',
     'estado.max'=>'El nombre del estado debe ser menor a 40 caracteres',
     'municipio.required'=>'Es necesario ingresar el nombre del municipio',
     'municipio.regex'=>'El nombre del municipio debe contener solamente letras',
     'municipio.max'=>'El nombre del municipio debe ser menor a 40 caracteres',
     'proveedor_id.required'=>'Ingrese un valor correspondiente al campo foraneo',
     'proveedor_id.integer'=>'El tipo de dato de id debe ser entero',
 ];
}
}
