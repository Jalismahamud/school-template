<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSchoolSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'school_name' => ['required', 'string', 'max:255'],
            'logo' => ['nullable', 'image', 'max:4096'],
            'header_label' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'address' => ['required', 'string', 'max:500'],
            'whatsapp_url' => ['nullable', 'url', 'max:255'],
            'facebook_url' => ['nullable', 'url', 'max:255'],
            'footer_description' => ['required', 'string', 'max:1000'],
            'about_image' => ['nullable', 'image', 'max:4096'],
            'why_school_image' => ['nullable', 'image', 'max:4096'],
            'testimonial_image' => ['nullable', 'image', 'max:4096'],
            'faq_image' => ['nullable', 'image', 'max:4096'],
        ];
    }
}
