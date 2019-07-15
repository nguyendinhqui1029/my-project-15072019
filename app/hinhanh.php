<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhanh extends Model
{
    protected $table = "hinhanh";
    protected $fillabel =["ID_HinhAnh", "DuongDanHinh", "Atl", "TrangThai"];
    protected $timestamps =false;
}
