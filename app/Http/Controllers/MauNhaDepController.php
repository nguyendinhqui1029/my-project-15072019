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

class MauNhaDepController extends MasterController
{
    private $listContentMaster;
    private $listHeaderMaster;
    private $ds2;
    private $listData;
    function __construct()
    {
        parent::__construct();
        $this->listHeaderMaster =[
            new HeaderMaster(false,"",["modules.sub-modules.top-info"]),
            new HeaderMaster(true,"",["modules.sub-modules.logo","modules.sub-modules.video-gioi-thieu"]),
            new HeaderMaster(false,"",["modules.sub-modules.menu-top"]),
            new HeaderMaster(false,"",["modules.sub-modules.menu"])
        ];
        $this->listContentMaster =[
            //new ContentMaster(true,"mb-2",["modules.sub-modules.form-search-center","modules.sub-modules.kinh-nghiem"]),
            //new ContentMaster(true,"mb-1",["1"=>["modules.sub-modules.content-mau-nha-dep","modules.sub-modules.noi-dung-mau-nha-dep"],
            //"2"=>["modules.sub-modules.box-right-tin-nhieu-nguoi-doc","modules.sub-modules.box-right-kien-truc"]]),
           // new ContentMaster(false,"mb-1",["modules.sub-modules.nha-dat-khu-vuc"]),
           new ContentMaster(true,"mb-1",["1"=>["modules.sub-modules.content-mau-nha-dep","modules.sub-modules.content-list-mau-nha-dep"],
               "2"=>["modules.sub-modules.box-right-tin-nhieu-nguoi-doc","modules.sub-modules.box-nha-dep-right2"]]),
           new ContentMaster(false,"mb-1",["modules.sub-modules.phan-trang"])
        ];
        $this->ds2 = [
            new DataBoxRight(" KINH NGHIỆM THUÊ: Những lưu ý khi tìm thuê nhà, phòng trọ ","aaabb"),
            new DataBoxRight(" Hướng dẫn đăng tin nhà đất hiệu quả ","aaassss"),
            new DataBoxRight(" KINH NGHIỆM BÁN: Làm sao để tăng giá trị khi bán nhà?","aaa"),
        ];
        $this->listData =[
            new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ... This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#","Cool Fancy Text Generator - Cool Fonts & Stylish Letters, Symbols ","anh-noi-bat.png","alt"),
            new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#","Cool Fancy Text Generator, Symbols","anh-noi-bat.png","alt"),
            new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#"," Cool Fonts & Stylish Letters, Symbols","anh-noi-bat.png","alt"),
            new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#"," Cool Fonts & Stylish Letters, Symbols","anh-noi-bat.png","alt"),
            new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#"," Cool Fonts & Stylish Letters, Symbols","anh-noi-bat.png","alt")
        ];
    }
    public function MauNhaDep(){

    $maunhadep=DB::select('select * from maunhadep where TrangThai = ?', [1]);
     $var= \View::make('pages.maunhadep',[
     "boxright1" => new BoxRightMaster($this->ds2),
     "boxClass"=>new BoxDuAnNoiBat(),"listData"=> $this->listData,
     "formSearchClass"=> new FormSearch(),
     "listHeaderMaster"=>$this->listHeaderMaster,
     "listContentMaster"=>$this->listContentMaster,
     "formTimKiemClass"=>new FormTimKiem(),
     "formDanhSachClass"=>new FormDanhSach(),
     "maunhadep"=>$maunhadep]);
     return $var;
 }
 public function getMauNhaDep (Request $request)
    {
        $var= \View::make('pages.chi-tiet-bai-dang',[
            "boxright1" => new BoxRightMaster($this->ds2),
            "boxClass"=>new BoxDuAnNoiBat(),"listData"=>$this->listData,
            "formSearchClass"=> new FormSearch(),
            "listHeaderMaster"=>$this->listHeaderMaster,
            "listContentMaster"=>$this->listContentMaster,
            "formTimKiemClass"=>new FormTimKiem(),
            "formDanhSachClass"=>new FormDanhSach()]);
            return $var;
    }
}


