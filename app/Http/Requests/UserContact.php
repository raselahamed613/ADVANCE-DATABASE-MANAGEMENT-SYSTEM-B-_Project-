<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserContact extends FormRequest
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
            //
            'c_name'=>'required',
            'c_email'=>'required',
            'c_phone'=>'required|min:8|max:11',
            'c_subject'=>'required',
            'c_message'=>'required'
        ];
    }
    public function messages()
{
    return [
        //user message...
        'c_name.required' => 'Must be fill-up your name',
        'c_email.required'=>'Must be fill-up your email address',
        'c_phone.required'=> 'Must be fill-up your mobile number',
        'c_phone.min'=>' phone number at least 8 characters',
        'c_phone.max'=>'phone number submit maximum 11 characters',
        'c_subject.required'=>'Must be fill-up subject',
        'c_message.required'=>'Must be fill-up your complain'
        


    ];
}


}