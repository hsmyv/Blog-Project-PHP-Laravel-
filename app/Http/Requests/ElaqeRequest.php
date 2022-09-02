<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElaqeRequest extends FormRequest
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
            'ad' => 'required | min:3 | max:10',
            'soyad' => 'required | min:3 | max:10',
            'email' => 'required | email',
            ];

     
    }

    public function messages(){
        return[
        'email.email'=> 'duzgun email daxil edin',
        'email.required' => 'Email yeri bosdur',
        'soyad.required' => 'soyad yeri bosdur',
        'ad.ad' => 'ad yeri bosdur'
        ];

    }
}
