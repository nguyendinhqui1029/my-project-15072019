<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
    protected $table = "loaisanpham";
    protected $fillabel =["ID_LoaiSanPham", "TenLoaiSanPham", "MoTa", "TrangThai", "created_at", "updated_at"];
    protected $timestamps =false;

    public function motachitietsanpham()
    {
        return $this->hasOne('App\motachitietsanpham');
    }
    public function trangthai()
    {
        return $this->hasOne('App\trangthai');
    }
    public function sanpham()
    {
        return $this->belongsTo('App\sanpham');
    }
}