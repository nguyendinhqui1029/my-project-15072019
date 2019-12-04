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
class DangTinNhaDatController extends MasterController
{
    private $listContentMaster;
    private $listHeaderMaster;
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
            new ContentMaster (false,"mb-1",["modules.sub-modules.noi-dung-rao-vat-nha-dat"]),
            new ContentMaster(false,"mb-1",["modules.sub-modules.content-rao-vat"])
        ];
    }
   public function getdangtinnhadat(Request $request){

         $dientich = $request->input('txtdientich');
         $ngay = $request->input('txtngay');
        $tong= $dientich + $ngay;
        $var= \View::make('pages.dang-tin-nha-dat',[ 
        "listHeaderMaster"=>$this->listHeaderMaster,
        "listContentMaster"=>$this->listContentMaster,
        "dienTich"=>$dientich,
        "numberDay"=>$ngay,
        "tong"=>$tong]);
        return $var;
    }
    public function postdangtinnhadat (Request $request){
        $dangtinnhadat= DB::insert('insert into dangtin values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
        [null,$request->txttieude,$request->txtnoidung,$request->txtloaitin,$request->txtdiachi,$request->txtgiaban,$request->txtdientich,$request->txttenlienhe,$request->txtdienthoai,$request->txtchieurong,$request->txtchieudai,$request->txtsolau,$request->txtsophongngu,$request->txthinhanh,$request->txtngay,$request->txttong,1,"2019-08-28 00:00:00","2019-08-28 00:00:00"]);
        $var= \View::make('pages.dang-tin-nha-dat',[
        "listHeaderMaster"=>$this->listHeaderMaster,
        "listContentMaster"=>$this->listContentMaster,
        "dangtinnhadat"=>$dangtinnhadat]);
        return $var;
    }
}