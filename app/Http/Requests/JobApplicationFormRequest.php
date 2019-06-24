<?php

namespace App\Http\Requests;

class JobApplicationFormRequest extends Request
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
            'name' => 'required',
            'email' => 'required|email',
            'git' => 'required|url',
            'cv' => 'required|url',
            'message' => 'required',
            'potname' => 'honeypot',
            'pottime' => 'required|honeytime:3',
        ];
    }
}
