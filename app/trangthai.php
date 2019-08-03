<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trangthai extends Model
{
    protected $table = "trangthai";
    protected $fillabel =["ID_TrangThai", "TenTrangThai", "MoTaTrangThai", "created_at", "updated_at"];
    protected $timestamps =false;
    public function loaitin()
    {
        return $this->belongsTo('App\loaitin');
    }
    public function tintuc()
    {
        return $this->belongsTo('App\tintuc');
    }
    public function admin()
    {
        return $this->belongsTo('App\admin');
    }
    public function huong()
    {
        return $this->belongsTo('App\huong');
    }
    public function loaisanpham()
    {
        return $this->belongsTo('App\loaisanpham');
    }
    public function hinhanh()
    {
        return $this->belongsTo('App\hinhanh');
    }
    public function vitri()
    {
        return $this->belongsTo('App\vitri');
    }
}
