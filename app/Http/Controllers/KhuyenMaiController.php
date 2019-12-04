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
class KhuyenMaiController extends MasterController
{
    private $listHeaderMaster;
    private $listContentMaster;
    function __construct()
    {
        parent::__construct();
        $this->listHeaderMaster =[
            new HeaderMaster(false,"",["modules.sub-modules.top-info"]),
            new HeaderMaster(true,"",["modules.sub-modules.logo","modules.sub-modules.video-gioi-thieu"]),
            new HeaderMaster(false,"",["modules.sub-modules.dang-xuat"]),
            new HeaderMaster(false,"",["modules.sub-modules.menu"])
        ];
    $this->listContentMaster =[
        new ContentMaster(false,"mb-1",["modules.sub-modules.khuyen-mai"])
    ];
    }
    // KIỂM TRA URL
    public function checkDangNhap(Request $request)
    {
        $isLogin =false;
        if($request->session()->has('role') && $request->session()->has('tendangnhap') && $request->session()->has('madangnhap'))
        {
            $isLogin = true;
        }
        return $isLogin;

    }
    public function khuyenmai( Request $request){
        if($this->checkDangNhap($request))
        {
            $var= \View::make('pages.khuyen-mai',["listHeaderMaster"=>$this->listHeaderMaster,
        "listContentMaster"=>$this->listContentMaster,
        ]);
        return $var;
        }else{
            $var= \View::make('pages.dang-nhap-nguoi-dung',[
                "listHeaderMaster"=>$this->listHeaderMaster,
                "listContentMaster"=>$this->listContentMaster]);
                return $var; 
            }
    }
}