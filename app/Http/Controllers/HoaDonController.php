<?php

namespace App\Http\Controllers;

use App\Http\Requests\CapNhatHoaDonRequest;
use App\Http\Requests\ThemMoiHoaDonRequest;
use App\Models\HoaDon;
use App\Models\KhachHang;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    public function danhSachHoaDon()
    {
        $data = HoaDon::all();
        return response()->json([
            'data' => $data,
        ]);
    }
    public function themMoiHoaDon(ThemMoiHoaDonRequest $request)
    {
        HoaDon::create([
            'ma_hoa_don' => $request->ma_hoa_don,
            'ma_khach_hang' => $request->ma_khach_hang,
            'ten_nguoi_nhan' => $request->ten_nguoi_nhan,
            'so_dien_thoai' => $request->so_dien_thoai,
            'dia_chi_nhan_hang' => $request->dia_chi_nhan_hang,
            'tong_tien' => $request->tong_tien,
            'phi_van_chuyen' => $request->phi_van_chuyen,
            'thoi_gian_dat_hang' => $request->thoi_gian_dat_hang,
            'ghi_chu_don_hang' => $request->ghi_chu_don_hang,
            'kich_hoat' => $request->kich_hoat,
            'trang_thai' => $request->trang_thai,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Thêm Mới Thành Công!"
        ]);
    }
   public function capNhatHoaDon(CapNhatHoaDonRequest $request)
    {
        HoaDon::where('id', $request->id)->update([
            'ma_hoa_don' => $request->ma_hoa_don,
            'ma_khach_hang' => $request->ma_khach_hang,
            'ten_nguoi_nhan' => $request->ten_nguoi_nhan,
            'so_dien_thoai' => $request->so_dien_thoai,
            'dia_chi_nhan_hang' => $request->dia_chi_nhan_hang,
            'tong_tien' => $request->tong_tien,
             'phi_van_chuyen' => $request->phi_van_chuyen,
            'thoi_gian_dat_hang' => $request->thoi_gian_dat_hang,
            'ghi_chu_don_hang' => $request->ghi_chu_don_hang,
            'kich_hoat' => $request->kich_hoat,
            'trang_thai' => $request->trang_thai,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Cập Nhật Thành Công!"
        ]);
    }
    public function xoaHoaDon(Request $request)
    {
        HoaDon::where('id', $request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Xoá Thành Công!"
        ]);
    }
}
