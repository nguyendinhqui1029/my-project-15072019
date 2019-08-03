<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = "sanpham";
    protected $fillabel =["ID_SanPham", "TenSanPham", "NgayDang", "DienTich", "Gia", "MoTaTomTat", "TrangThai", "ID_LoaiSanPham", "ID_ViTri", "ID_QuanHuyen", "ID_Huong", "ID_DuAn", "HinhAnh", "ID_NguoiDung", "NgayBan", "created_at", "updated_at", "DanhGia"];
    public $timestamps =false;
    public function huong()
    {
        return $this->hasOne('App\huong');
    }
    public function loaisanpham()
    {
        return $this->hasOne('App\loaisanpham');
    }
    public function hinhsanpham()
    {
        return $this->belongsTo('App\hinhsanpham');
    }
    public function hinhanh()       
    {      
    return $this->belongsToMany('App\hinhanh');
    }   
    public function vitri()
    {
        return $this->hasOne('App\vitri');
    } 
}