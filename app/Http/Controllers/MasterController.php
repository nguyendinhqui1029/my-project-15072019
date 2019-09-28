<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\BoxRightMaster;
use App\Classes\DataBoxRight;
use App\Classes\BoxDuAnNoiBat;
use App\Classes\DataCard;
use App\Classes\FormSearch;
use App\Classes\HeaderMaster;
use App\Classes\ContentMaster;
use App\Classes\FormTimKiem;
use Illuminate\Support\Facades\DB;
class MasterController extends Controller
{

    public $listMT;
    public $listMB;
    public $listMN;
    public $listMK;
    function __construct() {
        $this->listMT = $this->getKhuVuc('MT');
        $this->listMB = $this->getKhuVuc('MB');
        $this->listMN= $this->getKhuVuc('MN');
        $this->listMK = $this->getKhuVuc('MK');
    }
        
    public function getKhuVuc($kv){
        return $listKhuVuc = DB::select('select * from tinhthanhpho where TrangThai <> ? and KhuVuc=?', [2,$kv]);
    }
}