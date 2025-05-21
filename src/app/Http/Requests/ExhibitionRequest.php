<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitionRequest extends FormRequest
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
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
            'condition_id' => 'required|exists:conditions,id',
            'name' => 'required|string',
            'brand' => 'nullable|string',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',

            'images' => 'nullable|image|mimes:jpeg,png'

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => '入力必須',
            'description.required' => '入力必須',
            'description.max' => '255字以内で入力してください',
            //'images.required' => 'アップロード必須',
            'images.mimes' => '拡張子はjpegもしくはpng形式でアップロードしてください',
            'categories.required' => '選択必須',
            'condition_id.required' => '選択必須',
            'price.required' => '入力必須',
            'price,numeric' => '価格は数字で入力してください',
            'price,min' => '価格は0円以上に設定してください',
        ];
    }
}
