<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_real_edit extends FormRequest
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
            'edit_name' => 'required|max:100',
            'edit_price' => 'required|max:10'
        ];
    }
    public function messages()
    {
        return [
            'edit_name.required' => 'عدم ترك تفاصيل الصرف فارغه',
            'edit_name.max' =>'اقصى طول لتفاصيل الصرف هوا 100 حرف',
            'edit_price.required' =>'عدم ترك القيمة فارغه',
            'edit_price.max' => 'اقصى طول للقيمة هوا 10 ارقام'
        ];
    }
}
