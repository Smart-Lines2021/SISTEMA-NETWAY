<?php

namespace App\Http\Requests\Recursos_Humanos;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmpleadoRequest extends FormRequest
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
            'nombre'=> ['required','min:1','max:40','regex:/^[\pL\s]+$/u'],
            'apellido'=> ['required','min:1','max:40','regex:/^[\pL\s]+$/u'],
            'curp'=> ['required',Rule::unique('personas'),'regex:[[A-Z][0-9]+]','min:18','max:20'],
            'rfc'=> ['required',Rule::unique('personas'),'regex:[[A-Z][0-9]+]','max:13'],
            'correo'=> ['required','email'],
            'nss'=> ['required','numeric','max:99999999999'],
            'carrera'=> ['required','regex:/^[\pL\s]+$/u','max:40'],
        ];
        if($this->method() === 'PUT'){ //Si es para actualizar
        $rules = [
            'nombre'=> ['required','min:1','max:40','regex:/^[\pL\s]+$/u'],
            'apellido'=> ['required','min:1','max:40','regex:/^[\pL\s]+$/u'],
            'curp'=> ['required',Rule::unique('personas')->ignore($this->route('persona')->id)],
            'rfc'=> ['required',Rule::unique('personas')->ignore($this->route('persona')->id)],
            'correo'=> ['required','email'],
            'nss'=> ['required','numeric','max:99999999999'],
            'carrera'=> ['required','regex:/^[\pL\s]+$/u'],
        ];

    }
        return $rules;
    }
     public function messages(){

        return [
            'nombre.required' => 'Es necesario ingresar el nombre del empleado',
            'nombre.max' => 'El nombre debe tener menos de 50 caracteres',
            'nombre.regex'=>'El nombre solamente debe incluir letras',
            'apellido.required' => 'Es necesario ingresar los apellidos del empleado',
            'apellido.max' => 'El apellido debe tener menos de 60 caracteres',
            'apellido.regex'=>'El apellido solamente debe incluir letras',
            'curp.required' => 'Es necesario ingresar la CURP',
            'curp.regex' => 'La CURP solo debe tener mayusculas y numeros',
            'curp.min' => 'La CURP debe tener al menos 18 caracteres',
            'curp.max' => 'La CURP no debe de tener mas de 20 caracteres',
            'rfc.required' => 'Es necesario ingresar el RFC',
            'rfc.regex' => 'El RFC solo debe tener mayusculas y numeros',
            'rfc.min' => 'El RFC debe tener al menos 12 caracteres',
            'rfc.max' => 'El RFC no debe de tener mas de 13 caracteres',
            'correo.email'=>'La dirección de correo no es valida',
            'correo.email'=>'Es necesario ingresar el correo del empleado',
            'nss.required'=>'Es necesario ingresar el número de seguridad social',
            'nss.numeric'=>'El número de seguridad social debe ser de tipo numerico',
            'nss.max'=>'El número de seguridad social no debe exceder los 11 caracteres',
            'carrera.required'=>'Es necesario ingresar la carrera del empleado',
            'carrera.regex'=>'La carrera solamente debe incluir letras',
        ];
    }
}
