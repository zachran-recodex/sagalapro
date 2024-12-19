<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FleetUpdateRequest extends FormRequest
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
            'title' => 'sometimes|required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gltf' => 'nullable|string',
            'description' => 'sometimes|required|string',
            'status' => 'required|boolean',
            'practice_range' => 'sometimes|required|string|max:255',
            'cruise_speed' => 'sometimes|required|string|max:255',
            'maximum_speed' => 'sometimes|required|string|max:255',
            'normal_takeoff_weight' => 'sometimes|required|string|max:255',
            'max_takeoff_weight' => 'sometimes|required|string|max:255',
        ];
    }
}
