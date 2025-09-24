<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemMoiHoaDonRequest extends FormRequest
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
        return [
            'ma_hoa_don' => 'required',
            'ma_khach_hang' => 'required',
            'ten_nguoi_nhan' => 'required',
            'so_dien_thoai' => 'required',
            'dia_chi_nhan_hang' => 'required',
            'tong_tien' => 'required',
            'phi_van_chuyen' => 'required',
            'thoi_gian_dat_hang' => 'required',
            'ghi_chu_don_hang' => 'required',
            'kich_hoat' => 'required',
            'trang_thai' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'ma_hoa_don.required' => 'Mã hóa đơn không được để trống',
            'ma_khach_hang.required' => 'Mã khách hàng không được để trống',
            'ten_nguoi_nhan.required' => 'Tên người nhận không được để trống',
            'so_dien_thoai.required' => 'Số điện thoại không được để trống',
            'dia_chi_nhan_hang.required' => 'Địa chỉ nhận hàng không được để trống',
            'tong_tien.required' => 'Tổng tiền không được để trống',
            'phi_van_chuyen.required' => 'Phí vận chuyển không được để trống',
            'thoi_gian_dat_hang.required' => 'Thời gian đặt hàng không được để trống',
            'ghi_chu_don_hang.required' => 'Ghi chú đơn hàng không được để trống',
            'kich_hoat.required' => 'Trạng thái kích hoạt không được để trống',
            'trang_thai.required' => 'Trạng thái không được để trống',
        ];
    }
}
