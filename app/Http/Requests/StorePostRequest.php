<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:5|max:100',
            'content' => 'required|min:50|max:1000',
        ];
    }

    public function messages()
    {
        $messages = [
            'title' => 'Заглавието трябва да съдържа между 5 и 100 символа.',
            'content' => 'Съдържанието на отзива трябва да съдържа между 50 и 10000 символа',
        ];
        return $messages;
    }
}
