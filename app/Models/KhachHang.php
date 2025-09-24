<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'khach_hangs';
    protected $fillable = [
        'ma_khach_hang',
        'ho_va_ten',
        'email',
        'password',
        'so_dien_thoai',
        'ngay_dang_ky',
        'trang_thai',
        'kich_hoat',
    ];
}
