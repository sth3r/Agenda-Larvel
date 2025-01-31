<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UserStoreRequest extends FormRequest
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
            "name" => "required | string | max: 20",
            "email" => "unique:users | email | email_address",
            "password"=> "required | min:8",
        ];
    }

    protected function passedValidation(): void
    {
        $this->merge(['password' => Hash::make($this->input('password'))]);
    }


}
