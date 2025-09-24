<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietDonHangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('chi_tiet_don_hangs')->insert([
            [
                'ma_don_hang' => 'DH001',
                'ma_hoa_don' => 'HD001',
                'ten_nguoi_nhan' => 'Nguyễn Văn A',
                'so_dien_thoai' => '0905123456',
                'dia_chi_nhan_hang' => '123 Đường ABC, Quận 1, TP.HCM',
                'thoi_gian' => '2025-02-10',
                'ma_san_pham' => 'SP001',
                'so_luong' => 2,
                'don_gia' => 250000.00,
                'phi_van_chuyen' => 30000.00,
                'tong_tien' => 530000.00,
                'phuong_thuc_thanh_toan' => 'Tiền mặt',
                'ghi_chu_don_hang' => 'Giao hàng trước 18h',
                'trang_thai' => 'Chờ xử lý',
                'kich_hoat' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_don_hang' => 'DH002',
                'ma_hoa_don' => 'HD002',
                'ten_nguoi_nhan' => 'Trần Thị B',
                'so_dien_thoai' => '0918765432',
                'dia_chi_nhan_hang' => '456 Đường XYZ, Quận 3, TP.HCM',
                'thoi_gian' => '2025-09-02',
                'ma_san_pham' => 'SP002',
                'so_luong' => 1,
                'don_gia' => 1500000.00,
                'phi_van_chuyen' => 40000.00,
                'tong_tien' => 1540000.00,
                'phuong_thuc_thanh_toan' => 'Chuyển khoản',
                'ghi_chu_don_hang' => 'Gọi trước khi giao',
                'trang_thai' => 'Đang giao',
                'kich_hoat' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_don_hang' => 'DH003',
                'ma_hoa_don' => 'HD003',
                'ten_nguoi_nhan' => 'Lê Văn C',
                'so_dien_thoai' => '0933123456',
                'dia_chi_nhan_hang' => '789 Đường DEF, Quận 7, TP.HCM',
                'thoi_gian' => now()->subDays(5),
                'ma_san_pham' => 'SP003',
                'so_luong' => 3,
                'don_gia' => 100000.00,
                'phi_van_chuyen' => 25000.00,
                'tong_tien' => 325000.00,
                'phuong_thuc_thanh_toan' => 'Thẻ tín dụng',
                'ghi_chu_don_hang' => 'Giao sớm',
                'trang_thai' => 'Hoàn thành',
                'kich_hoat' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
