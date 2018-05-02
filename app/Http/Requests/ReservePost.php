<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservePost extends FormRequest
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
            'customer' => 'required|MAX:10',
            'reserve_date' => 'required',
        ];
    }
    
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'customer.required' => '請填寫姓名',
            'reserve_date.required' => '請選擇日期',
            'customer.m_a_x' => '姓名不可超過10個字',
        ];
    }
}
