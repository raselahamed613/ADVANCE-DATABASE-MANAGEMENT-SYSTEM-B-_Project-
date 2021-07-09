<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLogin extends FormRequest
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
            //validation
            'register_id'=>'required',
            'register_password'=>'required|min:4'
        ];
    }
    public function message(){
       return[ 
           'register_id.required'=>'Must be fill-up your Email',
           'register_password.required'=>'Must be fill-up your Password'
    ];
    }
}
