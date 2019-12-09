<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<script>
        function MyFunction(){
            alert("Bạn có muốn đăng xuất không !!!")
        }
        </script>
<body class="master-admin">
    <div class="content">
        <div class="content-top" style="border-bottom: 1px solid #e5e8eb;background: #2f3c4c;">
            <div class="row justify-md-left">
                <div class="col col-lg-10">
                    <div class="row">
                        <div class="col-2 col-lg-2"><a href="#"><img width="100%" height="100px"
                                    src="assets/images/graphs.png" /></a>
                        </div>
                        <div class="col-9 col-lg-9 mt-5" style="font-size: 16px;font-weight: bold"><a
                                style="text-decoration: none;color:white" href="#">ALONHADAT</a></div>
                    </div>
                </div>
                <div class="col col-lg-2">
                    <div class="row">
                        <div class="col-4 col-lg-4 mt-4" style="color:white"><i class="icon-bell-alt"></i></div>
                        <div class="col-4 col-lg-4 mt-4" style="color:white"><i class="icon-user"></i></div>
                        <div class="col-4 col-lg-4 mt-4" style="color:white"><a onclick="MyFunction()" style="text-decoration: none"href="{{url('logout')}}">Đăng xuất</a></div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="box-content">
            <div class="row">
                <div class="col-2"
                    style="background-color: #2f3c4c; padding: .5rem .5rem;box-shadow: 0 1px 10px 1px rgba(115, 108, 203, .1);top:0px">
                    <div class="nav-link nav-link-collapse collapsed" data-toggle="collapse">
                        <span class="nav-link-text">
                            <i class="icon-search"></i>
                            <input style="border: 1px solid white; height: 30px;" class="w-100" type="text"
                                class="search-form" placeholder="Search Report">
                        </span>
                    </div>
                    <div class="content-left">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#dashboard"
                            aria-expanded="false" href="#">
                            <i class="vl_dashboard"></i>
                            <span class="nav-link-text">Tài khoản</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="dashboard" data-parent="#accordion" style="">
                            <li class="active"> <a href="{{ url('add-tai-khoan?chucnang=them') }}">Thêm tài khoản</a></li>
                            <li class="active"> <a href="{{ url('load-danh-sach') }}">Danh sach tài khoản</a></li>
                        </ul>
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#duan"
                            aria-expanded="false" href="#">
                            <i class="vl_dashboard"></i>
                            <span class="nav-link-text">Dự án</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="duan" data-parent="#accordion" style="">
                            <li class="active"> <a href="{{ url('admin-du-an?chucnang=them') }}">Thêm dự án</a></li>
                            <li class="active"> <a href="{{ url('load-du-an') }}">Danh sách</a></li>
                        </ul>
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#loaisanpham"
                            aria-expanded="false" href="#">
                            <i class="vl_dashboard"></i>
                            <span class="nav-link-text">Loại sản phẩm</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="loaisanpham" data-parent="#accordion" style="">
                            <li class="active"> <a href="{{ url('admin-loai-san-pham?chucnang=them') }}">Thêm loại sản phâm</a></li>
                            <li class="active"> <a href="{{ url('load-loai-san-pham') }}">Danh sách</a></li>
                        </ul>
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#quanhuyen"
                            aria-expanded="false" href="#">
                            <i class="vl_dashboard"></i>
                            <span class="nav-link-text">Quận huyện</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="quanhuyen" data-parent="#accordion" style="">
                            <li class="active"> <a href="{{ url('admin-quan-huyen?chucnang=them') }}">Thêm quận huyện</a></li>
                            <li class="active"> <a href="{{ url('load-quan-huyen') }}">Danh sách</a></li>
                        </ul>
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#tinhthanhpho"
                            aria-expanded="false" href="#">
                            <i class="vl_dashboard"></i>
                            <span class="nav-link-text">Tỉnh Thành Phố</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="tinhthanhpho" data-parent="#accordion" style="">
                            <li class="active"> <a href="{{ url('admin-tinh-thanh-pho?chucnang=them') }}">Thêm tỉnh thành phố</a></li>
                            <li class="active"> <a href="{{ url('load-tinh-thanh-pho') }}">Danh sách</a></li>
                        </ul>
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#tintuc"
                            aria-expanded="false" href="#">
                            <i class="vl_dashboard"></i>
                            <span class="nav-link-text">Tin tức</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="tintuc" data-parent="#accordion" style="">
                            <li class="active"> <a href="{{ url('admin-tin-tuc?chucnang=them') }}">Thêm tin tức</a></li>
                            <li class="active"> <a href="{{ url('load-tin-tuc') }}">Danh sách</a></li>
                        </ul>
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#nhamoigioi"
                            aria-expanded="false" href="#">
                            <i class="vl_dashboard"></i>
                            <span class="nav-link-text">Nhà môi giới</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="nhamoigioi" data-parent="#accordion" style="">
                            <li class="active"> <a href="{{ url('admin-nha-moi-gioi?chucnang=them') }}">Thêm nhà môi giới</a></li>
                            <li class="active"> <a href="{{ url('load-nha-moi-gioi') }}">D/s nhà môi giới</a></li>
                        </ul>
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#kinhnghiem"
                            aria-expanded="false" href="#">
                            <i class="vl_dashboard"></i>
                            <span class="nav-link-text">Kinh nghiệm</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="kinhnghiem" data-parent="#accordion" style="">
                            <li class="active"> <a href="{{ url('admin-kinh-nghiem?chucnang=them') }}">Thêm kinh nghiệm</a></li>
                            <li class="active"> <a href="{{ url('load-kinh-nghiem') }}">D/s kinh nghiệm</a></li>
                        </ul>
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#maunhadep"
                            aria-expanded="false" href="#">
                            <i class="vl_dashboard"></i>
                            <span class="nav-link-text">Mẫu nhà đẹp</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="maunhadep" data-parent="#accordion" style="">
                            <li class="active"> <a href="{{ url('admin-mau-nha-dep?chucnang=them') }}">Thêm mẫu nhà đẹp</a></li>
                            <li class="active"> <a href="{{ url('load-mau-nha-dep') }}">D/s mẫu nhà đẹp</a></li>
                        </ul>
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#khuyenmai"
                            aria-expanded="false" href="#">
                            <i class="vl_dashboard"></i>
                            <span class="nav-link-text">Khuyến mãi</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="khuyenmai" data-parent="#accordion" style="">
                            <li class="active"> <a href="{{ url('add-khuyen-mai?chucnang=them') }}">Thêm khuyến mãi</a></li>
                            <li class="active"> <a href="{{ url('admin-khuyen-mai') }}">D/s khuyến mãi</a></li>
                        </ul>
                        <div>
                            <a class="nav-link nav-link-collapse collapsed" href="{{ url('dang-tin') }}">
                                <span class="nav-link-text">Quản lý người đăng tin</span>
                            </a>
                        </div>
                        <div>
                            <a class="nav-link nav-link-collapse collapsed" href="{{ url('admin-nguoi-dung') }}">
                                <span class="nav-link-text">Quản lý người dùng</span>
                            </a>
                        </div>
                        <div>
                                <a class="nav-link nav-link-collapse collapsed" href="{{ url('lien-he-gop-y') }}">
                                    <span class="nav-link-text">Quản lý liên hệ</span>
                                </a>
                        </div>
                        <div>
                            <a class="nav-link nav-link-collapse collapsed" href="{{ url('load-tien-dang-tin-ngay') }}">
                                <span class="nav-link-text">Quản lý tiền đăng tin trong ngày</span>
                            </a>
                            <li> <a href="{{ url('ngay-tien-dang-tin-ngay') }}">Theo ngày</a></li>
                        </div>
                        <div>
                        {{-- Quản lý doanh nghiệp --}}
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#doanhsodanhnghiep"
                                aria-expanded="false" href="#">
                                <i class="vl_dashboard"></i>
                                <span class="nav-link-text">Quản lý thống kê d/s doanh nghiệp</span>
                            </a>
                            <ul class="sidenav-second-level collapse" id="doanhsodanhnghiep" data-parent="#accordion" style="">
                                <li class="active"> <a href="{{ url('admin-doanh-nghiep?chucnang=them') }}">Thêm d/s đất đã bán</a></li>
                                <li class="active"> <a href="{{ url('load-doanh-nghiep') }}">D/s đất mà doanh nghiệp đã bán</a></li>
                                <li class="active"> <a href="{{ url('thong-ke-doanh-nghiep') }}">Thông kê doanh số</a></li>
                        </ul>
                        {{-- Thống kê --}}
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#dashboardd"
                            aria-expanded="false" href="#">
                                <i class="vl_dashboard"></i>
                                <span class="nav-link-text">Thống kê số lượng</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="dashboardd" data-parent="#accordion" style="">
                            <li class="active"> <a href="{{ url('admin-thong-ke?chucnang=them') }}">Nhập nơi đã bán</a></li>
                            <li class="active"> <a href="{{ url('load-thong-ke') }}">Danh sach</a></li>
                            <li> <a href="{{ url('ngay-thong-ke') }}">Theo ngày</a></li>
                            <li> <a href="{{ url('thang-thong-ke') }}">Theo tháng</a></li>
                            <li> <a href="{{ url('nam-thong-ke') }}">Theo năm</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-lg-10">
                    @section('content-abmin')

                    @show
                </div>
            </div>
        </div>
    </div>
</body>

</html>