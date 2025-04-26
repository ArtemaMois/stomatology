<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecordRequest extends FormRequest
{


    public function rules(): array
    {
        return [
            'fullname' => ['required', 'min:1', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'regex:/^\+7-\d{3}-\d{3}-\d{2}-\d{2}$/i'],
            'date' => ['required', 'regex:/^\S{2}.\S{2}.\S{4} \S{2}:\S{2}$/i']
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Требуется ввести имя',
            'fullname.min' => 'Имя не может быть короче 1 символа',
            'fullname.string' => 'Имя должно быть строкой',
            'email.required' => 'Требуется ввести E-mail',
            'email.email' => 'E-mail должен быть строкой',
            'phone.required' => 'Требуется ввести номер телефона',
            'phone.regex' => 'Номер телефона должен соответствовать формату: +7-###-###-##-##',
            'date.required' => 'Требуется ввести дату приема',
            'date.regex' => 'Дата приема должна соответствовать формату: 0000.00.00 00:00',
        ];
    }
}
