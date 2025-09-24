<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'san_phams';
    protected $fillable = [
        'ma_san_pham',
        'ten_san_pham',
        'mo_ta',
        'gia_ban',
        'so_luong_ton_kho',
        'don_vi_tinh',
        'hinh_anh',
        'danh_muc',
        'loai_san_pham',
        'nha_cung_cap',
        'ngay_tao',
        'ngay_cap_nhat',
        'ngay_san_xuat',
        'ngay_het_han',
        'trang_thai',
        'kich_hoat',
    ];
}
