<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'type_id' => 'required',
            'title' => 'required',
            'preview' => 'required',
            'content' => 'required',
            'picture' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'type_id.required' => 'Trường loại tin là bắt buộc!',
            'title.required'  => 'Trường tiêu đề là bắt buộc!',
            'preview.required'  => 'Trường sơ lược là bắt buộc!',
            'content.required'  => 'Trường nội dung là bắt buộc!',
            'picture.required'  => 'Trường hình ảnh là bắt buộc!',
        ];
    }
}
