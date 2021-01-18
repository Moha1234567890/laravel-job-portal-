<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        //
        return [
            'msg'      => 'required|string|max:200',
            'email'        => 'required|string|max:100',
            'subject'   => 'required|string|max:100',
            'name'   => 'required|string|max:100',



        ];

    }

    public function messages()
    {
        return [
            'required' => 'field is empty',
            'string'   => 'text only',
            'max'      => 'maxuim should be 800 charachters',


        ];
    }
}
