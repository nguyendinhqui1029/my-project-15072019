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
class AdminController extends MasterController
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
    // add tài khoản
    public function deleteDanhSach(Request $request){
        if($this->checkDangNhap($request))
        {
            $id = $request->id;
            if(isset($id)){
                $data= DB::delete("delete from admin where ID_Admin= ?", [$id]);
            }
            
            $admin =DB::select('select * from admin where TrangThai = ?', [1]);
            $var = \View::make('modules.sub-modules.admin',[ 
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-danh-sach",
            //"data"=>isset($data)?$data[0]:'',
            "chucnang"=>$request->chucnang,
            "admin"=>$admin]);
            return $var;
        }else{
            $var= \View::make('pages.dang-nhap-nguoi-dung',[
                "listHeaderMaster"=>$this->listHeaderMaster,
                "listContentMaster"=>$this->listContentMaster]);
                return $var; 
        }
    }
    public function adminContent(Request $request){
        if($this->checkDangNhap($request))
        {
            $id = $request->id;
        if(isset($id)){
            $data= DB::select('select * from admin where ID_Admin = ?', [$id]);
        }
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content",
        "data"=>isset($data)?$data[0]:'',
        "chucnang"=>$request->chucnang]);
        return $var;
        }else{
            $var= \View::make('pages.dang-nhap-nguoi-dung',[
                "listHeaderMaster"=>$this->listHeaderMaster,
                "listContentMaster"=>$this->listContentMaster]);
                return $var; 
        }
        //var_dump($request->all());
        
    }
    public function addTaiKhoan(Request $request){
        //var_dump($request->all());
        if($this->checkDangNhap($request))
        {
            switch ($request->chucnang) {
                case 'update':
                {
                    DB::update('update admin set TenAdmin=?,EmailAdmin=?,DienThoaiAdmin=?,MatKhauAdmin=?,AnhDaiDien=?,TrangThai=?,Role=? where ID_Admin = ?', 
                    [$request->txtname,$request->txtemail,$request->txtdienthoai,$request->txtmatkhau,$request->txtanh,$request->txttrangthai,$request->txtrole,$request->id]);
                }
                    break;
                    case 'them':
                {
                    DB::insert('insert into admin values (?,?,?,?,?,?,?,?,?,?,?)',
                        [null,$request->txtname,$request->txtemail,$request->txtdienthoai,$request->txtngaytao,$request->txtmatkhau,$request->txtanh,$request->txttrangthai,$request->txtrole,"2019-08-28 00:00:00","2019-08-28 00:00:00"]);
                }
                    break;
            }
            $var= \View::make('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content",
            "chucnang"=>$request->chucnang]);
            return $var;
        }else{
            $var= \View::make('pages.dang-nhap-nguoi-dung',[
                "listHeaderMaster"=>$this->listHeaderMaster,
                "listContentMaster"=>$this->listContentMaster]);
                return $var; 
        }
        
    }
    public function getDanhSach(Request $request){

        //var_dump($request->all());
        if($this->checkDangNhap($request))
        {
            $admin= DB::select('select * from admin where TrangThai = ?', [1]);
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-danh-sach",
        "admin"=>$admin]);
        return $var;
        }else{
            $var= \View::make('pages.dang-nhap-nguoi-dung',[
                "listHeaderMaster"=>$this->listHeaderMaster,
                "listContentMaster"=>$this->listContentMaster]);
                return $var; 
        }
        
    }
        // add dự án
        public function deleteDuAn(Request $request){
            $id = $request->id;
            if(isset($id)){
                $data= DB::delete("delete from duan where ID_DuAn= ?", [$id]);
            }
            
            $duan =DB::select('select * from duan where TrangThai = ?', [1]);
            $var = \View::make('modules.sub-modules.admin',[ 
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-du-an",
            //"data"=>isset($data)?$data[0]:'',
            "chucnang"=>$request->chucnang,
            "duan"=>$duan]);
            return $var;
        }
    public function adminDuAn(Request $request){
        //var_dump($request->all());
        if($this->checkDangNhap($request))
        {
            $id =$request->id;
        if(isset($id))
        {
            $data= DB::select('select * from duan where ID_DuAn = ?', [$id]);
        }
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-du-an",
        "data"=>isset($data)?$data[0]:'',
        "chucnang"=>$request->chucnang]);
        return $var;
        }else{
            $var= \View::make('pages.dang-nhap-nguoi-dung',[
                "listHeaderMaster"=>$this->listHeaderMaster,
                "listContentMaster"=>$this->listContentMaster]);
                return $var;
        }
        
    }
    public function addDuAn(Request $request){
        //var_dump($request->all());
        switch ($request->chucnang) {
            case 'update':
            {
                DB::update('update duan set TenDuAn=?,MoTaDuAn=?,TrangThai=? where ID_DuAn = ?',
                    [$request->txtduan,$request->txtmota,$request->txttrangthai,$request->id]);
            }
            break;
            case 'them':
            {
                DB::insert('insert into duan values (?,?,?,?,?,?)',
                [null,$request->txtduan,$request->txtmota,$request->txttrangthai,"2019-08-28 00:00:00","2019-08-28 00:00:00"]);
            }
            break;
        }
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-du-an",
        "chucnang"=>$request->chucnang]);
        return $var;
    }
    public function getDuAn(Request $request){

        //var_dump($request->all());
        $duan= DB::select('select * from duan where TrangThai = ?', [1]);
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-du-an",
        "duan"=>$duan]);
        return $var;
    }
    // sản phẩm addLoaiSanPham
    public function deleteLoaiSanPham(Request $request){
        $id = $request->id;
        if(isset($id)){
            $data= DB::delete("delete from loaisanpham where ID_LoaiSanPham= ?", [$id]);
        }
        
        $loaisanpham =DB::select('select * from loaisanpham where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-loai-san-pham",
        //"data"=>isset($data)?$data[0]:'',
        "chucnang"=>$request->chucnang,
        "loaisanpham"=>$loaisanpham]);
        return $var;
    }
    public function adminLoaiSanPham(Request $request){
        //var_dump($request->all());
        $id= $request->id;
        if(isset($id))
        {
            $data = DB::select('select * from loaisanpham where ID_LoaiSanPham = ?', [$id]);
        }
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-loai-san-pham",
        "data"=>isset($data)?$data[0]:'',
        "chucnang"=>$request->chucnang]);
        return $var;
    }
    public function addLoaiSanPham(Request $request){

        //var_dump($request->all());
        switch ($request->chucnang) {
            case 'update':
                {
                    DB::update('update loaisanpham set TenLoaiSanPham=?,MoTa=?,TrangThai=?,Sub_IDLoaiSanPham=? where ID_LoaiSanPham=?', 
                    [$request->txtsanpham ,$request->txtmota, $request->txttrangthai,$request->txtloaisanpham,$request->id]);
                }
                break;
                case 'them':
                {
                    DB::insert('insert into loaisanpham values (?,?,?,?,?,?,?)', 
                    [null,$request->txtsanpham,$request->txtmota, $request->txttrangthai,$request->txtloaisanpham,"2019-08-28 00:00:00","2019-08-28 00:00:00"]);
                }
                break;
            }
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-loai-san-pham",
        "chucnang"=>$request->chucnang]);
        return $var;
    }
    public function getLoaiSanPham(Request $request){

        //var_dump($request->all());
        $loaisanpham =DB::select('select * from loaisanpham where TrangThai = ?', [1]);
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-loai-san-pham",
        "loaisanpham"=>$loaisanpham]);
        return $var;
    }
    //quận huyện
    public function deleteQuanHuyen(Request $request){
        $id = $request->id;
        if(isset($id)){
            $data= DB::delete("delete from quanhuyen where ID_QuanHuyen= ?", [$id]);
        }
        
        $quanhuyen =DB::select('select * from quanhuyen where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-quan-huyen",
        //"data"=>isset($data)?$data[0]:'',
        "chucnang"=>$request->chucnang,
        "quanhuyen"=>$quanhuyen]);
        return $var;
    }
    public function adminQuanHuyen(Request $request){
        //var_dump($request->all());
        $id=$request->id;
        if(isset($id))
        {
            $data= DB::select("select * from quanhuyen where ID_QuanHuyen = ?", [$id]);
        }
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-quan-huyen",
        "data"=>isset($data)?$data[0]:'',
        "chucnang"=>$request->chucnang]);
        return $var;
    }
    public function addQuanHuyen(Request $request){
        //var_dump($request->all());
        switch ($request->chucnang) {
            case 'update':
                {
                    DB::update('update quanhuyen set TenQuanHuyen=?,ID_TinhThanhPho=?,TrangThai=?,TenQuanHuyenKhongDau=? where ID_QuanHuyen=?', 
                    [$request->txtquanhuyen ,$request->txtthanhpho, $request->txttrangthai,$request->txttenkhongdau,$request->id]);
                }
                break;
                case 'them':
                {
                    DB::insert('insert into quanhuyen values (?,?,?,?,?,?,?)', 
                    [null,$request->txtquanhuyen,$request->txtthanhpho, $request->txttrangthai,$request->txttenkhongdau,"2019-08-28 00:00:00","2019-08-28 00:00:00"]);
                }
                break;
            }
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-quan-huyen",
        "chucnang"=>$request->chucnang]);
        return $var;
    }
    public function getQuanHuyen(Request $request){
        //var_dump($request->all());
        $quanhuyen =DB::select('select * from quanhuyen where TrangThai = ?', [1]);
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-quan-huyen",
        "quanhuyen"=>$quanhuyen]);
        return $var;
    }
    // tỉnh thành phố
    public function deleteTinhThanhPho(Request $request){
        $id = $request->id;
        if(isset($id)){
            $data= DB::delete("delete from tinhthanhpho where ID_TinhThanhPho= ?", [$id]);
        }
        
        $tinhthanhpho =DB::select('select * from tinhthanhpho where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-tinh-thanh-pho",
        //"data"=>isset($data)?$data[0]:'',
        "chucnang"=>$request->chucnang,
        "tinhthanhpho"=>$tinhthanhpho]);
        return $var;
    }
    public function adminTinhThanhPho(Request $request){
        //var_dump($request->all());
        $id= $request->id;
        if(isset($id))
        {
            $data=DB::select('select * from tinhthanhpho where ID_TinhThanhPho =?', [$id]);
        }
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-tinh-thanh-pho",
        "data"=>isset($data)?$data[0]:'',
        "chucnang"=>$request->chucnang]);
        return $var;
    }
    public function addTinhThanhPho(Request $request){
        //var_dump($request->all());
        switch ($request->chucnang) {
            case 'update':
                {
                    DB::update('update tinhthanhpho set TenTinhThanhPho=?,TrangThai=?,TenKhongDauTinhThanhPho=?,KhuVuc=? where ID_TinhThanhPho=?', 
                    [$request->txttinhthanh ,$request->txttrangthai, $request->txtthanhpho,$request->txtkhuvuc,$request->id]);
                }
                break;  
                case 'them':
                {
                    DB::insert('insert into tinhthanhpho values (?,?,?,?,?,?,?)', 
                    [null,$request->txttinhthanh,$request->txttrangthai, $request->txtthanhpho,"2019-08-28 00:00:00","2019-08-28 00:00:00",$request->txtkhuvuc]);
                }
                break;
            }
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-tinh-thanh-pho",
        "chucnang"=>$request->chucnang]);
        return $var;
    }
    public function getTinhThanhPho(Request $request){
        //var_dump($request->all());
        $tinhthanhpho =DB::select('select * from tinhthanhpho where TrangThai = ?', [1]);
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-tinh-thanh-pho",
        "tinhthanhpho"=>$tinhthanhpho]);
        return $var;
    }
    // tin tuc
    public function deleteTinTuc(Request $request){
        $id = $request->id;
        if(isset($id)){
            $data= DB::delete("delete from tintuc where ID_TinTuc= ?", [$id]);
        }
        
        $tintuc =DB::select('select * from tintuc where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-tin-tuc",
        //"data"=>isset($data)?$data[0]:'',
        "chucnang"=>$request->chucnang,
        "tintuc"=>$tintuc]);
        return $var;
    }
    public function adminTinTuc(Request $request){
        //var_dump($request->all());
        // lấy dữ liệu đổ lên
        $id =$request->id;
        if(isset($id))
        {
            $data= DB::select("select * from tintuc where ID_TinTuc =?",[$id]);
        }
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-tin-tuc",
        "data"=>isset($data)?$data[0]:'',
        "chucnang"=>$request->chucnang]);
        return $var;
    }
    public function addTinTuc(Request $request){
        //var_dump($request->all());
        switch ($request->chucnang) {
            case 'update':
                {
                    DB::update('update tintuc set TenTinTuc=?,NoiDungTomTatTinTuc=?,HinhAnhTinTuc=?,NgayDangTinTuc=?,ID_LoaiTinTuc=?, TrangThai=?, NoiDungChiTietTinTuc=? where ID_TinTuc=?', 
                    [$request->txttintuc ,$request->txtnoidungtomtat, $request->txthinhanh,$request->txxtngay,1,1,$request->txtnoidungchitiet,$request->id]);
                }
                break;
                case 'them':
                {
                    DB::insert('insert into tintuc values (?,?,?,?,?,?,?,?,?,?)', 
                [null,$request->txttintuc ,$request->txtnoidungtomtat, $request->txthinhanh,$request->txxtngay,1,1,$request->txtnoidungchitiet,"2019-08-28 00:00:00","2019-08-28 00:00:00"]);
                }
                break;
            }
            $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-tin-tuc",
        "chucnang"=>$request->chucnang]);
        return $var;
    }
    public function getTinTuc(Request $request){
        // var_dump($request->all());
        $tintuc =DB::select('select * from tintuc where TrangThai = ?', [1]);
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-tin-tuc",
        "tintuc"=>$tintuc]);
        return $var;
    }
    // Nhà môi giới
    public function deleteNhaMoiGioi (Request $request)
    {
        $id = $request->id;
        if(isset($id))
        {
            $data= DB::delete("delete from nhamoigioi where ID_MoiGioi = ?", [$id]);
        }
        $nhamoigioi= DB::select('select * from nhamoigioi where TrangThai = ?', [1]);
        $var = \View::make ('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-nha-moi-gioi",
            "chucnang"=>$request->chucnang,
            "nhamoigioi"=>$nhamoigioi]);
        return $var;
    }
    public function adminNhaMoiGioi(Request $request){
        $id= $request->id;
        if(isset($id))
        {
            $data = DB::select('select * from nhamoigioi where ID_MoiGioi = ?', [$id]);
        }
        $var = \View::make('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-nha-moi-gioi",
            "data"=>isset($data)?$data[0]:'',
            "chucnang"=>$request->chucnang]);
            return $var;
    }
    public function addNhaMoiGioi (Request $request){
        var_dump($request->all());
        switch ($request->chucnang) {
            case 'update':
                {
                    DB::update('update nhamoigioi set TenNhaMoiGioi=?,SoDienThoai=?,DiaChi=?,NoiDungTomTat=?,NoiDungChiTiet=?,AnhDaiDien=?,TrangThai=? where ID_MoiGioi=?', 
                    [$request->txtname,$request->txtphone, $request->txtaddress, $request->txtcontent,$request->txtnoidungchitiet,$request->txtavatar,$request->txtstatus,$request->id]);
                }
                break;
            case 'them':
                {
                    DB::insert('insert into nhamoigioi values (?,?,?,?,?,?,?,?,?,?)',
                    [null,$request->txtname,$request->txtphone, $request->txtaddress, $request->txtcontent,$request->txtnoidungchitiet,$request->txtavatar,$request->txtstatus,"2019-08-28 00:00:00","2019-08-28 00:00:00" ]);
                }
                break;
        }
            $var= \View::make('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-nha-moi-gioi",
            "chucnang"=>$request->chucnang]);
            return $var;
    }
    public function getNhaMoiGioi (Request $request){
        $nhamoigioi= DB::select('select * from nhamoigioi where TrangThai = ?', [1]);
        $var=\View::make('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-nha-moi-gioi",
            "nhamoigioi"=>$nhamoigioi]);
            return $var;
    }
        // quản lý kinh nghiệm
        public function deleteKinhNghiem (Request $request){
            $id= $request->id;
            if(isset($id))
            {
            $data= DB::delete("delete from kinhnghiem where ID_KinhNghiem = ?", [$id]);
            }
        $kinhnghiem= DB::select('select * from kinhnghiem where TrangThai = ?', [1]);
        $var = \View::make ('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-kinh-nghiem",
            "chucnang"=>$request->chucnang,
            "kinhnghiem"=>$kinhnghiem]);
        return $var;

        }
    public function adminKinhNghiem(Request $request){
        $id= $request->id;
        if(isset($id))
        {
            $data = DB::select('select * from kinhnghiem where ID_KinhNghiem = ?', [$id]);
        }
        $var = \View::make('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-kinh-nghiem",
            "data"=>isset($data)?$data[0]:'',
            "chucnang"=>$request->chucnang]);
            return $var;
    }
    public function addKinhNghiem (Request $request){
        switch ($request->chucnang) {
            case 'update':
                {
                    DB::update('update kinhnghiem set TieuDe=?, NoiDungTomTat=?, NoiDungChiTiet=?, HinhAnh=?, TrangThai=? where ID_KinhNghiem = ?',
                    [$request->txttieude,$request->txtnoidungtomtat,$request->txtnoidungchitiet, $request->txthinhanh,$request->txttrangthai,$request->id]);
                }
                break;
            case 'them':
                {
                    DB::insert('insert into kinhnghiem  values (?, ?,?,?,?,?,?,?)',
                    [null,$request->txttieude,$request->txtnoidungtomtat,$request->txtnoidungchitiet, $request->txthinhanh,$request->txttrangthai,"2019-08-28 00:00:00","2019-08-28 00:00:00"]);
                }
                break;
    }
    $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-kinh-nghiem",
        "chucnang"=>$request->chucnang]);
        return $var;
}
    public function getKinhNghiem (Request $request){
        $kinhnghiem = DB::select('select * from kinhnghiem where TrangThai = ?', [1]);
        // var_dump($kinhnghiem);
        $var=\View::make('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-kinh-nghiem",
            "kinhnghiem"=>$kinhnghiem]);
            return $var;
    }
    // Mẫu nhà đẹp
    public function deleteMauNhaDep(Request $request){
        $id= $request->id;
            if(isset($id))
            {
            $data= DB::delete("delete from maunhadep where ID_MauNhaDep = ?", [$id]);
            }
        $maunhadep= DB::select('select * from maunhadep where TrangThai = ?', [1]);
        $var = \View::make ('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-mau-nha-dep",
            "chucnang"=>$request->chucnang,
            "maunhadep"=>$maunhadep]);
        return $var;
    }
    public function adminMauNhaDep(Request $request){
        $id= $request->id;
        if(isset($id))
        {
            $data = DB::select('select * from maunhadep where ID_MauNhaDep = ?', [$id]);
        }
        $var = \View::make('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-mau-nha-dep",
            "data"=>isset($data)?$data[0]:'',
            "chucnang"=>$request->chucnang]);
            return $var;
    }
    public function addMauNhaDep(Request $request){
        switch ($request->chucnang) {
            case 'update':
                {
                    DB::update('update maunhadep set TieuDe=?, NoiDungTomTat=?, NoiDungChiTiet=?, HinhAnh=?, TrangThai=? where ID_MauNhaDep = ?',
                    [$request->txttieude,$request->txtnoidungtomtat,$request->txtnoidungchitiet, $request->txthinhanh,$request->txttrangthai,$request->id]);
                }
                break;
            case 'them':
                {
                    DB::insert('insert into maunhadep  values (?, ?,?,?,?,?,?,?)',
                    [null,$request->txttieude,$request->txtnoidungtomtat,$request->txtnoidungchitiet, $request->txthinhanh,$request->txttrangthai,"2019-08-28 00:00:00","2019-08-28 00:00:00"]);
                }
                break;
        }
        $var= \View::make('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-mau-nha-dep",
            "chucnang"=>$request->chucnang]);
            return $var;
    }
    public function getMauNhaDep (Request $request){
        $maunhadep= DB::select('select * from maunhadep where TrangThai = ?', [1]);
        $var=\View::make('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-mau-nha-dep",
            "maunhadep"=>$maunhadep]);
            return $var;
    }
    // Quản lý người dùng
    public function deleteNguoiDung (Request $request){
        $id = $request->id;
        if(isset($id)){
            $data= DB::delete("delete from admin where ID_Admin= ?", [$id]);
        }
        
        $adminn =DB::select('select * from admin where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-nguoi-dung",
        "chucnang"=>$request->chucnang,
        "adminn"=>$adminn]);
        return $var;
    }
    public function adminNguoiDung(Request $request){
        $adminn= DB::select('select * from admin where TrangThai = ?', [1]);
        $var= \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-nguoi-dung",
        "request"=>$request,
        "adminn"=>$adminn]);
        return $var;
    }
    // Liên hệ 
    public function deletelienhegopy(Request $request){
        //var_dump($request->all());
        $id = $request->id;
        if(isset($id)){
            $data= DB::delete("delete from lienhe where ID_LienHe= ?", [$id]);
        }
        
        $lienhe =DB::select('select * from lienhe where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-lien-he",
        "chucnang"=>$request->chucnang,
        "lienhe"=>$lienhe]);
        return $var;
    }
    public function addlienhegopy(Request $request){
        //var_dump($request->all());
        $lienhe= DB::select('select * from lienhe where TrangThai = ?', [1]);
        $var=\View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-lien-he",
        "request"=>$request,
        "lienhe"=>$lienhe]);
            return $var;
    }
    // Khuyễn mãi
    public function deleteKhuyenMai(Request $request){
        $id= $request->id;
            if(isset($id))
            {
            $data= DB::delete("delete from khuyenmai where ID_KhuyenMai = ?", [$id]);
            }
        $khuyenmai= DB::select('select * from khuyenmai where TrangThai = ?', [1]);
        $var = \View::make ('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-khuyen-mai",
            "chucnang"=>$request->chucnang,
            "khuyenmai"=>$khuyenmai]);
        return $var;
    }
    public function adminKhuyenMai(Request $request){
        $id= $request->id;
        if(isset($id))
        {
            $data = DB::select('select * from khuyenmai where ID_KhuyenMai = ?', [$id]);
        }
        $var = \View::make('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-khuyen-mai",
            "data"=>isset($data)?$data[0]:'',
            "chucnang"=>$request->chucnang]);
            return $var;
    }
    public function addKhuyenMai(Request $request){
        switch ($request->chucnang) {
            case 'update':
                {
                    DB::update('update khuyenmai set TieuDe1=?, HinhAnh1=?, TieuDe2=?, HinhA2=?,TieuDe3=?, HinhAnh3=?, TieuDe4=?, HinhAnh4=?, TieuDe5=?, TrangThai=? where ID_KhuyenMai = ?',
                    [$request->txttieude1,$request->txthinhanh1,$request->txttieude2, $request->txthinhanh2,$request->txttieude3,$request->txthinhanh3,$request->txttieude4, $request->txthinhanh4, $request->txttieude5,$request->txttrangthai,$request->id]);
                }
                break;
            case 'them':
                {
                    DB::insert('insert into khuyenmai  values (?,?,?,?,?,?,?,?,?,?,?)',
                    [null,$request->txttieude1,$request->txthinhanh1,$request->txttieude2, $request->txthinhanh2,$request->txttieude3,$request->txthinhanh3,$request->txttieude4, $request->txthinhanh4, $request->txttieude5,$request->txttrangthai]);
                }
                break;
        }
        $var= \View::make('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-khuyen-mai",
            "chucnang"=>$request->chucnang]);
            return $var;
    }
    public function getkhuyenmai (Request $request){
        $khuyenmai= DB::select('select * from khuyenmai where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[ 
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-khuyen-mai",
            "chucnang"=>$request->chucnang,
            "khuyenmai"=>$khuyenmai]);
            return $var;
    }
    // Quản lý người đăng tin 
    // public function dangtinlen (Request $request)
    // {

    // }
    public function deletedangtin (Request $request){
        $id = $request->id;
        if(isset($id)){
            $data= DB::delete("delete from dangtin where ID_DangTin= ?", [$id]);
        }
        
        $dangtin =DB::select('select * from dangtin where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-dang-tin",
        "chucnang"=>$request->chucnang,
        "dangtin"=>$dangtin]);
        return $var;
    }
    public function dangtinnhadat (Request $request){
        $dangtin = DB::select('select * from dangtin where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-dang-tin",
        "request"=>$request,
        "dangtin"=>$dangtin]);
        return $var;
    }
    // quản lý tiền đăng tin trong ngày getDangTinNgay deleteDangTinNgay
    public function ngayDangTinNgay(Request $request){
        //lấy các sản phẩm bán trong 1 ngày
        foreach(DB::select("select distinct(NgayDangTin)as ngay from dangtin") as $ngay)
        {
            $tiendangtin[$ngay->ngay]= DB::select ("select ID_DangTin, NgayDangTin, DienTich, sum(Tong) as Tong  from dangtin where NgayDangTin =?",[$ngay->ngay])[0];
        }
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-tien-dang-tin",
        "chucnang"=>$request->chucnang,
        "tiendangtin"=>$tiendangtin]);
        return $var;
    }
    public function postDangTinNgay(Request $request){
        $tiendangtin= DB::select("select * from dangtin where NgayDangTin =?",[$request->ngay]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-tien-dang-tin",
        "chucnang"=>$request->chucnang,
        "tiendangtin"=>$tiendangtin]);
        return $var;
    }
    public function deleteDangTinNgay (Request $request){
        $id = $request->id;
        if(isset($id)){
            $data= DB::delete("delete from dangtin where ID_DangTin= ?", [$id]);
        }
        
        $tiendangtin =DB::select('select * from dangtin where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-tien-dang-tin",
        "chucnang"=>$request->chucnang,
        "tiendangtin"=>$tiendangtin]);
        return $var;
    }
    public function getDangTinNgay (Request $request){
        $tiendangtin = DB::select('select * from dangtin where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-tien-dang-tin",
        "request"=>$request,
        "tiendangtin"=>$tiendangtin]);
        return $var;
    }
    // thống kê doanh nghiệp
    public function ThongKeDoanhNghiep(Request $request){
        //lấy các sản phẩm bán trong 1 ngày
        foreach(DB::select("select distinct(TenDoanhNghiep)as name from danhsachdoanhnghiep") as $name)
        {
            $doanhnghiep[$name->name]= DB::select ("select  ID_DoanhNghiep,TenDoanhNghiep, SoDienThoai, sum(TongGia) as TongGia, NgayBan , TrangThai from danhsachdoanhnghiep where TenDoanhNghiep =?",[$name->name])[0];
        }
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-danh-sach-doanh-nghiep-thang",
        "chucnang"=>$request->chucnang,
        "doanhnghiep"=>$doanhnghiep]);
        return $var;
    }
    public function postThongKeDoanhNghiep(Request $request){
        $ngaythongke= DB::select("select * from danhsachdoanhnghiep where NgayBan =?",[$request->ngay]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-danh-sach-doanh-nghiep-thang",
        "chucnang"=>$request->chucnang,
        "doanhnghiep"=>$doanhnghiep]);
        return $var;
    }
    ////////////////////////////////
    public function deleteDoanhNghiep (Request $request){
        $id = $request->id;
        if(isset($id)){
            $data= DB::delete("delete from danhsachdoanhnghiep where ID_DoanhNghiep= ?", [$id]);
        }
        
        $doanhnghiep =DB::select('select * from danhsachdoanhnghiep where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-doanh-nghiep",
        "chucnang"=>$request->chucnang,
        "doanhnghiep"=>$doanhnghiep]);
        return $var;
    }
    public function adminDoanhNghiep (Request $request){
        $id= $request->id;
        if(isset($id))
        {
            $data = DB::select('select * from danhsachdoanhnghiep where ID_DoanhNghiep = ?', [$id]);
        }
        $var = \View::make('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-doanh-nghiep",
            "data"=>isset($data)?$data[0]:'',
            "chucnang"=>$request->chucnang]);
            return $var;
    }
    public function addDoanhNghiep(Request $request){
        switch ($request->chucnang) {
            case 'update':
                {
                    DB::update('update danhsachdoanhnghiep set TenDoanhNghiep=? , SoDienThoai=?,NoiBan=?, TongGia=?, TrangThai=?, NgayBan=? where ID_DoanhNghiep = ?',
                    [$request->txtdoanhnghiep,$request->txtdienthoai,$request->txtnoiban, $request->txttong,$request->txttrangthai,$request->txtngayban,$request->id]);
                }
                break;
            case 'them':
                {
                    DB::insert('insert into danhsachdoanhnghiep values (?,?,?,?,?,?,?,?,?)',
                    [null, $request->txtdoanhnghiep,$request->txtdienthoai,$request->txtnoiban, $request->txttong,$request->txttrangthai,$request->txtngayban,"2019-08-28 00:00:00","2019-08-28 00:00:00"]);
                }
            break;
        }
        $var= \View::make('modules.sub-modules.admin',[
            "linkAdmin"=>"modules.sub-modules.content.content-admin.content-doanh-nghiep",
            "chucnang"=>$request->chucnang]);
            return $var;
    }
    public function getloaddoanhnghiep (Request $request){
        $doanhnghiep = DB::select('select * from danhsachdoanhnghiep where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-doanh-nghiep",
        "request"=>$request,"doanhnghiep"=>$doanhnghiep]);
        return $var;
    }
    //Thống kê
    public function namThongKe(Request $request){
        $arTan=[];
        foreach(DB::select("select distinct(NgayBan) as ngay,YEAR(NgayBan) as nam from daban ") as $nam)
        {
            if(!in_array($nam->nam,$arTan))
            {
                array_push($arTan,$nam->nam);
                $namthongke[$nam->nam] = DB::select("select ID_DaBan, TenQuanBan, TenNguoiMua, SoDienThoai, sum(GiaBan) as GiaBan, YEAR(NgayBan) as NgayBan, TrangThai  from daban where YEAR(NgayBan) =YEAR (?)",[$nam->ngay])[0];
            }
        }
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-danh-sach-nam",
        "chucnang"=>$request->chucnang,
        "thongke"=>$namthongke]);
        return $var;
    }
    public function postNamThongKe(Request $request){
        $namthongke= DB::select("select * from daban where NgayBan =?",[$request->ngay]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-danh-sach-nam",
        "chucnang"=>$request->chucnang,
        "thongke"=>$namthongke]);
        return $var;
    }
    public function thangThongKe(Request $request){
        $arrTam=[];
        foreach(DB::select("select distinct(NgayBan) as ngay,MONTH(NgayBan) as thang  from daban ") as $thang)
        {
            if(!in_array($thang->thang,$arrTam))
            {
                array_push($arrTam,$thang->thang);
                $thangthongke[$thang->ngay] = DB::select("select ID_DaBan, TenQuanBan, TenNguoiMua, SoDienThoai, sum(GiaBan) as GiaBan, MONTH(NgayBan) as NgayBan, TrangThai from daban where MONTH(NgayBan) = MONTH(?)", [$thang->ngay])[0];
            }
        }
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-danh-sach-thang",
        "chucnang"=>$request->chucnang,
        "thongke"=>$thangthongke]);
        return $var;
    }
    public function postThangThongKe(Request $request){
        $thangthongke= DB::select("select * from daban where NgayBan =?",[$request->ngay]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-danh-sach-thang",
        "chucnang"=>$request->chucnang,
        "thongke"=>$thangthongke]);
        return $var;
    }
    public function ngayThongKe(Request $request){
        //lấy các sản phẩm bán trong 1 ngày
        foreach(DB::select("select distinct(NgayBan)as ngay from daban") as $ngay)
        {
            $ngaythongke[$ngay->ngay]= DB::select ("select ID_DaBan, TenQuanBan, TenNguoiMua, SoDienThoai, sum(GiaBan) as GiaBan, NgayBan, TrangThai  from daban where NgayBan =?",[$ngay->ngay])[0];
        }
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-danh-sach-ngay",
        "chucnang"=>$request->chucnang,
        "thongke"=>$ngaythongke]);
        return $var;
    }
    public function postNgayThongKe(Request $request){
        $ngaythongke= DB::select("select * from daban where NgayBan =?",[$request->ngay]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-danh-sach-ngay",
        "chucnang"=>$request->chucnang,
        "thongke"=>$ngaythongke]);
        return $var;
    }
    public function deleteThongKe(Request $request){
        $id = $request->id;
        if(isset($id)){
            $data= DB::delete("delete from daban where ID_DaBan= ?", [$id]);
        }
        
        $thongke =DB::select('select * from daban where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-dat-da-ban",
        //"data"=>isset($data)?$data[0]:'',
        "chucnang"=>$request->chucnang,
        "thongke"=>$thongke]);
        return $var;
    }
    public function adminThongKe(Request $request){
        $id= $request->id;
        if(isset($id)){
            $data = DB::select('select * from daban where ID_DaBan = ?', [$id]);
        }
        $var= \View::make('modules.sub-modules.admin',[
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-danh-sach-dat-da-ban",
        "data"=>isset($data)?$data[0]:'',
        "chucnang"=>$request->chucnang]);
        return $var;
    }
    public function addThongKe(Request $request){
        //var_dump($request->all());
        switch ($request->chucnang) {
            case 'update':
            {
                DB::update('update daban set TenQuanBan=?,TenNguoiMua=?,SoDienThoai=?,GiaBan=?,NgayBan=?,TrangThai=? where ID_DaBan = ?', 
                [$request->txtquanhuyen,$request->txtnguoimua,$request->txtsdt,$request->txtgiaban,$request->txxtngay,$request->txttrangthai,$request->id]);
            }
            break;
            case 'them':
            {
                DB::insert('insert into daban values (?,?,?,?,?,?,?,?,?)',
                    [null,$request->txtquanhuyen,$request->txtnguoimua,$request->txtsdt,$request->txtgiaban,$request->txxtngay,$request->txttrangthai,"2019-08-28 00:00:00","2019-08-28 00:00:00"]);
            }
                break;
        }
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-danh-sach-dat-da-ban",
        "chucnang"=>$request->chucnang]);
        return $var;
    }
    public function getThongKe(Request $request){
        //var_dump($request->all());
        $thongke =DB::select('select * from daban where TrangThai = ?', [1]);
        $var = \View::make('modules.sub-modules.admin',[ 
        "linkAdmin"=>"modules.sub-modules.content.content-admin.content-list-dat-da-ban",
        "thongke"=>$thongke]);
        return $var;
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