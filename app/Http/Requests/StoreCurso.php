<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //aquí verifica si el usuario tiene permisos para insertar valores en la base de datos. No es necesario si usamos otros maneras de autentificar usuarios. Si es así lo dejaremos en true.

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
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ];
    }

    //aqui podemos crear un método para modificar el atributo de la clase y personalizarlo en el mensaje de error. 

    public function attributes()
    {
        return [

            //sintaxis 'nombre del campo' => 'nombre deseado'

            'name' => 'nombre del curso',
        ];
    }

    //aqui podemos crear un método para modificar el mensaje de error y personalizarlo al gusto

    public function messages()
    {
        return [

            //sintaxis 'nombre del campo.tipo de validacion' => 'mensaje de error'

            'descripcion.min' => 'Descripcion muy corta, al menos :min caracteres.',
        ];
    }
}
