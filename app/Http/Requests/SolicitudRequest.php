<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudRequest extends FormRequest
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
            'asunto' => array('required'),
            'comentario' => array('required', 'max:400'),
            'presupuesto' => array('required', 'alpha_num'),
            'fecha_entrega' => array('required'),

        ];
    }
    public function messages()
    {
        return [
            'required' => 'Este campo no puede estar vacío',
            'comentario.max' => 'El comentario no puede exceder los 400 caracteres',
            'presupuesto.alpha_num' => 'El presupuesto debe ser un número',

        ];
    }
}
