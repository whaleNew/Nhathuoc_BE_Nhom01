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
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_khach_hang');
            $table->string('ho_va_ten');         // Tên họ và tên, kiểu chuỗi
            $table->string('email')->unique();
            $table->string('password');
            $table->string('so_dien_thoai')->unique(); // Số điện thoại, kiểu chuỗi, duy nhất
            $table->date('ngay_dang_ky')->nullable();
            $table->string('trang_thai'); // Trạng thái (ví dụ: "còn hàng", "hết hàng")
            $table->boolean('kich_hoat')->default(false); // Kích hoạt, kiểu boolean, mặc định false

            // Thêm timestamps (created_at và updated_at)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khach_hangs');
    }
};
