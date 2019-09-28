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
class MasterController extends Controller
{

    public $listMT;
    public $listMB;
    public $listMN;
    public $listMK;
    public $listContentLienKetNoiBac;
    public $listContentKhuVuc;
    function __construct() {
        $this->listMT = $this->getKhuVuc('MT');
        $this->listMB = $this->getKhuVuc('MB');
        $this->listMN= $this->getKhuVuc('MN');
        $this->listMK = $this->getKhuVuc('MK');

        $listLienKetNoiBac = DB::select('select sp.TrangThai,qh.TenQuanHuyen,qh.TenQuanHuyenKhongDau from sanpham as sp
        inner join quanhuyen as qh on sp.ID_QUANHUYEN = qh.ID_QUANHUYEN where sp.TrangThai <>?',[2]);
        // var_dump($listLienKetNoiBac);
        $this->listContentLienKetNoiBac = [];
        foreach ($listLienKetNoiBac as $lknb) {
            array_push($this->listContentLienKetNoiBac,new DataBoxRight($lknb->TenQuanHuyen,$lknb->TenQuanHuyenKhongDau,$lknb->TrangThai));
        }

        $listNhaDatKhuVuc = DB::select('select * from loaisanpham as lsp
        inner join sanpham as sp on lsp.ID_LOAISANPHAM = sp.ID_LOAISANPHAM 
        inner join quanhuyen as qh on sp.ID_QUANHUYEN = qh.ID_QUANHUYEN 
        inner join tinhthanhpho as ttp on qh.ID_TINHTHANHPHO = ttp.ID_TINHTHANHPHO 
         where lsp.TrangThai= ?', [1]);
         // lấy giá trị ra. Nếu trùng lấy 1 cái
         $this->listContentKhuVuc = [];
         array_push($this->listContentKhuVuc, new DataBoxRight($listNhaDatKhuVuc[0]->TenTinhThanhPho,'nha-dat-ban?id='.$listNhaDatKhuVuc[0]->ID_SanPham) );
         foreach ($listNhaDatKhuVuc as $value) {
            if($this->filterThanhPho($this->listContentKhuVuc,$value)!=='')
            {
             array_push($this->listContentKhuVuc, new DataBoxRight($value->TenTinhThanhPho,'nha-dat-ban?id='.$value->ID_SanPham) );
            }         
         }
    }
        
    public function getKhuVuc($kv){
        return $listKhuVuc = DB::select('select * from tinhthanhpho where TrangThai <> ? and KhuVuc=?', [2,$kv]);
    }
    
    //filter tinh thanh pho
    function filterThanhPho($listNhaDatKhuVuc, $kv){
        foreach ($listNhaDatKhuVuc as $value) {
            if($value->noidung === $kv->TenTinhThanhPho){
                return '';
            }
        }
        return $kv;
    }
}