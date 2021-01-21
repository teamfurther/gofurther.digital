<?php

namespace App\Http\Requests;

class PrivateContentFormRequest extends Request
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
            'code' => ['required', 'regex:/^' . config('private-content.access_key') . '$/i'],
        ];
    }
}
