<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
          'name' => 'required',
          'email' => 'required',
          'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
         'name.required' => ':attribute alanı zorunludur',
         'password.required' => ':attribute zorunludur.',
         'email.required' => ':attribute zorunludur.',
       ];
    }

    public function attributes()
    {
        return [
            'name' => 'Ad',
            'password' => 'Şifre',
            'email' => 'E-Posta',
        ];
    }
}
