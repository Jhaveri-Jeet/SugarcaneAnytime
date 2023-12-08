<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',
            'roleId' => 'required',
        ];
    }
}
