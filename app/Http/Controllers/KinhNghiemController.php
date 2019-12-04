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

class KinhNghiemController extends Controller
{
   public function KinhNghiem(){
    $ds2 = [
     new DataBoxRight(" KINH NGHIỆM THUÊ: Những lưu ý khi tìm thuê nhà, phòng trọ ","aaabb"),
     new DataBoxRight(" Hướng dẫn đăng tin nhà đất hiệu quả ","aaassss"),
     new DataBoxRight(" KINH NGHIỆM BÁN: Làm sao để tăng giá trị khi bán nhà?","aaa"),
 ];
 $thitruong =[new DataBoxRight("modules.sub-modules.box-right-thi-truong","")];
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
     //new ContentMaster(true,"mb-1",["1"=>["modules.sub-modules.content-kinh-nghiem","modules.sub-modules.noi-dung-kinh-nghiem"],
     //"2"=>["modules.sub-modules.box-right-tin-tuc-noi-bat","modules.sub-modules.box-right-tin-nhieu-nguoi-doc","modules.sub-modules.box-right-thi-truong-container"
     //,"modules.sub-modules.box-right-thi-truong-container"]]),
     //new ContentMaster(false,"mb-1",["modules.sub-modules.nha-dat-khu-vuc"]),
     new ContentMaster(true,"mb-1",["1"=>["modules.sub-modules.content-kinh-nghiem","modules.sub-modules.contenter-kinh-nghiem"],
        "2"=>["modules.sub-modules.box-right-tin-tuc-noi-bat","modules.sub-modules.box-right-tin-nhieu-nguoi-doc","modules.sub-modules.box-kinh-nghiem-right3"]]),
     new ContentMaster(false,"mb-1",["modules.sub-modules.phan-trang"])
 ];
    $kinhnghiem= DB::select('select * from kinhnghiem where TrangThai = ?', [1]);
        $var= \View::make('pages.kinhnghiem',[
        "boxright1" => new BoxRightMaster($ds2),
        "boxClass"=>new BoxDuAnNoiBat(),
        "boxrightthitruong"=>new BoxRightMaster($thitruong),
        "formSearchClass"=> new FormSearch(),
        "listHeaderMaster"=>$listHeaderMaster,
        "listContentMaster"=>$listContentMaster,
        "formTimKiemClass"=>new FormTimKiem(),
        "formDanhSachClass"=>new FormDanhSach(),
        "kinhnghiem"=>$kinhnghiem
        ]);
        return $var;
        }
    }


