    <div class="navbar1">
        <div class="dropdown1">
            <a href="{{ url('/') }}" class="dropbtn">HOME</a>
    </div>
        <div class="dropdown1">
          {{-- <button class="dropbtn"> --}}
              <a class="dropbtn" href="{{ url('nha-dat-ban') }}" style="font-weight: bold;">NHÀ ĐẤT BÁN</a>
            <i class="fa fa-caret-down"></i>
          {{-- </button> --}}
          <div class="dropdown1-content">   
            <div class="row">
                <div class="column flex-column d-flex bd-highlight ">
                    {{-- <div class="p-2 border-bottom bd-highlight" ><a href="{{ url('nha-dat-ban') }}"><i class="icon-home"></i> Bán nhà</a></div> --}}
                    {{-- <div class="p-2 border-bottom bd-highlight">  <a href="#"><i class="icon-home"></i> Bán nhà mặt tiền</a></div>
                    <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i>  Bán nhà trong hẻm</a></div>
                    <div class="p-2 border-bottom bd-highlight" ><a href="#"><i class="icon-home"></i> Bán biệt thự, nhà liền kề</a></div>
                    <div class="p-2 border-bottom bd-highlight">  <a href="#"><i class="icon-home"></i> Bán căn hộ chung cư</a></div>
                    <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Bán văn phòng</a></div> --}}
                  </div>
                  <div class="column flex-column d-flex bd-highlight ">
                      {{-- <div class="p-2 border-bottom bd-highlight">  <a href="#"><i class="icon-home"></i>Bán thổ cư, đất ở</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Bán nền, liền kề, đất dự án</a></div>
                      <div class="p-2 border-bottom bd-highlight">  <a href="#"><i class="icon-home"></i> Bán nông ngiệp, lâm nghiệp</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Bán trang trại</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i>Bán mặt bằng</a></div> --}}
                    </div>
                    <div class="column flex-column d-flex bd-highlight ">
                        {{-- <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Bán phòng trọ, nhà trọ</a></div>
                        <div class="p-2 border-bottom bd-highlight">  <a href="#"><i class="icon-home"></i> Bán nhà hàng, khách sạn</a></div>
                        <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Bán shop,kiot, quán</a></div>
                        <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Bán kho, xưởng</a></div>
                        <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Bán các loại BĐS khác</a></div> --}}
                      </div>
            </div>
          </div>
        </div> 

        {{-- <div class="dropdown1">
            <button class="dropbtn">NHÀ ĐẤT CHO THUÊ
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown1-content">   
              <div class="row">
                  <div class="column flex-column d-flex bd-highlight ">
                      <div class="p-2 border-bottom bd-highlight" ><a href="{{ url('nha-dat-cho-thue') }}"><i class="icon-home"></i> Cho thuê nhà</a></div>
                      <div class="p-2 border-bottom bd-highlight">  <a href="#"><i class="icon-home"></i> Cho thuê nhà mặt tiền</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i>  Cho thuê nhà trong hẻm</a></div>
                      <div class="p-2 border-bottom bd-highlight" ><a href="#"><i class="icon-home"></i> Cho thuê biệt thự, nhà liền kề</a></div>
                      <div class="p-2 border-bottom bd-highlight">  <a href="#"><i class="icon-home"></i> Cho thuê căn hộ chung cư</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Cho thuê văn phòng</a></div>
                    </div>
                    <div class="column flex-column d-flex bd-highlight ">
                      <div class="p-2 border-bottom bd-highlight">  <a href="#"><i class="icon-home"></i>Cho thuê thổ cư, đất ở</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Cho thuê nền, liền kề, đất dự án</a></div>
                      <div class="p-2 border-bottom bd-highlight">  <a href="#"><i class="icon-home"></i> Cho thuê nông ngiệp, lâm nghiệp</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Cho thuê trang trại</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Cho thuê mặt bằng</a></div>
                    </div>
                    <div class="column flex-column d-flex bd-highlight ">
                      <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Cho thuê phòng trọ, nhà trọ</a></div>
                      <div class="p-2 border-bottom bd-highlight">  <a href="#"><i class="icon-home"></i> Cho thuê nhà hàng, khách sạn</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Cho thuê shop,kiot, quán</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Cho thuê kho, xưởng</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Cho thuê các loại BĐS khác</a></div>
                    </div>
              </div>
            </div>
          </div>  --}}
          {{-- <div class="dropdown1">
              <button class="dropbtn">DỰ ÁN
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown1-content">   
                <div class="row ">
                  <div class="column flex-column d-flex bd-highlight ">
                    <div class="p-2 border-bottom bd-highlight" ><a href="#"><i class="icon-home"></i> Căn hộ/Chung cư</a></div>
                    <div class="p-2 border-bottom bd-highlight">  <a href="#"><i class="icon-home"></i> Khu biệt thự</a></div>
                    <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Nhà phố</a></div>
                    <div class="p-2 border-bottom bd-highlight" ><a href="#"><i class="icon-home"></i> Cao ốc văn phòng</a></div>
                    <div class="p-2 border-bottom bd-highlight">  <a href="#"><i class="icon-home"></i> Khu thương mại</a></div>
                    <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Khu dân cư</a></div>
                    <div class="p-2 border-bottom bd-highlight" ><a href="#"><i class="icon-home"></i> Nhà ở xã hội</a></div>
                    <div class="p-2 border-bottom bd-highlight">  <a href="#"><i class="icon-home"></i> Khu đô thị mới</a></div>
                    <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i>  Khu tái định cư</a></div>
                    <div class="p-2 border-bottom bd-highlight" ><a href="#"><i class="icon-home"></i> Khu phức hợp</a></div>
                    <div class="p-2 border-bottom bd-highlight">  <a href="#"><i class="icon-home"></i> Căn hộ dịch vụ</a></div>
                    <div class="p-2 border-bottom bd-highlight"><a href="#"><i class="icon-home"></i> Khu nghĩ dưỡng</a></div>
                  </div>
                </div>
              </div>
            </div>  --}}
            <div class="dropdown1">
                <a href="{{ url('nha-moi-gioi') }}" class="dropbtn">NHÀ MÔI GIỚI</a>
            </div>
            <div class="dropdown1">
                <a href="{{ url('kinh-nghiem') }}" class="dropbtn">KINH NGHIỆM</a>
            </div>
            <div class="dropdown1 ">
                {{-- <button class="dropbtn"> --}}
                  <a class="dropbtn" href="{{ url('mau-nha-dep') }}" style="font-weight: bold;">MẪU NHÀ ĐẸP</a>
                  <i class="fa fa-caret-down"></i>
                {{-- </button> --}}
                <div class="dropdown1-content">   
                  <div class="row">
                    <div class="column flex-column d-flex bd-highlight">
                      {{-- <div class="p-2 border-bottom bd-highlight" ><a href="{{ url('mau-nha-dep') }}"></i> Nhà đẹp</a></div> --}}
                      {{-- <div class="p-2 border-bottom bd-highlight">  <a href="#"></i> - Nhà ống</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"></i>-  Nhà cấp 4</a></div>
                      <div class="p-2 border-bottom bd-highlight" ><a href="#"></i> - Biệt thự</a></div>
                      <div class="p-2 border-bottom bd-highlight">  <a href="#"></i> - Chung cư</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"></i> - Văn phòng</a></div>
                      <div class="p-2 border-bottom bd-highlight" ><a href="#"></i> Ngoại thất</a></div>
                      <div class="p-2 border-bottom bd-highlight">  <a href="#"></i> Nội thất</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"></i>  - Phòng khách</a></div>
                      <div class="p-2 border-bottom bd-highlight" ><a href="#"></i> - Phòng ngủ</a></div>
                      <div class="p-2 border-bottom bd-highlight">  <a href="#"></i> - Phòng bếp</a></div>
                      <div class="p-2 border-bottom bd-highlight"><a href="#"></i> - Phòng tắm</a></div> --}}
                    </div>
                  </div>
                </div>
              </div> 
              <div class="dropdown1">
                      <a href="{{ url('lienhe-gopy') }}" class="dropbtn">LIÊN HỆ - GÓP Ý</a>
              </div>

              {{-- xét menu trang người dùng --}}
              @if(Session::has('tendangnhap'))
                @if (Session::get('role')== 1)
                <div class="dropdown1">
                <a href="{{url('noi-dung-nguoi-dung')}}" class="dropbtn">NỘI DUNG</a>
                </div>
                <div class="dropdown1">
                    <a href="{{url('khuyen-mai')}}" class="dropbtn">KHUYẾN MÃI</a>
                    </div>
                <h6 style="color: white;margin-top: 10px;margin-left: 20px">Chào bạn:{{Session::get('tendangnhap')}}</h6>
                @endif
                  
              @endif
              
              
            
      </div>
