<?php

namespace App\Http\Requests;

class FreebiesGetFormRequest extends Request
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

        return $url->previous();
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
            'privacy' => 'accepted',
            'source' => 'required',
            'freebie' => 'required',
            'honeypotname' => 'honeypot',
            'honeypottime' => 'required|honeytime:3',
        ];
    }
}
