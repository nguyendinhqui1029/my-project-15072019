<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
    protected $table = "loaisanpham";
    protected $fillabel =["ID_LoaiSanPham", "TenLoaiSanPham", "MoTa", "TrangThai"];
    protected $timestamps =false;

    public function motachitietsanpham(){
        return $this->hasOne('App\motachitietsanpham');
    }
}
