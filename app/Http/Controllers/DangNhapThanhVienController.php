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
class DangNhapThanhVienController extends MasterController
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
            new ContentMaster(false,"mb-1",["modules.sub-modules.dang-nhap"])
        ];
    }
    public function getdangnhapthanhvien(){
        $var= \View::make('pages.dang-nhap-nguoi-dung',[
        "listHeaderMaster"=>$this->listHeaderMaster,
        "listContentMaster"=>$this->listContentMaster]);
        return $var;
    }
    public function postdangnhapthanhvien (Request $request){
            $tendangnhap = $request->input('txttentruycap');
            $password = $request->input('password');
            $tk = DB::select('select * from admin where TenAdmin =? and MatKhauAdmin =?', [$tendangnhap,$password]);
            // $tk = DB::select('select * from admin where MatKhauAdmin =?', [$password]);

            //var_dump($tk);
            if(count($tk)>0)
            {
                session(['role' =>$tk[0]->Role]); // sử dụng hàm session để truy suất hoặc lưu các session
                session(['tendangnhap' =>$tk[0]->TenAdmin]);
                session(['password' =>$tk[0]->MatKhauAdmin]);
                session(['madangnhap' =>$tk[0]->ID_Admin]);
                if($tk[0]->Role === 2){
                    return redirect('admin-du-an');
                }else{
                    return redirect('khuyen-mai');
                }
            }else{
                return redirect('dang-nhap')->with('notice', 'Tài khoản hoặc mật khẩu chưa chính xác.'); // đường dẫn chuyển trang khác
            }

        $var= \View::make('pages.dang-nhap-nguoi-dung',[
            "listHeaderMaster"=>$this->listHeaderMaster,
            "listContentMaster"=>$this->listContentMaster]);
            return $var;
    }
}