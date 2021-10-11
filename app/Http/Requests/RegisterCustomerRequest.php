<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Customer;

class RegisterCustomerRequest extends FormRequest
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
           'name' => 'required|min:2|max:20',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|min:6|max:32|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được để trống!',
            'name.min' => 'Tên phải có ít nhất 2 ký tự!',
            'name.max' => 'Tên không được quá 20 ký tự',
            'email.required' => 'Không được để trống!',
            'email.email' => 'Email không hợp lệ!',
            'email.unique' => 'Email đã tồn tại!',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'password.confirmed' => 'Mật khẩu nhập lại không khớp!'
        ];
    }
}
