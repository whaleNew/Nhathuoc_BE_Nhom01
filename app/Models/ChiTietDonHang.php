<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    protected $table = 'chi_tiet_don_hangs';
    protected $fillable = [
        'ma_don_hang',
        'ma_hoa_don',
        'ten_nguoi_nhan',
        'so_dien_thoai',
        'dia_chi_nhan_hang',
        'thoi_gian',
        'ma_san_pham',
        'so_luong',
        'don_gia',
        'phi_van_chuyen',
        'tong_tien',
        'phuong_thuc_thanh_toan',
        'ghi_chu_don_hang',
        'trang_thai',
        'kich_hoat',
    ];
}
