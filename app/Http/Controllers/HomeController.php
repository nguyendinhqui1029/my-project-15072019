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
class HomeController extends Controller
{
   public function home(){
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
        new ContentMaster(true,"mb-2",["modules.sub-modules.form-search-center","modules.sub-modules.kinh-nghiem"]),
        new ContentMaster(true,"",["1"=>["modules.sub-modules.box-du-an-noi-bat"],
        "2"=>["modules.sub-modules.news-right","modules.sub-modules.box-right-du-an","modules.sub-modules.box-right-du-an1"]]),
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
    
        $var= \View::make('pages.home',["boxright" => new BoxRightMaster($ds),
        "boxright1" => new BoxRightMaster($ds2),
        "boxClass"=>new BoxDuAnNoiBat(),"listData"=> $listData,
        "formSearchClass"=> new FormSearch(),
        "listHeaderMaster"=>$listHeaderMaster,
        "listContentMaster"=>$listContentMaster]);
        return $var;
    }
}