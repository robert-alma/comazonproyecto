<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CotizacionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'servicio_id'=>'required',
            'precio'=>'required|alpha_num',
            'cantidad'=> 'required|alpha_num',
            'descuento'=> 'required|alpha_num',
            'total'=>'required|alpha_num',
            'foto'=>'nullable|image|mimes:png,jpg,jpeg|max:2000',

        ];
    }
    public function messages()
    {
        return [
            'required'=>'El campo no puede estar vacío',
            'alpha_num'=>'Por favor ingrese una cantidad numérica',
            'foto.mimes'=>'Solo se permiten imágenes tipo png, jpg o jpeg',
        ];
    }
}
