<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'nombre' => 'required|string|max:100' ,
                'email' => 'required|email|max:255|unique:usuarios' ,
                'edad' => 'required|integer|min:1|max:150' 
        ];
    }

    public function messages(){

        return[
            'nombre.required' => 'El nombre es requerido' ,
            'email.required' => 'El email es requerido' ,
            'edad.required' => 'El edad es requerido'  ,
            'email.unique' => 'Ya existe un usuario con ese email' 
        ];

    }
}
