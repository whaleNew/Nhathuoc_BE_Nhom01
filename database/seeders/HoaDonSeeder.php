<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hoa_dons')->insert([
            [
                'ma_hoa_don' => 'HD001',
                'ma_khach_hang' => 'KH001',
                'ten_nguoi_nhan' => 'Nguyễn Văn A',
                'so_dien_thoai' => '0905123456',
                'dia_chi_nhan_hang' => '123 Đường ABC, Quận 1, TP.HCM',
                'tong_tien' => 500000.00,
                'phi_van_chuyen' => 30000.00,
                'thoi_gian_dat_hang' => now(),
                'ghi_chu_don_hang' => 'Giao hàng trước 18h',
                'kich_hoat' => true,
                'trang_thai' => 'dang_xu_ly',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_hoa_don' => 'HD002',
                'ma_khach_hang' => 'KH002',
                'ten_nguoi_nhan' => 'Trần Thị B',
                'so_dien_thoai' => '0916234567',
                'dia_chi_nhan_hang' => '456 Đường XYZ, Quận 3, TP.HCM',
                'tong_tien' => 750000.00,
                'phi_van_chuyen' => 40000.00,
                'thoi_gian_dat_hang' => now(),
                'ghi_chu_don_hang' => 'Giao sáng sớm',
                'kich_hoat' => true,
                'trang_thai' => 'da_giao',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_hoa_don' => 'HD003',
                'ma_khach_hang' => 'KH003',
                'ten_nguoi_nhan' => 'Lê Văn C',
                'so_dien_thoai' => '0987345678',
                'dia_chi_nhan_hang' => '789 Đường DEF, Quận 5, TP.HCM',
                'tong_tien' => 300000.00,
                'phi_van_chuyen' => 25000.00,
                'thoi_gian_dat_hang' => now(),
                'ghi_chu_don_hang' => 'Giao gấp trong ngày',
                'kich_hoat' => false,
                'trang_thai' => 'da_huy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
