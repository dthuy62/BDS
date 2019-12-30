<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBuyRequest extends FormRequest
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
            'title' => 'required|min:2|max:255|unique:buys,title,'.($this->id ?? ''),
            'desc' => 'required|min:2',
            'price' =>'required|numeric',
            'dt' => 'required|numeric',
            'address' => 'required|',
            'image' => ($this->id ? 'nullable' : 'required').'|image'

        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được bỏ trống',
            'min' => ':attribute tối thiểu có 2 ký tự',
            'max' => ':attribute tối đa có 255 ký tự',
            'numeric' => ':attribute phải là một số ',
            'image' => ':attribute không là hình ảnh',
            'unique' => ':attribute đã tồn tại trong hệ thống'
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'Tiêu đề bất động sản',
            'desc' => 'Mô tả',
            'price' => 'Giá bất động sản',
            'dt' => 'Diện tích bất động sản',
            'address' => 'Địa chỉ bất động sản',
            'image' => 'Ảnh bất động sản'
        ];
    }
}
