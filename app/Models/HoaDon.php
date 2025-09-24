<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = 'hoa_dons';
    protected $fillable = [
        'ma_hoa_don',
        'ma_khach_hang',
        'ten_nguoi_nhan',
        'so_dien_thoai',
        'dia_chi_nhan_hang',
        'tong_tien',
        'phi_van_chuyen',
        'thoi_gian_dat_hang',
        'ghi_chu_don_hang',
        'kich_hoat',
        'trang_thai',
    ];
}
