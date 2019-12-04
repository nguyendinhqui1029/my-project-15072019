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
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
class LienHeGopYController extends MasterController
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
            // new ContentMaster(true,"mb-2",["modules.sub-modules.form-search-center","modules.sub-modules.kinh-nghiem"]),
            // new ContentMaster(true,"",["1"=>["modules.sub-modules.box-du-an-noi-bat"],
            // "2"=>["modules.sub-modules.news-right","modules.sub-modules.box-right-du-an","modules.sub-modules.box-right-du-an1"]]),
            new ContentMaster(false,"mb-1",["modules.sub-modules.lien-he-gop-y"]),
            // new ContentMaster(false,"mb-1",["modules.sub-modules.nha-dat-khu-vuc"]),
            new ContentMaster(false,"mb-1",["modules.sub-modules.phan-trang"])
        ];
    }
    public function lienhegopy(Request $request ){
    // all component header
        
    // all component header
    // all component header
    

    //liên hệ email
        // $to_name = 'Tan Thanh';
        // $to_email = 'tanthanhle0910@gmail.com';
        // $data = array('name'=>$request->txtname, "body" =>$request->txtemail);
            
        // Mail::send('modules.sub-modules.lien-he-gop-y', $data, function($message) use ($to_name, $to_email) {
        //     $message->to($to_email, $to_name)
        //             ->subject('Liên hệ');
        //     $message->from('tanthanhle0910@gmail.com','Artisans Web');
        // });
    
    // all component header
       // liên kết các bảng lại. trong database 
    //    $listNhaDatKhuVuc = DB::select('select * from loaisanpham as lsp
    //     inner join sanpham as sp on lsp.ID_LOAISANPHAM = sp.ID_LOAISANPHAM 
    //     inner join quanhuyen as qh on sp.ID_QUANHUYEN = qh.ID_QUANHUYEN 
    //     inner join tinhthanhpho as ttp on qh.ID_TINHTHANHPHO = ttp.ID_TINHTHANHPHO 
    //     where lsp.TrangThai= ?', [1]);
    //     // lấy giá trị ra. Nếu trùng lấy 1 cái
    //     $listContentKhuVuc = [];
    //     array_push($listContentKhuVuc, new DataBoxRight($listNhaDatKhuVuc[0]->TenTinhThanhPho,'nha-dat-ban?id='.$listNhaDatKhuVuc[0]->ID_SanPham) );
    //     foreach ($listNhaDatKhuVuc as $value) {
    //         if($this->filterThanhPho($listContentKhuVuc,$value)!=='')
    //         {
    //         array_push($listContentKhuVuc, new DataBoxRight($value->TenTinhThanhPho,'nha-dat-ban?id='.$value->ID_SanPham) );
    //         }         
    //     }
    //     $listBatDongSanNoiBac = DB::select('select * from sanpham where TrangThai = ?', [3]);
    //     $listContentBatDongSan=[];
    //     foreach ($listBatDongSanNoiBac as $bds) {
    //         array_push($listContentBatDongSan,new DataCard($bds->MoTaTomTat,'#',$bds->TenSanPham,$bds->HinhAnh,$bds->TenSanPham));
    //     }

    //     $listLienKetNoiBac = DB::select('select sp.TrangThai,qh.TenQuanHuyen,qh.TenQuanHuyenKhongDau from sanpham as sp
    //     inner join quanhuyen as qh on sp.ID_QUANHUYEN = qh.ID_QUANHUYEN where sp.TrangThai <>?',[2]);
    //     // var_dump($listLienKetNoiBac);
    //     $listContentLienKetNoiBac = [];
    //     foreach ($listLienKetNoiBac as $lknb) {
    //         array_push($listContentLienKetNoiBac,new DataBoxRight($lknb->TenQuanHuyen,$lknb->TenQuanHuyenKhongDau,$lknb->TrangThai));
    //     }
    //     $listTinTuc = DB::select('select * from tintuc  where TrangThai <> ?', [2]);
        // khác là dùng <>
        //var_dump($listMB); xuất dữ liệu ra trang 
       // var_dump($listNhaDatKhuVuc); xuất dữ liệu ra trang
        $var= \View::make('pages.lienhe-gopy',[
        //"boxright" => new BoxRightMaster($listContentLienKetNoiBac),
        //"boxright1" => new BoxRightMaster($listContentKhuVuc),
        "boxClass"=>new BoxDuAnNoiBat(),
        //"listData"=> $listContentBatDongSan,
        "formSearchClass"=> new FormSearch(),
        //"ds" => $listContentLienKetNoiBac,,$request
        "listHeaderMaster"=>$this->listHeaderMaster,
        "listContentMaster"=>$this->listContentMaster
        //"listtintuc"=>$listTinTuc
        ]);
        return $var;
    }
    public function sendlienhegopy(Request $request){
        $name = $request->input('txtname');
        $email = $request->input('txtemail');
        $dienthoai = $request->input('txtdienthoai');
        $txtdiachi = $request->input('txtdiachi');
        $txttieude = $request->input('txttieude');
        $txtnoidung = $request->input('txtnoidung');
        $lienhe= DB::insert('insert into lienhe values (?,?,?,?,?,?,?,?,?)',
        [null,$request->txtname,$request->txtemail,$request->txtdiachi,$request->txttieude,$request->txtnoidung,1,$request->txtdienthoai,"2019-08-28 00:00:00"]);

        Mail::to($email)->send(new SendEmail('pages.lienhe-gopy',$name,$dienthoai,$txtdiachi,$txttieude,$txtnoidung));
        $var= \View::make('pages.lienhe-gopy',[
            "listHeaderMaster"=>$this->listHeaderMaster,
        "listContentMaster"=>$this->listContentMaster,
        "lienhe"=>$lienhe
        ]);
        return $var;
    }
}