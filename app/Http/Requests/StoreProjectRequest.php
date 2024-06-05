<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|unique:projects|max:200|min:3',
            'content' => 'nullable|max:255',
            'slug' => 'nullable',
            'image' => 'nullable|image|max:255',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.unique:projects' => 'Il titolo è già presente nel database',
            'title.max' => 'Titolo troppo lungo, inserire massimo :max caratteri',
            'title.min' => 'Titolo troppo corto, inserire massimo :min caratteri',
            'image.max' => 'URL troppo lunga, consentiti massimo :max caratteri'
        ];
    }
}
