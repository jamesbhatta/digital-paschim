<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusinessRequest extends FormRequest
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
            'name' => 'required',
            'business_type' => 'required',
            'account_type' => 'required',
            'category_id' => 'required|exists:categories,id',
            'expires_at' => 'required_unless:account_type,1',
            'city_id' => 'required|exists:cities,id',
            'address' => 'required',
            'contact_one' => 'required_without:contact_two',
            'contact_two' => 'nullable',
            'email' => 'nullable|email',
            'website' => 'nullable',
            'map_id' => 'nullable',
            'facebook_link' => 'nullable',
            'twitter_link' => 'nullable',
            'google_link' => 'nullable',
            'description_title' => 'nullable',
            'description' => 'nullable',
            'services_title' => 'nullable',
            'services' => 'nullable',
            'profile_pic' => 'image|mimes:jpg,jpeg,png',
            'cover_pic' => 'image|mimes:jpg,jpeg,png',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'expires_at.required_unless' => 'Premium accounts must have a expiry date.',
            'contact_one.required_without' => 'At least one Contact Number is required.',
        ];
    }
}
