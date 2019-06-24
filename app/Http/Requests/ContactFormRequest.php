<?php

namespace App\Http\Requests;

class ContactFormRequest extends Request
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
            'contact_name' => 'required',
            'contact_email' => 'required|email',
            'contact_message' => 'required',
            'honeypotname' => 'honeypot',
            'honeypottime' => 'required|honeytime:3',
        ];
    }

    /**
     * Get the URL to redirect to on a validation error.
     *
     * @return string
     */
    protected function getRedirectUrl()
    {
        $url = $this->redirector->getUrlGenerator();

        return $url->previous() . '#contact-form';
    }
}
