<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
           
            'user_name'=>'required',
            'user_address'=>'required|min:8',
            'user_dob'=>'required',
            'user_mob'=>'required',
            'user_email'=>'required',
            'user_password'=>'required|min:4|max:8'
        ];
    }
    public function messages()
    {
        return [
            //user message...
            'user_name.required' => 'Must be fill-up name',
            'user_address.required'=>'Must be fill-up your address',
            'user_address.min'=>'The user address must be at least 8 characters',
            'user_dob.required'=>'Must be fill-up Dath of Birth',
            'user_mob.required'=>'Must be fill-up your Mobile Number',
            'user_email.required'=>'Must be fill-up your Email',
            'user_password.required'=>'Must be fill-up your password',
            'user_password.min'=>'mobile number must be 8 to 11 charecter',
            'user_password.max'=>'mobile number must be 8 to 11 charecter'
            


        ];
    }
}
