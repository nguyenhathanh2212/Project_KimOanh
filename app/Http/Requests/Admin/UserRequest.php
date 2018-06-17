<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'email|required|unique:users',
            'password' => 'required',
            'repassword' => 'required|same:password',
            'fullname' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Trường email là bắt buộc!',
            'email.email' => 'Nhập sai định dạng email!',
            'email.unique'  => 'Email đã được sử dụng!',
            'password.required'  => 'Trường mật khẩu là bắt buộc!',
            'repassword.required'  => 'Trường nhập lại mật khẩu là bắt buộc!',
            'repassword.same'  => 'Mật khẩu xác nhận không đúng!',
            'fullname.required'  => 'Trường fullname là bắt buộc!',
        ];
    }
}
