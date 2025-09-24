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
        Schema::create('chi_tiet_don_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_don_hang');                  // Mã đơn hàng
            $table->string('ma_hoa_don');                   // Mã hóa đơn
            $table->string('ten_nguoi_nhan');              // Tên người nhận
            $table->string('so_dien_thoai');               // Số điện thoại
            $table->string('dia_chi_nhan_hang');           // Địa chỉ nhận hàng
            $table->dateTime('thoi_gian');                 // Thời gian
            $table->string('ma_san_pham');                 // Mã sản phẩm
            $table->integer('so_luong');                   // Số lượng
            $table->decimal('don_gia', 15, 2);            // Đơn giá (số tiền, 15 chữ số, 2 số thập phân)
            $table->decimal('phi_van_chuyen', 15, 2);     // Phí vận chuyển
            $table->decimal('tong_tien', 15, 2);          // Tổng tiền
            $table->string('phuong_thuc_thanh_toan');      // Phương thức thanh toán
            $table->text('ghi_chu_don_hang')->nullable();  // Ghi chú đơn hàng (có thể null)
            $table->string('trang_thai');                  // Trạng thái
            $table->boolean('kich_hoat')->default(true);   // Kích hoạt (true/false)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_don_hangs');
    }
};
