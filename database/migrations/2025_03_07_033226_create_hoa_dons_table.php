<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->string('ma_hoa_don')->unique(); // Mã hóa đơn, duy nhất
            $table->string('ma_khach_hang'); // Mã khách hàng
            $table->string('ten_nguoi_nhan'); // Tên người nhận
            $table->string('so_dien_thoai'); // Số điện thoại người nhận
            $table->text('dia_chi_nhan_hang'); // Địa chỉ nhận hàng
            $table->decimal('tong_tien', 10, 2); // Tổng tiền, kiểu decimal với 10 chữ số, 2 chữ số thập phân
            $table->decimal('phi_van_chuyen', 10, 2); // Phí vận chuyển, kiểu decimal
            $table->timestamp('thoi_gian_dat_hang'); // Thời gian đặt hàng
            $table->text('ghi_chu_don_hang')->nullable(); // Ghi chú đơn hàng, có thể null
            $table->boolean('kich_hoat')->default(true); // Kích hoạt, mặc định là true
            $table->string('trang_thai'); // Trạng thái (Đang xử lý, Đã giao, Đã hủy)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoa_dons');
    }
};
