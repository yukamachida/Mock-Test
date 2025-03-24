<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class LoginRequest extends FormRequest
{
    /**
     *  ユーザーがこのリクエストを許可されているかを決定
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     *バリデーションルールの定義
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:8',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'メールアドレスを入力してください',
            'password.required' => 'パスワードを入力してください',
            'email.exists' => 'ログイン情報が登録されていません。',
        ];
    }
}
