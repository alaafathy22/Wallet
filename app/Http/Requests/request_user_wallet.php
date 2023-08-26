<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_user_wallet extends FormRequest
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
            'name_wallet' => 'required|max:20',
            'input_number_wallet' => 'required|max:10'
        ];
    }
    public function messages()
    {
        return [
            'name_wallet.required' => 'عدم ترك عنوان المحفظة فارغه',
            'name_wallet.max' => 'اقصى طول لعنوان المحفظة هوا 20 حرف',
            'input_number_wallet.required' =>'عدم ترك القيمة فارغه',
            'input_number_wallet.max' => 'اقصى طول للقيمة هوا 10 ارقام'
        ];
    }
}
