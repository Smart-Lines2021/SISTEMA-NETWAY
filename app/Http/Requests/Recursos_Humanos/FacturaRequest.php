<?php

namespace App\Http\Requests\Recursos_Humanos;

use Illuminate\Foundation\Http\FormRequest;

class FacturaRequest extends FormRequest
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
            'url'=>'required|mimes:xml',
            'url_pdf'=>'required|mimes:pdf',
            'cliente_id'=>'required|integer'
        ];
    }
    public function messages(){
        return [
            'url.required'=>'Es necesario seleccionar una factura',
            'url.mimes'=>'El tipo de documento de la factura no es valido, por favor seleccione un archivo con extensión .xml',
            'url_pdf.required'=>'Es necesario subir el pdf de la factura',
            'url_pdf.mimes'=>'El tipo de documento del PDF de la factura no es valido, por favor seleccione un archivo con extensión .pdf',
            'cliente_id.required'=>'Por favor seleccione el cliente asociado a la factura',
            'cliente_id.integer'=>'Seleccione un cliente valido',
        ];
    }
}
