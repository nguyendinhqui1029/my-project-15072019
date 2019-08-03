<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motachitietsanpham extends Model
{
    protected $table = "motachitietsanpham";
    protected $fillabel =["ID_MoTaChiTietSanPham", "ID_LoaiSanPham", "Tang", "ID_SanPham", "ChieuNgang", "ChieuDai", "LoGio", "PhapLy", "PhongNgu", "PhongAn", "Bep", "SanThuong", "ChoDeXeHoi", "ChinhChu", "LoaiDat", "TrangThai", "ID_HinhAnh", "created_at", "updated_at"];
    protected $timestamps =false;

    public function loaisanpham(){
        return $this->belongsTo('App\loaisanpham');
    }
}