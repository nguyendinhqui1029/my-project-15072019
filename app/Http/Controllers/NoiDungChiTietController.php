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
class NoiDungChiTietController extends MasterController
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
        //new ContentMaster(false,"mb-1",["modules.sub-modules.dang-ky"])
    ];
    // get k có insert post có
    }
    public function getnoidungchitiet(Request $request){
        $id = $request->id;
        $data = DB::select('select * from nhamoigioi where ID_MoiGioi = ?', [$id]);
        $var= \View::make('pages.noidungchitiet',["listHeaderMaster"=>$this->listHeaderMaster,
        "listContentMaster"=>$this->listContentMaster,'data'=>$data[0]]);
        return $var;
        
    }
}