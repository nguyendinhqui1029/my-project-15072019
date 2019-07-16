<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = "sanpham";
    protected $fillabel =["ID_SanPham", "TenSanPham", "NgayDang", "DienTich", "Gia", "MoTaTomTat", "TrangThai", "ID_LoaiSanPham", "ID_ViTri", "ID_QuanHuyen", "ID_Huong", "ID_DuAn", "HinhAnh", "ID_NguoiDung", "NgayBan"];
    public $timestamps =false;
}
