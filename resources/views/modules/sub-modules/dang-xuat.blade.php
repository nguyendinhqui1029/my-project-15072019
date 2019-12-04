{{-- <div style="text-align:center;margin-left: 1000px;font-size: 14px;padding: 6px; border: 1px solid red;background-color:darksalmon">
        
</div> --}}
{{-- nnn --}}
<div class="row justify-content-end align-items-center" style="height: 40px;">
        <div class="col-3 col-sm-3 col-md-2 col-lg-2 text-center ">
            <div class="lang-box">
                <ul class="compobox-lang">
                    <li>
                        <label><img src="assets\images\viet_nam.jpg"
                                style="width: 30px; height: 20px;margin-right: 3px;">Việt Nam</label>
                        <ul class="sub-lang">
                            <li style="list-style: none;"><a href="locale/vi"><img src="assets\images\viet_nam.jpg"
                                        style="width: 30px; height: 20px;margin-right: 3px;">Việt Nam</a></li>
                            <li style="list-style: none;"><a href="locale/en"><img src="assets\images\hoa_ki.png"
                                        style="width: 30px; height: 20px;margin-right: 3px;">Hoa Kỳ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-3 col-sm-3 col-md-2 col-lg-2 text-center">
            <a class="regular-post" href="{{ url('dang-tin-nha-dat') }}">Đăng tin nhà đất</a>
        </div>
        <div class="col-3 col-sm-3 col-md-2 col-lg-2 text-center">
            {{-- <a --}}
            {{-- data-toggle="modal" --}}
            {{-- data-target="#exampleModal" --}}
            {{-- href="javascript:void(0)" --}}
        {{-- href="{{ url('dang-ky-thanh-vien') }}"
            class="register">Đăng ký thành viên</a> --}}
            <a onclick="MyFnction()" style="text-decoration: none" href="{{url('logout')}}">Đăng xuất</a>
        </div>
        <div class="col-3 col-sm-3 col-md-2 col-lg-2 text-center">
            {{-- <a  --}}
            {{-- data-toggle="modal" --}}
            {{-- data-target="#exampleModal1" 
            href="javascript:void(0)" --}}
        {{-- href="{{ url('dang-nhap')}}"
              class="login">Đăng nhập</a>
             --}}
        </div>
    
    </div>
{{-- fff --}}
<script>
    function MyFnction(){
        alert("Bạn có muốn đăng xuất không !!!")
    }
    </script>