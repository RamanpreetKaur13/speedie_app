<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class RestaurantRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:100',
            'delivery_radius' => 'required|string|max:50',
            'latitude' => 'required|string|max:50',
            'longitude' => 'required|string|max:50',
            'phone' => 'required|string|max:20',
            'secondary_phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'website' => 'required|url|max:255',
            'owner_name' => 'required|string|max:255',
            'owner_contact_number' => 'required|string|max:20',
            'owner_email' => 'required|email|max:255',
            'opening_time' => 'required|string',
            'closing_time' => 'required|string',
            'days_of_operation' => 'required|string',
            'tax_gst_number' => 'required|string|max:50',
            'business_license_number' => 'required|string|max:50',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'restraunt_images' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'featured_img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        if ($this->expectsJson()) {
            throw new HttpResponseException(response()->json([
                'status' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422));
        }

        parent::failedValidation($validator);
    }

}
