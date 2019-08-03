<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tinhthanhpho extends Model
{
    protected $table = "tinhthanhpho";
    protected $fillabel =["ID_TinhThanhPho", "TenTinhThanhPho", "TrangThai", "TenKhongDauTinhThanhPho", "created_at", "updated_at", "KhuVuc"];
    protected $timestamps =false;
public function quanhuyen()
{
    return $this->hasMany('App\quanhuyen');
}
}

	


    