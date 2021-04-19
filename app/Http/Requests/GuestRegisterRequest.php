<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestRegisterRequest extends FormRequest
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
            'phone_number' => 'required|bail|regex:/(09)[0-9]{9}/|digits:11',
            'verification_code' => 'required|bail|integer|digits:6',
            'name' => "required|max:40",
            'gender' => "required|boolean",
            'email' => "nullable|email|max:50",
        

        ];
    }
}
