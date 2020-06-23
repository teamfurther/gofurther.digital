<?php

namespace App\Http\Requests;

class JobApplicationFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'git' => 'required|url',
            'cv' => 'required|url',
            'message' => 'required',
            'honeypotname' => 'honeypot',
            'honeypottime' => 'required|honeytime:3',
        ];
    }
}
