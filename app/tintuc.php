<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    protected $table = "tintuc";
    protected $fillabel =["ID_TinTuc", "TenTinTuc", "NoiDungTomTatTinTuc", "HinhAnhTinTuc", "NgayDangTinTuc", "ID_LoaiTinTuc", "TrangThai", "NoiDungChiTietTinTuc", "created_at", "updated_at"];
    protected $timestamps =false;
    public function loaitin()
    {
        return $this->hasOne('App\loaitin');
    }
    public function trangthai()
    {
        return $this->hasOne('App\trangthai');
    }
}