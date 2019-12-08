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
use Illuminate\Support\Facades\Session;
class NoiDungNguoiDungController extends MasterController
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
        // new ContentMaster(false,"mb-1",["modules.sub-modules.dang-ky"]),
        new ContentMaster(false,"mb-1",["modules.sub-modules.noi-dung-nguoi-dang"])
    ];
    // get k có insert post có
    }
    public function noidungnguoidung(Request $request){
        $nguoidangtin = DB::select('select * from dangtin as dt
        inner join admin as ad on dt.ID_Admin = ad.ID_Admin
        where dt.TrangThai = ? and dt.ID_Admin=?', [1,Session::get('madangnhap')]);
        $var= \View::make('pages.noidungnguoidung',["listHeaderMaster"=>$this->listHeaderMaster,
        "listContentMaster"=>$this->listContentMaster,
        "nguoidangtin"=>$nguoidangtin]);
        return $var;
    }
}