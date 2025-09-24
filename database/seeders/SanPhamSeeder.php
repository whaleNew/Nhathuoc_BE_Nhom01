<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('san_phams')->delete();
        DB::table('san_phams')->insert([
            [
                'ma_san_pham' => 'SP001',
                'ten_san_pham' => 'Thuốc Paracetamol 500mg',
                'mo_ta' => 'Thuốc giảm đau, hạ sốt hiệu quả',
                'gia_ban' => 5000.00,
                'so_luong_ton_kho' => 100,
                'don_vi_tinh' => 'viên',
                'hinh_anh' => 'https://www.mediplantex.com/upload/product/thumbs/8594648bd43d66f8f602e77c7cccf242.jpg',
                'danh_muc' => 'Thuốc cảm',
                'loai_san_pham' => 'Thuốc không kê đơn',
                'nha_cung_cap' => 'Công ty Dược phẩm ABC',
                'ngay_tao' => '2024-01-15',
                'ngay_cap_nhat' => '2024-02-15',
                'ngay_san_xuat' => '2024-01-10',
                'ngay_het_han' => '2025-01-09',
                'trang_thai' => 'còn hàng',
                'kich_hoat' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_san_pham' => 'SP002',
                'ten_san_pham' => 'Vitamin C 1000mg',
                'mo_ta' => 'Bổ sung vitamin C, tăng cường miễn dịch',
                'gia_ban' => 8000.00,
                'so_luong_ton_kho' => 50,
                'don_vi_tinh' => 'hộp',
                'hinh_anh' => 'vitamin_c.jpg',
                'danh_muc' => 'Vitamin',
                'loai_san_pham' => 'Thực phẩm chức năng',
                'nha_cung_cap' => 'Công ty Dược phẩm XYZ',
                'ngay_cap_nhat' => '2024-02-15',
                'ngay_tao' => '2024-02-10',
                'ngay_san_xuat' => '2024-02-05',
                'ngay_het_han' => '2025-02-04',
                'trang_thai' => 'còn hàng',
                'kich_hoat' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_san_pham' => 'SP003',
                'ten_san_pham' => 'Thuốc kháng sinh Amoxicillin',
                'mo_ta' => 'Thuốc điều trị nhiễm khuẩn',
                'gia_ban' => 15000.00,
                'so_luong_ton_kho' => 0,
                'don_vi_tinh' => 'lọ',
                'hinh_anh' => 'amoxicillin.jpg',
                'danh_muc' => 'Thuốc kháng sinh',
                'loai_san_pham' => 'Thuốc kê đơn',
                'nha_cung_cap' => 'Công ty Dược phẩm DEF',
                'ngay_tao' => '2023-12-20',
                'ngay_cap_nhat' => '2024-02-15',
                'ngay_san_xuat' => '2023-12-15',
                'ngay_het_han' => '2024-12-14',
                'trang_thai' => 'hết hàng',
                'kich_hoat' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
