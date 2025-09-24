<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khach_hangs')->delete();
        DB::table('khach_hangs')->insert([
            [
                'ma_khach_hang' => 'KH01',
                'ho_va_ten' => 'Nguyễn Văn An',
                'email' => 'nguyenvanan@example.com',
                'password' => '123456',
                'so_dien_thoai' => '0905123456',
                'ngay_dang_ky' => '2025-01-01',
                'trang_thai' => 'hoat-dong',
                'kich_hoat' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_khach_hang' => 'KH02',
                'ho_va_ten' => 'Trần Thị Bình',
                'email' => 'tranbinh@example.com',
                'password' => '123456',
                'so_dien_thoai' => '0916234567',
                'ngay_dang_ky' => '2024-02-03',
                'trang_thai' => 'tam-tat',
                'kich_hoat' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_khach_hang' => 'KH03',
                'ho_va_ten' => 'Lê Minh Châu',
                'email' => 'leminhchau@example.com',
                'password' => '123456',
                'so_dien_thoai' => '0937345678',
                'ngay_dang_ky' => '2024-02-02',
                'trang_thai' => 'hoat-dong',
                'kich_hoat' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_khach_hang' => 'KH04',
                'ho_va_ten' => 'Phạm Quốc Dũng',
                'email' => 'phamquocdung@example.com',
                'password' => '123456',
                'so_dien_thoai' => '0948456789',
                'ngay_dang_ky' => '2024-04-05',
                'trang_thai' => 'hoat_dong',
                'kich_hoat' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_khach_hang' => 'KH05',
                'ho_va_ten' => 'Hoàng Thị Ngọc',
                'email' => 'hoangngoc@example.com',
                'password' => '123456',
                'so_dien_thoai' => '0979567890',
                'ngay_dang_ky' => '2024-06-12',
                'trang_thai' => 'tam-tat',
                'kich_hoat' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
