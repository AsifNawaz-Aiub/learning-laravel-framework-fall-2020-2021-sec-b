<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            'username' => 'required|min:3',
            'password' => 'required',
            'email' => 'required',
            'type' => 'required',
            'name' => 'required',
            'cname' => 'required',
            'cno' => 'required'
        ];
    }

    public function messages(){
        return [
            'email.required'=> "can't left empty...."
        ];
    }
}
