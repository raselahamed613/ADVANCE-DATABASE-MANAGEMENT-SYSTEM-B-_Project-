<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'customer_name'=>'required',
            'product_id' => 'required',
            'product_catagory' => 'required',
            'product_review' => 'required'
        ];
    }
    public function messages()
    {
        //user message..
        return[
            'customer_name.required'=>'Must be fill-up your Name',
            'product_id.required'=>'Must be fill-up your Product Id',
            'product_catagory'=>'Must be fill-up product catagory',         
            'product_review'=>'Must be fill-up your Review message'
        ];
    }
}
