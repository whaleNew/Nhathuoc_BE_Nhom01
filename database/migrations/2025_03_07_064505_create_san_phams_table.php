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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id(); // Khóa chính mặc định
            $table->string('ma_san_pham')->unique(); // Mã sản phẩm, duy nhất
            $table->string('ten_san_pham'); // Tên sản phẩm
            $table->text('mo_ta')->nullable(); // Mô tả, có thể null
            $table->decimal('gia_ban', 10, 2); // Giá bán, kiểu decimal với 10 chữ số, 2 chữ số thập phân
            $table->integer('so_luong_ton_kho'); // Số lượng tồn kho, kiểu số nguyên
            $table->string('don_vi_tinh'); // Đơn vị tính (ví dụ: cái, hộp, lọ)
            $table->string('hinh_anh')->nullable(); // Hình ảnh, đường dẫn file, có thể null
            $table->string('danh_muc'); // Danh mục
            $table->string('loai_san_pham'); // Loại sản phẩm
            $table->string('nha_cung_cap'); // Nhà cung cấp
            $table->date('ngay_tao'); // Ngày tạo
            $table->date('ngay_cap_nhat'); // Ngày tạo
            $table->date('ngay_san_xuat'); // Ngày sản xuất
            $table->date('ngay_het_han'); // Ngày hết hạn
            $table->string('trang_thai'); // Trạng thái (ví dụ: "còn hàng", "hết hàng")
            $table->boolean('kich_hoat')->default(true); // Kích hoạt, mặc định là true
            $table->timestamps(); // Tự động tạo cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
