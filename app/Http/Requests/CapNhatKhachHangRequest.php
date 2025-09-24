<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatKhachHangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // Lấy ID của khách hàng từ route hoặc request
        $id = $this->route('khach_hang') ?? $this->input('id');

        return [
            'ma_khach_hang' => 'required',
            'ho_va_ten' => 'required',
            'email' => 'required',
            'password' => 'nullable', // Mật khẩu có thể không bắt buộc khi cập nhật
            'so_dien_thoai' => 'required',
            'ngay_dang_ky' => 'required',
            'trang_thai' => 'required',
            'kich_hoat' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'ma_khach_hang.required' => 'Mã khách hàng không được để trống.',
            'ho_va_ten.required' => 'Họ và tên không được để trống.',
            'email.required' => 'Email không được để trống.',
            'so_dien_thoai.required' => 'Số điện thoại không được để trống.',
            'ngay_dang_ky.required' => 'Ngày đăng ký không được để trống.',
            'trang_thai.required' => 'Trạng thái không được để trống.',
            'kich_hoat.required' => 'Kích hoạt không được để trống.',
        ];
    }
}
