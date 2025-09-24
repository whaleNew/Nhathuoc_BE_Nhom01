<?php

namespace App\Http\Controllers;

use App\Http\Requests\CapNhatKhachHangRequest;
use App\Http\Requests\CapNhatSanPhamRequest;
use App\Http\Requests\ThemMoiKhachHangRequest;
use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function danhSachKhachHang() {
        $data = KhachHang::all();
        return response()->json([
            'data' => $data,
        ]);
    }
    public function themMoiKhachHang(ThemMoiKhachHangRequest $request)
    {
        KhachHang::create([
        'ma_khach_hang' => $request->ma_khach_hang,
        'ho_va_ten' => $request->ho_va_ten,
        'email' => $request->email,
        'password' => $request->password,
        'so_dien_thoai' => $request->so_dien_thoai,
        'ngay_dang_ky' => $request->ngay_dang_ky,
        'trang_thai' => $request->trang_thai,
        'kich_hoat' => $request->kich_hoat
        ]);
        return response()->json([
            'status' => true,
            'message' => "Thêm Mới Thành Công!"
        ]);
    }
    public function capNhatKhachHang(CapNhatKhachHangRequest $request)
    {
        KhachHang::where('id', $request->id)->update([
        'ma_khach_hang' => $request->ma_khach_hang,
        'ho_va_ten' => $request->ho_va_ten,
        'email' => $request->email,
        'password' => $request->password,
        'so_dien_thoai' => $request->so_dien_thoai,
        'ngay_dang_ky' => $request->ngay_dang_ky,
        'trang_thai' => $request->trang_thai,
        'kich_hoat' => $request->kich_hoat
        ]);
        return response()->json([
            'status' => true,
            'message' => "Cập Nhật Thành Công!"
        ]);
    }
    public function xoaKhachHang(Request $request)
    {
        KhachHang::where('id', $request->id)->delete();

        return response()->json([
            'status' => true,
            'message' => "Xoá Thành Công!"
        ]);
    }
}
