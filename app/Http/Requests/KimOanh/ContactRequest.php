<?php

namespace App\Http\Requests\KimOanh;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email',
            'name' => 'required',
            'phone' => 'required|numeric',
            'title' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Nhập sai định dạng email!',
            'email.required' => 'Trường email là bắt buộc!',
            'name.required'  => 'Trường họ tên là bắt buộc!',
            'title.required'  => 'Trường tiêu đề là bắt buộc!',
            'content.required'  => 'Trường nội dung là bắt buộc!',
            'phone.required'  => 'Trường số điện thoại là bắt buộc!',
            'phone.numeric'  => 'Số điện thoại phải là số!',
        ];
    }
}
