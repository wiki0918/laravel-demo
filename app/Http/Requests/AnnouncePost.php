<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncePost extends FormRequest
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
            'name' => 'required',
            'picture' => 'required',
            'description' => 'required',
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
            'name.required' => '請填寫 車廠與車款',
            'picture.required'  => '請填寫 圖片',
            'description.required' => '請填寫 說明',
        ];
    }
}
