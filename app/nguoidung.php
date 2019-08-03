<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nguoidung extends Model
{
    protected $table = "nguoidung";
    protected $fillabel =["ID_NguoiDung", "TenDangNhap", "MaKhau", "DienThoai", "AnhDaiDien", "TrangThai", "created_at", "updated_at"];
    protected $timestamps =false;
}