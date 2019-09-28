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
class HomeController extends Controller
{
   public function home(){
    //    $ds = [
    //        new DataBoxRight("aaabbb","aaabb"),
    //        new DataBoxRight("aaa","aaa"),
    //        new DataBoxRight("aaa","aaa"),
    //        new DataBoxRight("aaa","aaa"),
    //        new DataBoxRight("aaa","aaa"),
    //        new DataBoxRight("aaa","aaa")
    //    ];
       
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
       $listNhaDatKhuVuc = DB::select('select * from loaisanpham as lsp
       inner join sanpham as sp on lsp.ID_LOAISANPHAM = sp.ID_LOAISANPHAM 
       inner join quanhuyen as qh on sp.ID_QUANHUYEN = qh.ID_QUANHUYEN 
       inner join tinhthanhpho as ttp on qh.ID_TINHTHANHPHO = ttp.ID_TINHTHANHPHO 
        where lsp.TrangThai= ?', [1]);
        // lấy giá trị ra. Nếu trùng lấy 1 cái
        $listContentKhuVuc = [];
        array_push($listContentKhuVuc, new DataBoxRight($listNhaDatKhuVuc[0]->TenTinhThanhPho,'nha-dat-ban?id='.$listNhaDatKhuVuc[0]->ID_SanPham) );
        foreach ($listNhaDatKhuVuc as $value) {
           if($this->filterThanhPho($listContentKhuVuc,$value)!=='')
           {
            array_push($listContentKhuVuc, new DataBoxRight($value->TenTinhThanhPho,'nha-dat-ban?id='.$value->ID_SanPham) );
           }         
        }
        $listBatDongSanNoiBac = DB::select('select * from sanpham where TrangThai = ?', [3]);
        $listContentBatDongSan=[];
        foreach ($listBatDongSanNoiBac as $bds) {
            array_push($listContentBatDongSan,new DataCard($bds->MoTaTomTat,'#',$bds->TenSanPham,$bds->HinhAnh,$bds->TenSanPham));
        }

        $listLienKetNoiBac = DB::select('select sp.TrangThai,qh.TenQuanHuyen,qh.TenQuanHuyenKhongDau from sanpham as sp
        inner join quanhuyen as qh on sp.ID_QUANHUYEN = qh.ID_QUANHUYEN where sp.TrangThai <>?',[2]);
        // var_dump($listLienKetNoiBac);
        $listContentLienKetNoiBac = [];
        foreach ($listLienKetNoiBac as $lknb) {
            array_push($listContentLienKetNoiBac,new DataBoxRight($lknb->TenQuanHuyen,$lknb->TenQuanHuyenKhongDau,$lknb->TrangThai));
        }
        $listTinTuc = DB::select('select * from tintuc  where TrangThai <> ?', [2]);
        // khác là dùng <>
        // lấy khu vực
        $listMT = $this->getKhuVuc('MT');
        $listMB = $this->getKhuVuc('MB');
        $listMN= $this->getKhuVuc('MN');
        $listMK = $this->getKhuVuc('MK');
        //var_dump($listMB); xuất dữ liệu ra trang 
       // var_dump($listNhaDatKhuVuc); xuất dữ liệu ra trang
        $var= \View::make('pages.home',["boxright" => new BoxRightMaster($listContentLienKetNoiBac),
        "boxright1" => new BoxRightMaster($listContentKhuVuc),
        "boxClass"=>new BoxDuAnNoiBat(),"listData"=> $listContentBatDongSan,
        "formSearchClass"=> new FormSearch(),
        "ds" => $listContentLienKetNoiBac,
        "listHeaderMaster"=>$listHeaderMaster,
        "listContentMaster"=>$listContentMaster,
        "listMT"=>$listMT,
        "listMB"=>$listMB,
        "listMN"=>$listMB,
        "listMK"=>$listMK,
        "listtintuc"=>$listTinTuc]);
        return $var;
    }
    // gọi lấy khu vực trong csdl
    function getKhuVuc($kv){
        return $listKhuVuc = DB::select('select * from tinhthanhpho where TrangThai <> ? and KhuVuc=?', [2,$kv]);
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