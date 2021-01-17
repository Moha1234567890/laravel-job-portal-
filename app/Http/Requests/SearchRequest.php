<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
            'keyword'      => 'required|string|max:100',
            'state'        => 'required|string|max:100',
            'selectCate'   => 'required|string|max:100',



        ];

    }

    public function messages()
    {
        return [
            'required' => 'one of the fields is empty',
            'string'   => 'string only',
            'max'      => 'maxuim should be 800 charachters',


        ];
    }
}
