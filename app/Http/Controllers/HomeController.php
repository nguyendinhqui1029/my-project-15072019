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
class HomeController extends MasterController
{
    function __construct()
    {
        parent::__construct();
    }
   public function home(){
       
    // all component header
        $listHeaderMaster =[
            new HeaderMaster(false,"",["modules.sub-modules.top-info"]),
            new HeaderMaster(true,"",["modules.sub-modules.logo","modules.sub-modules.video-gioi-thieu"]),
            new HeaderMaster(false,"",["modules.sub-modules.menu-top"]),
            new HeaderMaster(false,"",["modules.sub-modules.menu"])
        ];
    // all component header
    // all component header
    $listContentMaster =[
        new ContentMaster(true,"mb-2",["modules.sub-modules.form-search-center","modules.sub-modules.kinh-nghiem"]),
        new ContentMaster(true,"",["1"=>["modules.sub-modules.box-du-an-noi-bat"],
        "2"=>["modules.sub-modules.news-right","modules.sub-modules.box-right-du-an","modules.sub-modules.box-right-du-an1"]]),
        new ContentMaster(false,"mb-1",["modules.sub-modules.nha-dat-khu-vuc"]),
        new ContentMaster(false,"mb-1",["modules.sub-modules.phan-trang"])
    ];
    // all component header
       // liên kết các bảng lại. trong database 
      
        $listBatDongSanNoiBac = DB::select('select * from sanpham where TrangThai = ?', [3]);
        $listContentBatDongSan=[];
        foreach ($listBatDongSanNoiBac as $bds) {
            array_push($listContentBatDongSan,new DataCard($bds->MoTaTomTat,'#',$bds->TenSanPham,$bds->HinhAnh,$bds->TenSanPham));
        }

        $listLienKetNoiBac = DB::select('select sp.TrangThai,qh.TenQuanHuyen,qh.TenQuanHuyenKhongDau from sanpham as sp
        inner join quanhuyen as qh on sp.ID_QUANHUYEN = qh.ID_QUANHUYEN where sp.TrangThai <>?',[2]);
        // var_dump($listLienKetNoiBac);
        $listTinTuc = DB::select('select * from tintuc  where TrangThai <> ?', [2]);
        // khác là dùng <>
        // var_dump($this->listContentLienKetNoiBac); //xuất dữ liệu ra trang 
       // var_dump($listNhaDatKhuVuc); xuất dữ liệu ra trang
        $var= \View::make('pages.home',["boxright" => new BoxRightMaster($this->listContentLienKetNoiBac),
        "boxright1" => new BoxRightMaster($this->listContentKhuVuc),
        "boxClass"=>new BoxDuAnNoiBat(),"listData"=> $listContentBatDongSan,
        "formSearchClass"=> new FormSearch(),
        "ds" => $this->listContentLienKetNoiBac,
        "listHeaderMaster"=>$listHeaderMaster,
        "listContentMaster"=>$listContentMaster,
        "listMT"=>$this->listMT,
        "listMB"=>$this->listMB,
        "listMN"=>$this->listMN,
        "listMK"=>$this->listMK,
        "listtintuc"=>$listTinTuc]);
        return $var;
    }
}