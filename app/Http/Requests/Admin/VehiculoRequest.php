<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoRequest extends FormRequest
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
           /*'foto_vehiculo' => 'image',*/
           'nombre' => 'required|string|max:40',
           'anio_modelo' => 'required|numeric',
           'kilometraje' => 'required|numeric',
           'placa' => 'required|regex:[[A-Z 0-9]+]|max:30',
           'color' => 'required|integer',
           'no_serie' => 'required|regex:[[A-Z 0-9]+]|max:30',
           'marca_id' => 'required|integer',
           'tipo_vehiculo_id' => 'required|integer',
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'Es necesario ingresar el nombre del vehículo',
            'nombre.max' => 'En el nombre del vehiculo solo se permiten 40 caracteres',
            'anio_modelo.required' => 'Es necesario ingresar el año del modelo del vehiculo',
            'anio_modelo.numeric' => 'Solo se permiten numeros en el año del modelo del vehiculo',
            'anio_modelo.max' => 'Solo se permiten 4 números en el el año del modelo del vehiculo',
            'kilometraje.required' => 'Es necesario ingresar el kilometraje del vehiculo',
            'kilometraje.numeric' => 'Solo se permiten numeros en el kilometraje del vehiculo',
            'kilometraje.max' => 'Solo se permiten 10 números en el kilometraje del vehiculo',
            'placa.required' => 'Es necesario ingresar la placa del vehículo',
            'placa.regex' => 'Solo se permiten numeros y letras en la placa del vehículo',
            'placa.max' => 'Solo se permiten 30 caracteres en la placa del vehiculo',
            'color.required' => 'Es necesario seleccionar el color del vehículo',
            'no_serie.required' => 'Es necesario ingresar el número de serie del vehículo',
            'no_serie.regex' => 'Solo se permiten numeros y letras en el número de serie del vehículo',
            'no_serie.max' => 'Solo se permiten 30 caracteres en el número de serie del vehiculo',
            'marca_id.required' => 'Es necesario seleccionar el color del vehículo',
            'tipo_vehiculo_id.required' => 'Es necesario seleccionar el color del vehículo',
        ];
    }
}
