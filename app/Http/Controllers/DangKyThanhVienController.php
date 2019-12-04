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
class DangKyThanhVienController extends MasterController
{
    private $listHeaderMaster;
    private $listContentMaster;
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
        new ContentMaster(false,"mb-1",["modules.sub-modules.dang-ky"])
    ];
    // get k có insert post có
    }
    public function getdangkythanhvien(){

        $var= \View::make('pages.dang-ky-nguoi-dung',["listHeaderMaster"=>$this->listHeaderMaster,
        "listContentMaster"=>$this->listContentMaster]);
        return $var;
        
    }
    public function postdangkythanhvien (Request $request){
        $dangkythanhvien= DB::insert('insert into admin values (?,?,?,?,?,?,?,?,?,?,?)', 
        [null,$request->txttentruycap,$request->txtemail,$request->txtdidong,$request->txtngaydangky,$request->password,1,1,1,"2019-08-28 00:00:00","2019-08-28 00:00:00"]);
        $var= \View::make('pages.dang-ky-nguoi-dung',["listHeaderMaster"=>$this->listHeaderMaster,
        "listContentMaster"=>$this->listContentMaster,
        "dangkythanhvien"=>$dangkythanhvien]);
        return $var;
    }

}