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
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css" />
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
                    @section('header-master') 
                    @show
            </header>
            <!-- End Header -->

            <!-- Content -->
            <section>
                    @section('content-master') 
                    @show
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