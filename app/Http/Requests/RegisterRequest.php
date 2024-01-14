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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "login" => ["required", "string", "max:255", "unique:users,login"],
            "email" => ["required", "string", "email", "max:255", "unique:users,email"],
            "name" => ["required", "string", "max:255", "regex:/^[А-Яа-яЁёЙй]+\s[А-Яа-яЁёЙй]+$/u"],
            "phone" => ["required", "string", "max:255", "regex:/^[+7(999)-999-999-999]+$/u"],
            "password" => ["required", "string", "min:6", "max:255"],
        ];
    }
    public function messages(): array
    {
        return [
            'repeatPassword.same' => 'Пароли не совпадают',
        ];
    }
}
