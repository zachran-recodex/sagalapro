<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingStoreRequest extends FormRequest
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
            'logo' => ['sometimes', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'favicon' => ['sometimes', 'mimes:png,svg,ico', 'max:2048'],
            'phone_one' => ['nullable', 'string', 'max:255'],
            'phone_two' => ['nullable', 'string', 'max:255'],
            'email_one' => ['nullable', 'string', 'email', 'max:255'],
            'email_two' => ['nullable', 'string', 'email', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'operational_address' => ['nullable', 'string', 'max:255'],
            'footer_text' => ['required', 'string', 'max:65535']
        ];
    }
}
