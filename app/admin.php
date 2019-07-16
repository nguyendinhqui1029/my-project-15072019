<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = "admin";
    protected $fillabel =["ID_Admin", "TenAdmin", "EmailAdmin", "DienThoaiAdmin", "MatKhauAdmin", "AnhDaiDien", "TrangThai"];
    protected $timestamps =false;
}

