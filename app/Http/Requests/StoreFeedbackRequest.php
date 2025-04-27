<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeedbackRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'fullname' => ['required', 'string', 'min:1'],
            'phone' => ['required', 'regex:/^\+7-\d{3}-\d{3}-\d{2}-\d{2}$/i'],
            'body' => ['required', 'string', 'max:500'],
            'rating' => ['required', 'min:1', 'max:1']
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Требуется ввести ФИО',
            'fullname.string' => 'ФИО должно быть строкой',
            'fullname.min' => 'ФИО не может быть короче 1 символа',
            'phone.required' => 'Требуется ввести номер телефона',
            'phone.regex' => 'Телефон должен соответствовать формату: +7-###-###-##-##',
            'body.required' => 'Требуется ввести текст отзыва',
            'body.string' => 'Отзыв должен быть строкой',
            'body.max' => 'Максимальный размер отзыва - 250 символов',
            'rating.requried' => 'Требуется поставить оценку',
            'rating.min' => 'Оценка не может быть менее 1 звезды',
            'rating.max' => 'Оценка не может быть более 5 звезд'
        ];
    }
}
