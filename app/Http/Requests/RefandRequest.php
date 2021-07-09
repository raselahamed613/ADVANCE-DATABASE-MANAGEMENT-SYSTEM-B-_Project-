<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RefandRequest extends FormRequest
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
            'invoice'=>'required',
            'payment_method' => 'required',
            'phone' => 'required|min:11|max:11',
            'message' => 'required'
        ];
    }
    public function messages()
    {
        //user message..
        return[
            'invoice.required'=>'Must be fill-up your Invoice',
        'payment_method.required'=>'Must be fill-up your payment method',
        'phone.min'=>'phone number must be required 11 charecters',
        'phone.max'=>'phone number must be required 11 charecters',
        'phone.required'=>'must be fill-up your mobile number',
        'message.required'=>'Must be fill-up your Message'
        ];
    }
}
