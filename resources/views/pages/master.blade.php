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
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
</head>

<body>
    <!-- Header -->

<div class="row">
    <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block col-lg-1 col-xl-1">
        @section('quang-cao-trai')
        @show
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <header>
                <!-- header top -->
                {{-- thông tin liên hệ trên đầu --}}
                @section('top-info')   
                @show
                {{-- thông tin liên hệ trên đầu --}}
                <!-- end header top -->

                <!-- logo and video introduce -->
                <div class="row">
                    <!-- logo -->
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        {{-- logo --}}
                            @yield('logo')
                        {{-- logo --}}
                    </div>
                    <!-- logo -->
                    <!-- video introduce -->
                    <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                        {{-- video gioi thieu --}}
                            @section('video-gioi-thieu')
                            
                            @show
                        {{-- video gioi thieu --}}
                    </div>
                    <!-- video introduce -->
                </div>
                <!-- end logo and video introduce -->
                <!-- tien ich dang nhap dang ki -->
                        @section('menu-top')   
                        @show
                <!-- tien ich dang nhap dang ki -->
                <!-- menu -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        {{-- menu chinh --}}
                            @section('main-menu')
                            @show
                        {{-- menu chinh --}}
                    </div>
                </div>
                <!-- menu -->
            </header>
            <!-- End Header -->

            <!-- Content -->
            <section>
                <!-- tim kiem va gioi thieu -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        {{-- khung tim kiem --}}
                            @section('form-search') 
                            @show
                        {{-- khung tim kiem --}}
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        {{-- khung kinh nghiem --}}
                        @section('kinh-nghiem')
                        @show
                        {{-- khung kinh nghiem --}}
                    </div>
                </div>
                <!-- tim kiem va gioi thieu -->

                <!-- du an noi bat va tin tuc -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                         {{-- bất động sản nổi bật --}}
                         @section('bat-dong-san-noi-bat')
                            
                         @show
                         {{-- bất động sản nổi bật --}}
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                       {{-- news right --}}
                       @section('news-right')
                            
                       @show
                       {{-- news right --}}

                       {{-- liên kêt bất động sản --}}
                       @section('quick-link-right')
                            
                       @show
                        {{-- liên kêt bất động sản --}}
                    </div>

                </div>
                <!-- du an noi bat va tin tuc -->
                <!-- Tinh thanh pho lien quan -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        {{-- Nhà đất theo tỉnh thành phố --}}
                       @section('nha-dat-theo-tinh-thanh-pho')
                            
                       @show
                        {{-- Nhà đất theo tỉnh thành phố--}}
                    </div>
                </div>
                <!--Tinh thanh pho lien quan -->
            </section>
            <!-- End Content -->
            <!-- Footer -->
            <footer>
               @section('footer')
               @show
            </footer>
            <!-- End Footer -->
    </div>
    <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block col-lg-1 col-xl-1">
            @section('quang-cao-phai')
            @show
    </div>
</div>
</body>

</html>