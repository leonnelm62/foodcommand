<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApiRegisterRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'type' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'email' => 'Vous devez renseigner une adresse email.',
            'password' => 'Vous devez fournir un mot de passe.',
            'first_name' => 'Vous devez fournir votre Prénom.',
            'last_name' => 'Vous devez fournir votre Nom.'
        ];
    }
}
