<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required',
            'password' => 'required|min:7',
            'confirm-password' => 'required|same:password',
        ];
    }

    public function messages(){
        return [
            'name.required' => '名前は必ず入力して下さい。',
            'email.required' => 'メールアドレスは必ず入力して下さい。',
            'password.required' => 'パスワードは必ず入力して下さい。',
            'password.min' => 'パスワードは7文字以上で入力して下さい。',
            'confirm-password.required' => '確認用パスワードは必ず入力して下さい。',
            'confirm-password.same' => 'パスワードと確認用パスワードが一致しません',
        ];
    }
}
