<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidation extends FormRequest
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
            'name'=>'required|min:4|max:20',
            'email'=>'required',
            'phone'=>'required|numeric|min:3|max:11',
            'address'=>'required|min:20|max:50',
        ];
    }

    public function message ()
    {
        $messages = [
            'name.required' => 'We need to know your full name!',
            'name.min' => 'Name size must be between 4 and 30 character!',
            'name.max' => 'Name size must be 30 character!',
            'email.required' => 'We need to know your email!',
            'phone.numeric' => 'Phone Number validation must be numeric',
            'address.required' => 'Address must be between 20 and 50 character!',
        ];
        return $messages;
    }
}
