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
class AdminDangNhapController extends MasterController
{
    function __construct()
    {
        parent::__construct();
    }
    public function admindangnhap(Request $request){

        // $listHeaderMaster =[
        //     new HeaderMaster(false,"",["modules.sub-modules.top-info"]),
        //     new HeaderMaster(true,"",["modules.sub-modules.logo","modules.sub-modules.video-gioi-thieu"]),
        //     new HeaderMaster(false,"",["modules.sub-modules.menu-top"]),
        //     new HeaderMaster(false,"",["modules.sub-modules.menu"])
        // ];
    $listContentMaster =[
        new ContentMaster(false,"mb-1",["modules.sub-modules.admin-dang-nhap"])
    ];

        $var= \View::make('pages.dang-nhap-admin',[
        "listContentMaster"=>$listContentMaster]);
        return $var;
    }
    //filter tinh thanh pho
    function filterThanhPho($listNhaDatKhuVuc, $kv){
        foreach ($listNhaDatKhuVuc as $value) {
            if($value->noidung === $kv->TenTinhThanhPho){
                return '';
            }
        }
        return $kv;
    }
}