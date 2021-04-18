<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class trySendMessageRequest extends FormRequest
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
            'email' => 'sometimes|required|email',
            'phone_number' => 'sometimes|required|bail|regex:/(09)[0-9]{9}/|digits:11',
            'verification_code' => 'sometimes|required|bail|integer|digits:6',

        ];
    }
}
