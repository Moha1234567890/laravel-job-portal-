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
            'email' => 'required|string|max:100',
            'jobtitle' => 'required|string|max:100',
            'location' => 'required|string|max:100',
            'region' => 'required|string|max:100',
            'jobtype' => 'required',
            'jobcategory' => 'required',
            'jobdesc' => 'required|string|max:200|min:100',
            'companyname' => 'required|string|max:100',
            'website' => 'required|string|max:400',
            'linkedin' => 'required|string|max:400',


        ];
    }

    public function messages()
    {
        return [
            'required' => 'this field is required',
            'string' => 'string only',
            'max' => 'maxuim should be 400 charachters',
            'min' => 'minuim should be 100 charachters'


        ];
    }
}
