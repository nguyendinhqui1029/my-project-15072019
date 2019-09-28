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
use App\Classes\FormDanhSach;
use Illuminate\Support\Facades\DB;

class NhaMoiGioiController extends Controller
{
   public function NhaMoiGioi(){
    $ds = [
        new DataBoxRight("aaabbb","aaabb"),
        new DataBoxRight("aaa","aaa"),
        new DataBoxRight("aaa","aaa"),
        new DataBoxRight("aaa","aaa"),
        new DataBoxRight("aaa","aaa"),
        new DataBoxRight("aaa","aaa")
    ];
    $ds2 = [
     new DataBoxRight("aaabbb","aaabb"),
     new DataBoxRight("aaassss","aaassss"),
     new DataBoxRight("aaa","aaa"),
     new DataBoxRight("aaa","aaa"),
     new DataBoxRight("aaa","aaa"),
     new DataBoxRight("aaa","aaa")
 ];
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
     //new ContentMaster(true,"mb-2",["modules.sub-modules.form-search-center","modules.sub-modules.kinh-nghiem"]),
     new ContentMaster(true,"",["1"=>["modules.sub-modules.ds-nha-moi-gioi"],
        "2"=>["modules.sub-modules.nha-moi-gioi-search"]]),
     new ContentMaster(false,"mb-1",["modules.sub-modules.nha-dat-khu-vuc"]),
     new ContentMaster(false,"mb-1",["modules.sub-modules.phan-trang"])
 ];
 // all component header
//     $listData =[
//         new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ... This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#","Cool Fancy Text Generator - Cool Fonts & Stylish Letters, Symbols ","anh-noi-bat.png","alt"),
//         new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#","Cool Fancy Text Generator, Symbols","anh-noi-bat.png","alt"),
//         new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#"," Cool Fonts & Stylish Letters, Symbols","anh-noi-bat.png","alt"),
//         new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#"," Cool Fonts & Stylish Letters, Symbols","anh-noi-bat.png","alt"),
//         new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#"," Cool Fonts & Stylish Letters, Symbols","anh-noi-bat.png","alt")
//     ];
 
//      $var= \View::make('pages.nhamoigioi',["boxright" => new BoxRightMaster($ds),
//      "boxright1" => new BoxRightMaster($ds2),
//      "boxClass"=>new BoxDuAnNoiBat(),"listData"=> $listData,
//      "formSearchClass"=> new FormSearch(),
//      "listHeaderMaster"=>$listHeaderMaster,
//      "listContentMaster"=>$listContentMaster,
//      "formTimKiemClass"=>new FormTimKiem(),
//      "formDanhSachClass"=>new FormDanhSach()]);
//      return $var;
//  }
$listNhaDatKhuVuc = DB::select('select * from loaisanpham as lsp
inner join sanpham as sp on lsp.ID_LOAISANPHAM = sp.ID_LOAISANPHAM 
inner join quanhuyen as qh on sp.ID_QUANHUYEN = qh.ID_QUANHUYEN 
inner join tinhthanhpho as ttp on qh.ID_TINHTHANHPHO = ttp.ID_TINHTHANHPHO 
 where lsp.TrangThai= ?', [1]);
 // lấy giá trị ra. Nếu trùng lấy 1 cái
 $listContentKhuVuc = [];
 array_push($listContentKhuVuc, new DataBoxRight($listNhaDatKhuVuc[0]->TenTinhThanhPho,'nha-dat-ban?id='.$listNhaDatKhuVuc[0]->ID_SanPham) );
 foreach ($listNhaDatKhuVuc as $value) {
     foreach ($listContentKhuVuc as $value1) {
         if($value->TenTinhThanhPho !== $value1 ->noidung){
             array_push($listContentKhuVuc, new DataBoxRight($value->TenTinhThanhPho,'nha-dat-ban?id='.$value->ID_SanPham) );
         }
     }   
 }
 $listBatDongSanNoiBac = DB::select('select * from sanpham where Trangthai = ?', [3]);
 $listContentBatDongSan=[];
 foreach ($listBatDongSanNoiBac as $bds) {
     array_push($listContentBatDongSan,new DataCard($bds->MoTaTomTat,'#',$bds->TenSanPham,$bds->HinhAnh,$bds->TenSanPham));
 }
 // lấy khu vực
 $listMT = $this->getKhuVuc('MT');
 $listMB = $this->getKhuVuc('MB');
 $listMN= $this->getKhuVuc('MN');
 $listMK = $this->getKhuVuc('MK');
 //var_dump($listMB); xuất dữ liệu ra trang 
// var_dump($listNhaDatKhuVuc); xuất dữ liệu ra trang
 $var= \View::make('pages.home',["boxright" => new BoxRightMaster($ds),
 "boxright1" => new BoxRightMaster($listContentKhuVuc),
 "boxClass"=>new BoxDuAnNoiBat(),"listData"=> $listContentBatDongSan,
 "formSearchClass"=> new FormSearch(),
 "formDanhSachClass"=>new FormDanhSach(),
 "formTimKiemClass"=>new FormTimKiem(),
 "listHeaderMaster"=>$listHeaderMaster,
 "listContentMaster"=>$listContentMaster,
 "listMT"=>$listMT,
 "listMB"=>$listMB,
 "listMN"=>$listMB,
 "listMK"=>$listMK]);
 return $var;
}
// gọi lấy khu vực trong csdl
function getKhuVuc($kv){
 return $listKhuVuc = DB::select('select * from tinhthanhpho where TrangThai = ? and KhuVuc=?', [1,$kv]);
}
}


