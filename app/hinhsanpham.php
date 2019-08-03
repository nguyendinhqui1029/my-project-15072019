<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhsanpham extends Model
{
    protected $table = "hinhsanpham";
    protected $fillabel =["ID_Hinh", "ID_SanPham", "TrangThai", "created_at", "updated_at"];
    protected $timestamps =false;
    public function hinhanh()
    {
        return $this->hasMany('App\hinhanh');
    }
    public function sanpham()
    {
        return $this->hasMany('App\sanpham');
    }
}