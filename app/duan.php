<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class duan extends Model
{
    protected $table = "duan";
    protected $fillabel =["ID_DuAn", "TenDuAn", "MoTaDuAn", "TrangThai", "created_at", "updated_at"];
    protected $timestamps =false;
}