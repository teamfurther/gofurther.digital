<?php

namespace App\Http\Requests;

class ContactFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the URL to redirect to on a validation error.
     */
    protected function getRedirectUrl(): string
    {
        $url = $this->redirector->getUrlGenerator();

        return $url->previous() . '#contact-form';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string>
     */
    public function rules(): array
    {
        return [
            'contact_name' => 'required',
            'contact_email' => 'required|email',
            'contact_message' => 'required',
            'honeypotname' => 'honeypot',
            'honeypottime' => 'required|honeytime:3',
        ];
    }
}
