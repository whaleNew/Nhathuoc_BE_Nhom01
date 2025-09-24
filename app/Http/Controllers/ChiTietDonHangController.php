<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDonHang;
use App\Models\HoaDon;
use Illuminate\Http\Request;

class ChiTietDonHangController extends Controller
{
    public function danhSachDonHang()
    {
        $data = ChiTietDonHang::all();
        return response()->json([
            'data' => $data
        ]);
    }
    public function themMoiDonHang(Request $request)
    {
        ChiTietDonHang::create([
            'ma_don_hang' => $request->ma_don_hang,
            'ma_hoa_don' => $request->ma_hoa_don,
            'ten_nguoi_nhan' => $request->ten_nguoi_nhan,
            'so_dien_thoai' => $request->so_dien_thoai,
            'dia_chi_nhan_hang' => $request->dia_chi_nhan_hang,
            'thoi_gian' => $request->thoi_gian,
            'ma_san_pham' => $request->ma_san_pham,
            'so_luong' => $request->so_luong,
            'don_gia' => $request->don_gia,
            'phi_van_chuyen' => $request->phi_van_chuyen,
            'tong_tien' => $request->tong_tien,
            'phuong_thuc_thanh_toan' => $request->phuong_thuc_thanh_toan,
            'ghi_chu_don_hang' => $request->ghi_chu_don_hang,
            'trang_thai' => $request->trang_thai,
            'kich_hoat' => $request->kich_hoat,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Thêm Mới Thành Công!"
        ]);
    }
    public function capNhatDonHang(Request $request)
    {
        ChiTietDonHang::where('id', $request->id)->update([
            'ma_don_hang' => $request->ma_don_hang,
            'ma_hoa_don' => $request->ma_hoa_don,
            'ten_nguoi_nhan' => $request->ten_nguoi_nhan,
            'so_dien_thoai' => $request->so_dien_thoai,
            'dia_chi_nhan_hang' => $request->dia_chi_nhan_hang,
            'thoi_gian' => $request->thoi_gian,
            'ma_san_pham' => $request->ma_san_pham,
            'so_luong' => $request->so_luong,
            'don_gia' => $request->don_gia,
            'phi_van_chuyen' => $request->phi_van_chuyen,
            'tong_tien' => $request->tong_tien,
            'phuong_thuc_thanh_toan' => $request->phuong_thuc_thanh_toan,
            'ghi_chu_don_hang' => $request->ghi_chu_don_hang,
            'trang_thai' => $request->trang_thai,
            'kich_hoat' => $request->kich_hoat,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Cập Nhật Thành Công!"
        ]);
    }
    public function xoaDonHang(Request $request)
    {
        ChiTietDonHang::where('id', $request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Xoá Thành Công!"
        ]);
    }
}
