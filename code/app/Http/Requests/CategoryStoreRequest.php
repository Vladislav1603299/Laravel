<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'min: 3', 'max: 45'],
            'description' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute не должно быть пусто',
            'min' => [
                'array' => 'The :attribute must have at least :min items.',
                'file' => 'The :attribute must be at least :min kilobytes.',
                'numeric' => 'The :attribute must be at least :min.',
                'string' => 'Поле :attribute содержит менее :min символа(ов).',
            ],
        ];
    }

    public function attributes()
    {
        return [
            'title' => '"Название категории"',
            'description' => '"Описание категории"',
        ];
    }
}
