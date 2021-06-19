<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhanh extends Model
{
    protected $table = "hinhanh";
    protected $fillabel =["ID_HinhAnh", "DuongDanHinh", "Atl", "TrangThai", "created_at", "updated_at"];
    protected $timestamps =false;
    public function trangthai()
    {
        return $this->hasOne('App\trangthai');
    }
    public function hinhsanpham()
    {
        return $this->belongsTo('App\hinhsanpham');
    }
    public function sanpham()
    {
        return $this->belongsToMany('App\sanpham');
    }
}