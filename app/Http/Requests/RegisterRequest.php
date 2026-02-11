<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "name" => "required|max:255|string",
            "email" => "required|unique:users|email",
            "password" => "required|string|min:8|max:60|confirmed"
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "O campo nome é obrigatório",
            "name.max" => "O campo nome deve conter no máximo 255 caracteres",
            "name.string" => "O campo nome deve ser um texto válido",

            "email.required" => "O campo email é obrigatório",
            "email.email" => "O campo email deve ser um endereço de email válido",
            "email.unique" => "O email já está em uso",

            "password.required" => "O campo senha é obrigatório",
            "password.string" => "O campo senha deve ser um texto válido",
            "password.min" => "O campo senha deve conter no mínimo 8 caracteres",
            "password.max" => "O campo senha deve conter no máximo 60 caracteres",
            "password.confirmed" => "A confirmação da senha não corresponde"
        ];
    }
}
