<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HouseStoreRequest extends FormRequest
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
            'university_id' => ['required', 'exists:universities,id'],
            'image' => ['required', 'image'],
            'address' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'location_id' => ['required', 'exists:locations,id'],
            't_of_accommodation' => ['required'],
            'rental_rate' => ['required'],
            'occ_date' => ['required', 'date'],
            'no_of_washrooms' => ['required'],
            'l_occupied' => ['required'],
            'distance' => ['required'],
            'w_time' => ['required'],
            'c_time' => ['required'],
            'd_time' => ['required'],
            'description' => ['required'],
            'utilities' => ['nullable'],
            'amenities' => ['nullable'],
            'status' => ['required'],
        ];
    }
}
