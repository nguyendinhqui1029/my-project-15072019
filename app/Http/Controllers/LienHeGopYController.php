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

class LienHeGopYController extends Controller
{
   public function LienHeGopY(){
    $ds2 = [
     new DataBoxRight(" KINH NGHIỆM THUÊ: Những lưu ý khi tìm thuê nhà, phòng trọ aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa","aaabb"),
     new DataBoxRight(" Hướng dẫn đăng tin nhà đất hiệu quả ","aaassss"),
     new DataBoxRight(" KINH NGHIỆM BÁN: Làm sao để tăng giá trị khi bán nhà?","aaa"),
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
    //  new ContentMaster(true,"mb-1",["1"=>["modules.sub-modules.thong-tin-gop-y"],
    //  "2"=>["modules.sub-modules.ho-tro-truc-tuyen"]]),
    new ContentMaster(false,"mb-1",["modules.sub-modules.lien-he-gop-y"]),
     new ContentMaster(false,"mb-1",["modules.sub-modules.nha-dat-khu-vuc"]),
     new ContentMaster(false,"mb-1",["modules.sub-modules.phan-trang"])
 ];
 // all component header
    $listData =[
        new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ... This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#","Cool Fancy Text Generator - Cool Fonts & Stylish Letters, Symbols ","anh-noi-bat.png","alt"),
        new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#","Cool Fancy Text Generator, Symbols","anh-noi-bat.png","alt"),
        new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#"," Cool Fonts & Stylish Letters, Symbols","anh-noi-bat.png","alt"),
        new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#"," Cool Fonts & Stylish Letters, Symbols","anh-noi-bat.png","alt"),
        new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#"," Cool Fonts & Stylish Letters, Symbols","anh-noi-bat.png","alt")
    ];
 
     $var= \View::make('pages.lienhe-gopy',[
     "boxright1" => new BoxRightMaster($ds2),
     "boxClass"=>new BoxDuAnNoiBat(),"listData"=> $listData,
     "formSearchClass"=> new FormSearch(),
     "listHeaderMaster"=>$listHeaderMaster,
     "listContentMaster"=>$listContentMaster,
     "formTimKiemClass"=>new FormTimKiem(),
     "formDanhSachClass"=>new FormDanhSach()]);
     return $var;
 }
   }

