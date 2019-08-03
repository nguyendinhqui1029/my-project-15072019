<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    protected $table = "loaitin";
    protected $fillabel =["ID_LoaiTin", "TenLoaiTin", "TrangThai", "created_at", "updated_at"];
    protected $timestamps =false;
    public function tintuc()
    {
        return $this->belongsTo('App\tintuc');
    }
    public function trangthai()
    {
        return $this->hasOne('App\trangthai');
    }
}