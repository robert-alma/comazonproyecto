<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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
            'usuario' => 'required|regex:/^[a-zA-Z0-9]+$/|unique:usuarios,usuario',
            'correo' => 'required|email:filter|unique:usuarios,correo',
            'password' => 'required|min:6',
            'repassword'=>'required|same:password',
            'perfil_id' => 'required',
            'sexo_id' => 'required',
            'tipo_documento_id' => 'required',
            'documento' => 'required|max:15|alpha_num|unique:datos,documento',
            'nombre' => 'required|max:150',
            'apellido_paterno' => 'required|max:150|regex:/^[a-zA-ZÁÉÍÓÚáéíóúñÑ\s]+$/',
            'apellido_materno' => 'required|max:150|regex:/^[a-zA-ZÁÉÍÓÚáéíóúñÑ\s]+$/',
            'fecha_nacimiento' => 'required|date',
            'empresa_id' => 'required',
            'direccion' => 'required|string',
            'celular' => 'required|regex:/^([0-9\s\-\+(\)]*)$/',
            'ubigeo_id'=> 'required|exists:ubigeos,id',
            'foto'=>'nullable',
        ];
    }

    public function messages()
    {
        return [

            'usuario.regex'=> 'Caracteres inválidos',
            'usuario.unique'=> 'Usuario en uso',
            'repassword.same'=>'Las contraseñas deben coincidir',
            'correo.unique'=>'Correo en uso',

            'password.min'=>'La longitud debe ser mayor a 6 caracteres',
            'repassword.unique'=>'Este campo no puede estar vacío',
            'repassword.same'=>'La contraseña no se repite correctamente',

            'documento.max'=>'El número de documento no puede sobrepasar 15 dígitos',
            'documento.alpha_num'=>'Solo son permitidos números',
            'documento.unique'=>'El documento ingresado ya esta siendo usado',

            'required'=>'Este Campo no puede quedar vacío',
            'apellido_paterno.regex'=>'No se permiten números ni caracteres de tal tipo',
            'apellido_materno.regex'=>'No se permiten número ni caracteres de tal tipo',
            'fecha_nacimiento.date'=>'Ingresa una fecha válida',
            'celular.regex'=>'Solo se permiten alfanuméricos y símbolos (,),+,-'



        ];
    }
}
