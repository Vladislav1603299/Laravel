<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsStoreRequest extends FormRequest
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
            'title' => ['required', 'string', 'min: 3', 'max: 35'],
            'autor' => ['required', 'string', 'min: 3', 'max: 35'],
            'image' => ['sometimes', 'image:jpg, jpeg, png'],
            'text' => ['sometimes'],
            'description' => ['required', 'string', 'min: 50'],
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
            'image' =>
                'Поле :attribute должно быть изображение формата jpg, jpeg, png.',
        ];
    }

    public function attributes()
    {
        return [
            'title' => '"Заголовок"',
            'image' => '"Загрузить файл"',
            'autor' => '"Автор"',
            'description' => '"Описание"',
        ];
    }
}
