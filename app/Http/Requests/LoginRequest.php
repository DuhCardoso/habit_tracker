<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // como esta request é para login, não precisamos de autorização, então retornamos true para permitir que qualquer usuário possa fazer essa requisição
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
            // Valida os campos de email e senha, garantindo que o email seja um formato válido e que ambos os campos sejam preenchidos
            "email" => "required|email",
            "password" => "required|min:6|max:60"
        ];
    }

    public function messages(): array{
        return [
            // Mensagens de erro personalizadas para os campos de email e senha, fornecendo feedback claro ao usuário sobre o que está errado
            "email.required" => "O campo de email é obrigatório!",
            "email.email" => "Por favor, insira um endereço de email válido.",
            "password.required" => "O campo de senha é obrigatório!",
            "password.min" => "A senha deve conter no mínimo 6 caracteres.",
            "password.max" => "A senha deve conter no máximo 60 caracteres."
        ];
    }
}
