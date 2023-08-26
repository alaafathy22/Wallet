<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_your_value extends FormRequest
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
            'input_value_you_Have' => 'required|max:10'
        ];
    }
    public function messages()
    {
        return [

            'input_value_you_Have.required' => __('masseges.input_value_you_Have_required') ,
            'input_value_you_Have.max' =>__('masseges.input_value_you_Have_max') 
        ];
    }
}
