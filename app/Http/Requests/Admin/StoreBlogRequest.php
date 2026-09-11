<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreBlogRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:255'],
            'featured_image' => ['nullable', 'image', 'max:5100'],
            'content' => ['required', 'string'],
            'published_at' => ['nullable', 'date'],
            'author_name' => ['nullable', 'string', 'max:255'],
            'is_published' => ['nullable', 'boolean'],
        ];
    }

    protected function prepareForValidation(): void
    {
        if ($this->title && ! $this->slug) {
            $this->merge(['slug' => Str::slug($this->title)]);
        }
    }
}
