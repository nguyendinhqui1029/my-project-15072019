<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class huong extends Model
{
    
    protected $table = "huong";
    protected $fillabel =["ID_Huong", "TenHuong", "TenHuongKhongDau", "TrangThai", "created_at", "updated_at"];
    protected $timestamps =false;
    public function trangthai()
    {
        return $this->hasOne('App\trangthai');
    }
    public function sanpham()
    {
        return $this->belongsTo('App\sanpham');
    }
}