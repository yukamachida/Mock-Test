<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FirstLoginRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'postal_code' => 'required|string|size:7', // 郵便番号は7桁
            'address' => 'required|string|max:255',
            'building' => 'nullable|string|max:255',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'ユーザー名を入力してください。',
            'postal_code.required' => '郵便番号を入力してください。',
            'postal_code.size' => '郵便番号は7桁で入力してください。',
            'address.required' => '住所を入力してください。',
        ];
    }
}
