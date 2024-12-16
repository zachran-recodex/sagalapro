<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FleetStoreRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'gltf' => 'nullable|string',
            'description' => 'required|string',
            'practice_range' => 'required|string|max:255',
            'cruise_speed' => 'required|string|max:255',
            'maximum_speed' => 'required|string|max:255',
            'normal_takeoff_weight' => 'required|string|max:255',
            'max_takeoff_weight' => 'required|string|max:255',
        ];
    }
}
