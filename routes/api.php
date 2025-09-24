<?php

use App\Http\Controllers\ChiTietDonHangController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\KhachHangController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
// san pham
Route::get('san-pham', [SanPhamController::class, 'danhSachSanPham']);
Route::post('san-pham/them-moi-san-pham', [SanPhamController::class, 'themMoiSanPham']);
Route::post('san-pham/cap-nhat-san-pham', [SanPhamController::class, 'capNhatSanPham']);
Route::post('san-pham/xoa-san-pham', [SanPhamController::class, 'xoaSanPham']);
// khach hang
Route::get('khach-hang', [KhachHangController::class, 'danhSachKhachHang']);
Route::post('khach-hang/them-moi-khach-hang', [KhachHangController::class, 'themMoiKhachHang']);
Route::post('khach-hang/cap-nhat-khach-hang', [KhachHangController::class, 'capNhatKhachHang']);
Route::post('khach-hang/xoa-khach-hang', [KhachHangController::class, 'xoaKhachHang']);
// hoa don
Route::get('hoa-don', [HoaDonController::class, 'danhSachHoaDon']);
Route::post('hoa-don/them-moi-hoa-don', [HoaDonController::class, 'themMoiHoaDon']);
Route::post('hoa-don/cap-nhat-hoa-don', [HoaDonController::class, 'capNhatHoaDon']);
Route::post('hoa-don/xoa-hoa-don', [HoaDonController::class, 'xoaHoaDon']);
// chi tiet don hang                                                                                                                                            
Route::get('chi-tiet-don-hang', [ChiTietDonHangController::class, 'danhSachDonHang']);
Route::post('chi-tiet-don-hang/them-moi-don-hang', [ChiTietDonHangController::class, 'themMoiDonHang']);
Route::post('chi-tiet-don-hang/cap-nhat-don-hang', [ChiTietDonHangController::class, 'capNhatDonHang']);
Route::post('chi-tiet-don-hang/xoa-don-hang', [ChiTietDonHangController::class, 'xoaDonHang']);








