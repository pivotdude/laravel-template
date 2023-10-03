<?php

namespace App\Http\Requests;

class UserStoreRequest extends BaseRequest
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
            'email' => 'required|email|unique:user',
            'name' => 'required|string|max:50',
            'password' => 'required|min:6|max:255'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'email.required' => 'Email обязательное поле',
            'name.required' => 'Name обязательное поле',
            'password.required' => 'Password обязательное поле',
        ];
    }

}
