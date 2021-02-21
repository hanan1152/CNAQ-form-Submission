<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'id' => 'min:8',
            'subject' => 'required',
            'feedback' => 'required',

        ];
    }
    // public function message(){
    //     return [
    //         "name.required" => "Please enter your name",
    //         "email.required" => "Your email is important to us",
    //         "email.email" => "Remeber to add @ symbol",
    //     ]
    // }
}
