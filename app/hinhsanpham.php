<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhsanpham extends Model
{
    protected $table = "hinhsanpham";
    protected $fillabel =["ID_Hinh", "ID_SanPham", "TrangThai"];
    protected $timestamps =false;
}
