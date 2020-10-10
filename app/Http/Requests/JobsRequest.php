<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobsRequest extends FormRequest
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
        return [
            'email'        => 'required|string|max:100',
            'jobtitle'     => 'required|string|max:100',
            'location'     => 'required|string|max:100',
            'region'       => 'required|string|max:100',
            'jobtype'      => 'required',
            'vacancy'      => 'required',
            'ex'           => 'required',
            'sal'          => 'required',
            'jobdesc'      => 'required',
            'respon'       => 'required',
            'ben'          => 'required',
            'user_id'      => 'required',

            'edu'          => 'required',
            'jobcategory'  => 'required',
            'gender'       => 'required',
            'image'       => 'required',


            'companyname'  => 'required|string|max:100',
            'website'      => 'required|string|max:100',
            'linkedin'     => 'required|string|max:100'



        ];
    }

    public function messages()
    {
        return [
            'required' => 'this field is required',
            'string'   => 'string only',
            'max'      => 'maxuim should be 800 charachters',
            'min'      => 'minuim should be 100 charachters'


        ];
    }
}
