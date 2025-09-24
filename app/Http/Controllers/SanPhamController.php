<?php
namespace App\Http\Controllers;
use App\Http\Requests\CapNhatSanPhamRequest;
use App\Http\Requests\ThemMoiSanPhamRequest;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function danhSachSanPham() {
        $data = SanPham::all();
        return response()->json([
            'data' => $data,
        ]);
    }
    public function themMoiSanPham(ThemMoiSanPhamRequest $request)
    {
        SanPham::create([
           'ma_san_pham' => $request->ma_san_pham,
            'ten_san_pham' => $request->ten_san_pham,
            'mo_ta' => $request->mo_ta,
            'gia_ban' => $request->gia_ban,
            'so_luong_ton_kho' => $request->so_luong_ton_kho,
            'don_vi_tinh' => $request->don_vi_tinh,
            'hinh_anh' => $request->hinh_anh,
            'danh_muc' => $request->danh_muc,
            'loai_san_pham' => $request->loai_san_pham,
            'nha_cung_cap' => $request->nha_cung_cap,
            'ngay_tao' => $request->ngay_tao,
            'ngay_cap_nhat' => $request->ngay_cap_nhat,
            'ngay_san_xuat' => $request->ngay_san_xuat,
            'ngay_het_han' => $request->ngay_het_han,
            'trang_thai' => $request->trang_thai,
            'kich_hoat' => $request->kich_hoat,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Thêm Mới Thành Công!"
        ]);
    }
    public function capNhatSanPham(CapNhatSanPhamRequest $request)
    {
        SanPham::where('id', $request->id)->update([
            'ma_san_pham' => $request->ma_san_pham,
            'ten_san_pham' => $request->ten_san_pham,
            'mo_ta' => $request->mo_ta,
            'gia_ban' => $request->gia_ban,
            'so_luong_ton_kho' => $request->so_luong_ton_kho,
            'don_vi_tinh' => $request->don_vi_tinh,
            'hinh_anh' => $request->hinh_anh,
            'danh_muc' => $request->danh_muc,
            'loai_san_pham' => $request->loai_san_pham,
            'nha_cung_cap' => $request->nha_cung_cap,
            'ngay_tao' => $request->ngay_tao,
            'ngay_cap_nhat' => $request->ngay_cap_nhat,
            'ngay_san_xuat' => $request->ngay_san_xuat,
            'ngay_het_han' => $request->ngay_het_han,
            'trang_thai' => $request->trang_thai,
            'kich_hoat' => $request->kich_hoat,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Cập Nhật Thành Công!"
        ]);
    }
    public function xoaSanPham(Request $request)
    {
        SanPham::where('id', $request->id)->delete();

        return response()->json([
            'status' => true,
            'message' => "Xoá Thành Công!"
        ]);
    }
}
