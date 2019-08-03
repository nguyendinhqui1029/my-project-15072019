<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vitri extends Model
{
    protected $table = "vitri";
    protected $fillabel =["ID_ViTri", "TenViTri", "MoTaViTri", "KinhDo", "ViDo", "TrangThai", "created_at", "updated_at"];
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