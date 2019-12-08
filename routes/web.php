<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', "HomeController@home");


Route::get('/nha-moi-gioi',"NhaMoiGioiController@nhamoigioi" );

Route::get('/kinh-nghiem',"KinhNghiemController@kinhnghiem" );
Route::get('/mau-nha-dep',"MauNhaDepController@maunhadep" );
Route::get('/noi-dung-nguoi-dung',"NoiDungNguoiDungController@noidungnguoidung" );
// liên hệ
Route::get('/lienhe-gopy',"LienHeGopYController@lienhegopy" );
Route::post('/lienhe-gopy',"LienHeGopYController@sendlienhegopy" );

Route::get('/lien-he-gop-y',"AdminController@addlienhegopy" );
Route::get('/delete-lien-he-gop-y',"AdminController@deletelienhegopy" );

Route::get('/nha-dat-ban',"NhaDatBanController@nhadatban" );
Route::get('/nha-dat-cho-thue',"NhaDatChoThueController@nhadatchothue" );
Route::get('/du-an',"DuAnController@duan" );
// đăng tin nhà đất
Route::get('/dang-tin-nha-dat',"DangTinNhaDatController@getdangtinnhadat" );
Route::post('/dang-tin-nha-dat',"DangTinNhaDatController@postdangtinnhadat");

// admin người đăng tin
Route::get('/dang-tin',"AdminController@dangtinnhadat" );
Route::get('/delete-dang-tin',"AdminController@deletedangtin" );
Route::get('/dang-tin-len',"AdminController@dangtinlen" );
//end đăng tin nhà đất
Route::get('/khuyen-mai',"KhuyenMaiController@khuyenmai" );
// đăng ký
Route::get('/dang-ky-thanh-vien',"DangKyThanhVienController@getdangkythanhvien" );
Route::post('/dang-ky-thanh-vien',"DangKyThanhVienController@postdangkythanhvien");

// đăng nhập
Route::get('/dang-nhap',"DangNhapThanhVienController@getdangnhapthanhvien");
Route::post('/dang-nhap',"DangNhapThanhVienController@postdangnhapthanhvien");

// đăng nhập admin from đăng nhập
// Route::get('/admin',"AdminDangNhapController@admindangnhap");

// đăng xuất
Route::get('/logout',"DangXuatController@getLogout");
// chi tiết nhà môi giới
Route::get('/noi-dung-chi-tiet/{id}',"NoiDungChiTietController@getnoidungchitiet");
// chi tiết kinh nghiệm
Route::get('/kinh-nghiem-chi-tiet/{id}',"KinhNghiemChiTietController@getkinhnghiemchitiet");
// chi tiết mẫu nhà đẹp
Route::get('/mau-nha-dep-chi-tiet/{id}',"MauNhaDepChiTietController@getmaunhadepchitiet");
// chi tiết nhà đất bán
Route::get('/nha-dat-ban-chi-tiet/{id}',"NhaDatBanChiTietController@getnhadatbanchitiet");
// tìm kiếm
Route::post('/tim-kiem',"TimKiemController@getTimKiem");


// admin người dùng
Route::get('/admin-nguoi-dung',"AdminController@adminNguoiDung" );
Route::get('/delete-nguoi-dung',"AdminController@deleteNguoiDung" );
// Khuyễn mãi
Route::get('/add-khuyen-mai',"AdminController@adminKhuyenMai" );
Route::post('/add-khuyen-mai',"AdminController@addKhuyenMai" );
Route::get('/admin-khuyen-mai',"AdminController@getkhuyenmai");
Route::get('/delete-khuyen-mai',"AdminController@deleteKhuyenMai" );
/*tài khoản */
Route::get('/add-tai-khoan',"AdminController@adminContent" );
Route::post('/add-tai-khoan',"AdminController@addTaiKhoan" );
Route::get('/load-danh-sach',"AdminController@getDanhSach" );
Route::get('/delete-danh-sach',"AdminController@deleteDanhSach" );

// du án
Route::get('/admin-du-an',"AdminController@adminDuAn" );
Route::post('/admin-du-an',"AdminController@addDuAn" );
Route::get('/load-du-an',"AdminController@getDuAn" );
Route::get('/delete-du-an',"AdminController@deleteDuAn" );
// sản phẩm
Route::get('/admin-loai-san-pham',"AdminController@adminLoaiSanPham" );
Route::post('/admin-loai-san-pham',"AdminController@addLoaiSanPham" );
Route::get('/load-loai-san-pham',"AdminController@getLoaiSanPham" );
Route::get('/delete-loai-san-pham',"AdminController@deleteLoaiSanPham" );
// quận huyện
Route::get('/admin-quan-huyen',"AdminController@adminQuanHuyen" );
Route::post('/admin-quan-huyen',"AdminController@addQuanHuyen" );
Route::get('/load-quan-huyen',"AdminController@getQuanHuyen" );
Route::get('/delete-quan-huyen',"AdminController@deleteQuanHuyen");
// tinh thanhpho
Route::get('/admin-tinh-thanh-pho',"AdminController@adminTinhThanhPho" );
Route::post('/admin-tinh-thanh-pho',"AdminController@addTinhThanhPho" );
Route::get('/load-tinh-thanh-pho',"AdminController@getTinhThanhPho" );
Route::get('/delete-tinh-thanh-pho',"AdminController@deleteTinhThanhPho");
//tintuc
Route::get('/admin-tin-tuc',"AdminController@adminTinTuc" );
Route::post('/admin-tin-tuc',"AdminController@addTinTuc" );
Route::get('/load-tin-tuc',"AdminController@getTinTuc" );
Route::get('/delete-tin-tuc',"AdminController@deleteTinTuc");
//nhà môi giới
Route::get('/admin-nha-moi-gioi',"AdminController@adminNhaMoiGioi" );
Route::post('/admin-nha-moi-gioi',"AdminController@addNhaMoiGioi" );
Route::get('/load-nha-moi-gioi',"AdminController@getNhaMoiGioi" );
Route::get('/delete-nha-moi-gioi',"AdminController@deleteNhaMoiGioi");
//Kinh nghiệm
Route::get('/admin-kinh-nghiem',"AdminController@adminKinhNghiem" );
Route::post('/admin-kinh-nghiem',"AdminController@addKinhNghiem" );
Route::get('/load-kinh-nghiem',"AdminController@getKinhNghiem" );
Route::get('/delete-kinh-nghiem',"AdminController@deleteKinhNghiem");
//Mẫu nhà đẹp
Route::get('/admin-mau-nha-dep',"AdminController@adminMauNhaDep" );
Route::post('/admin-mau-nha-dep',"AdminController@addMauNhaDep" );
Route::get('/load-mau-nha-dep',"AdminController@getMauNhaDep" );
Route::get('/delete-mau-nha-dep',"AdminController@deleteMauNhaDep");
// Quản lý doannh số thống kê của doanh nghiệp
Route::get('/admin-doanh-nghiep',"AdminController@adminDoanhNghiep" );
Route::post('/admin-doanh-nghiep',"AdminController@addDoanhNghiep" );
Route::get('/load-doanh-nghiep',"AdminController@getloaddoanhnghiep");
Route::get('/delete-doanh-nghiep',"AdminController@deleteDoanhNghiep");
Route::get('/thong-ke-doanh-nghiep',"AdminController@ThongKeDoanhNghiep");
Route::post('/thong-ke-doanh-nghiep',"AdminController@postThongKeDoanhNghiep");
// Thống kê
Route::get('/admin-thong-ke',"AdminController@adminThongKe" );
Route::post('/admin-thong-ke',"AdminController@addThongKe" );
Route::get('/load-thong-ke',"AdminController@getThongKe");
Route::get('/delete-thong-ke',"AdminController@deleteThongKe");
Route::get('/ngay-thong-ke',"AdminController@ngayThongKe");
Route::post('/ngay-thong-ke',"AdminController@postNgayThongKe");
Route::get('/thang-thong-ke',"AdminController@thangThongKe");
Route::post('/thang-thong-ke',"AdminController@postThangThongKe");
Route::get('/nam-thong-ke',"AdminController@namThongKe");
Route::post('/nam-thong-ke',"AdminController@postNamThongKe");

Route::get('locale/{locale}', function($locale){
    Session::put('locale',$locale);
    return  redirect()->back();
});