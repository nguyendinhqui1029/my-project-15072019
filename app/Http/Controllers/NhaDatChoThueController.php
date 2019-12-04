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
use Illuminate\Support\Facades\DB;
class NhaDatChoThueController extends Controller
{
   public function nhadatchothue(){
      
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
        new ContentMaster(true,"mb-2",["1"=>["modules.sub-modules.list-card-product"],
        "2"=>[
            "modules.sub-modules.form-search-right",
            "modules.sub-modules.box-right-du-an1",
            "modules.sub-modules.box-right-du-an"
            ]
        ]),

    
        // new ContentMaster(true,"",["1"=>["modules.sub-modules.box-du-an-noi-bat"],
        // "2"=>["modules.sub-modules.news-right","modules.sub-modules.box-right-du-an","modules.sub-modules.box-right-du-an1"]]),
        // new ContentMaster(false,"mb-1",["modules.sub-modules.nha-dat-khu-vuc"]),
        // new ContentMaster(false,"mb-1",["modules.sub-modules.phan-trang"])
    ];
 
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

 $listProduct = DB::select('select * from sanpham as sp 
 inner join loaisanpham as lsp on sp.ID_LoaiSanPham = lsp.ID_LoaiSanPham
 inner join vitri as vt on sp.ID_ViTri = vt.ID_ViTri 
 inner join huong as h on sp.ID_Huong = h.ID_Huong
 inner join quanhuyen as qh on sp.ID_QuanHuyen = qh.ID_QuanHuyen
 inner join tinhthanhpho as ttp on qh.ID_TinhThanhPho = ttp.ID_TinhThanhPho
 inner join duan as da on sp.ID_DuAn = da.ID_DuAn 
 inner join motachitietsanpham as mtctsp on sp.ID_SanPham = mtctsp.ID_SanPham
 where sp.TrangThai =?',[1]);
        $var= \View::make('pages.nhadatchothue',["boxright" => new BoxRightMaster($ds),
        "boxright1" => new BoxRightMaster($ds2),
     "boxClass"=>new BoxDuAnNoiBat(),
     "formSearchClass"=> new FormSearch(),
     "listHeaderMaster"=>$listHeaderMaster,
     "listContentMaster"=>$listContentMaster,
     "listProduct"=>$listProduct
     ]);
     return $var;
    }
}