<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemMoiSanPhamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'ma_san_pham' => 'required',
            'ten_san_pham' => 'required',
            'mo_ta' => 'nullable',
            'gia_ban' => 'required',
            'so_luong_ton_kho' => 'required',
            'don_vi_tinh' => 'required',
            'hinh_anh' => 'nullable',
            'danh_muc' => 'required',
            'loai_san_pham' => 'required',
            'nha_cung_cap' => 'required',
            'ngay_tao' => 'nullable',
            'ngay_cap_nhat' => 'nullable',
            'ngay_san_xuat' => 'nullable|before:ngay_het_han',
            'ngay_het_han' => 'nullable|after:ngay_san_xuat',
            'trang_thai' => 'required',
            'kich_hoat' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'ma_san_pham.required' => 'Mã sản phẩm không được để trống.',
            'ten_san_pham.required' => 'Tên sản phẩm không được để trống.',
            'gia_ban.required' => 'Giá bán không được để trống.',
            'so_luong_ton_kho.required' => 'Số lượng tồn kho không được để trống.',
            'don_vi_tinh.required' => 'Đơn vị tính không được để trống.',
            'danh_muc.required' => 'Danh mục không được để trống.',
            'loai_san_pham.required' => 'Loại sản phẩm không được để trống.',
            'nha_cung_cap.required' => 'Nhà cung cấp không được để trống.',
            'ngay_san_xuat.before' => 'Ngày sản xuất phải trước ngày hết hạn.',
            'ngay_het_han.after' => 'Ngày hết hạn phải sau ngày sản xuất.',
            'trang_thai.required' => 'Trạng thái không được để trống.',
            'kich_hoat.required' => 'Trạng thái kích hoạt không được để trống.',
        ];
    }
}
