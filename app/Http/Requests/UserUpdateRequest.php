<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'image' => 'max:5048|mimes:jpg,jpeg,png',
            'name'  => 'sometimes|required',
            'gender' => 'sometimes|required|boolean',
            'address' => 'max:250',
            'year' => 'max:3',
            'password' => 'sometimes|required|bail|min:8|confirmed',
            'email' =>'sometimes|required|email',
        ];
    }
}
