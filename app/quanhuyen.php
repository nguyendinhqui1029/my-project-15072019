<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quanhuyen extends Model
{ 
    protected $table = "quanhuyen";
    protected $fillabel =["ID_QuanHuyen", "TenQuanHuyen", "ID_TinhThanhPho", "TrangThai", "TenQuanHuyenKhongDau", "created_at", "updated_at"];
    protected $timestamps =false;
    public function tinhthanhpho()
    {
        return $this->belongsTo('App\tinhthanhpho');
    }
}