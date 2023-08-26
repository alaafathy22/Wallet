<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class request_inputs_con extends FormRequest
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
            'input_number' => 'required|max:10',
            'message' => 'required|max:100',
        ];
    }
    public function messages()
    {
        return [
            'input_number.required' => 'عدم ترك القيمة فارغه',
            'input_number.max' => 'اقصى طول للقيمة هوا 10 ارقام',
            'message.required' =>  'عدم ترك تفاصيل الصرف فارغه',
            'message.max' => 'اقصى طول لتفاصيل الصرف هوا 100 حرف', 
           
        ];
    }
}
