<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Permitir acceso al request.
    }

    public function rules()
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Debe ser un correo electrónico válido.',
            'password.required' => 'La contraseña es obligatoria.',
        ];
    }
}
