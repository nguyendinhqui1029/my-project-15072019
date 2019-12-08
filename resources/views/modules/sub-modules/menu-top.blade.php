<div class="row justify-content-end align-items-center" style="height: 40px;">
    <div class="col-3 col-sm-3 col-md-2 col-lg-2 text-center ">
        <div class="lang-box">
            <ul class="compobox-lang">
                <li>
                    <label><img src="{{asset('assets\images\viet_nam.jpg')}}"
                            style="width: 30px; height: 20px;margin-right: 3px;">Việt Nam</label>
                    <ul class="sub-lang">
                        <li style="list-style: none;"><a href="locale/vi"><img src="{{asset('assets\images\viet_nam.jpg')}}"
                                    style="width: 30px; height: 20px;margin-right: 3px;">Việt Nam</a></li>
                        <li style="list-style: none;"><a href="locale/en"><img src="{{asset('assets\images\hoa_ki.png')}}"
                                    style="width: 30px; height: 20px;margin-right: 3px;">Hoa Kỳ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-3 col-sm-3 col-md-2 col-lg-2 text-center">
        {{-- <a class="regular-post" href="{{ url('dang-tin-nha-dat') }}">Đăng tin nhà đất</a> --}}
    </div>
    <div class="col-3 col-sm-3 col-md-2 col-lg-2 text-center">
        <a
        {{-- data-toggle="modal" --}}
        {{-- data-target="#exampleModal" --}}
        {{-- href="javascript:void(0)" --}}
    href="{{ url('dang-ky-thanh-vien') }}"
          class="register">Đăng ký thành viên</a>
    </div>
    <div class="col-3 col-sm-3 col-md-2 col-lg-2 text-center">
        <a 
        {{-- data-toggle="modal" --}}
        {{-- data-target="#exampleModal1" 
        href="javascript:void(0)" --}}
    href="{{ url('dang-nhap')}}"
          class="login">Đăng nhập</a>
        
    </div>

</div>
<!-- Button trigger modal -->
<!-- Trigger the modal with a button -->

<!-- Modal đăng nhập -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <p class="modal-title" id="exampleModalLabel" style="margin-left:180px;    font-size: 16px;
              font-weight: bold;
              margin-bottom: 0;
              color: #74a8f5;    height: 30px;
    line-height: 30px;">Đăng nhập</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-3">Tên truy cập </div>
                <div class="col-9" style="margin-bottom: 10px; "><input style="border: currentColor 1px solid" type="text" value="" /></div>
              </div>
              <div class="row">
                <div class="col-3">Mật khẩu </div>
                <div class="col-9" style=" "><input style="border: currentColor 1px solid" type="password" value=""  /></div>
              </div>
              <div class="form-check" style="margin-left:120px;margin-bottom: 10px; ">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Duy trùy đăng nhập</label>
              </div>
              <div class="row">
                <div class="col-3"></div>
                <div class="col-9"><span style="color: red;">Quên mật khẩu ?</span><span style="color: #09c">Đăng ký</span></div>
              </div>
            </div>
            <div class="modal-footer">
                <span style="display: inline-block;
                width: 90px;
                text-align: center;
                text-decoration: none;
                padding: 5px 10px 5px 10px;
                margin-top: 10px;
                border-radius: 3px;
                background-color: #09c;
                cursor: pointer;color: white;font-weight: bold" class="login" onclick="">Đăng nhập</span>
                <span style="display: inline-block;
                width: 90px;
                text-align: center;
                text-decoration: none;
                padding: 5px 10px 5px 10px;
                margin-top: 10px;
                border-radius: 3px;
                background-color: #09c;
                cursor: pointer; color: white;font-weight: bold" data-dismiss="modal" class="login" onclick="">Thoát</span>
              {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
          </div>
        </div>
      </div>

{{-- Đăng ký thành viên --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="exampleModalLabel" style="margin-left:180px;    font-size: 16px;
        font-weight: bold;
        margin-bottom: 0;
        color: #74a8f5;    height: 30px;
line-height: 30px;">Đăng ký thành viên</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="color: crimson">. Lưu ý: Giả mạo thông tin của cá nhân, tổ chức để tham gia hoạt động thương mại điện tử nhằm gây ảnh hưởng đến uy tín, cuộc sống của cá nhân, tổ chức có thể bị phạt tới 30 triệu đồng.
            Xem thêm NĐ 52/2013/NĐ-CP. Thông tin người đăng thật sự có thể được xác định thông qua địa chỉ ip của máy tính, điện thoại,...</p>
        <div class="row">
          <div class="col-4">Tên truy cập (<span style="color: crimson">*</span>)</div>
          <div class="col-8" style="margin-bottom: 10px; "><input style="border: currentColor 1px solid" type="text" value="" /></div>
        </div>
        <div class="row">
          <div class="col-4">Mật khẩu (<span style="color: crimson">*</span>)</div>
          <div class="col-8" style="margin-bottom: 10px; "><input style="border: currentColor 1px solid" type="password" value=""  /></div>
        </div>
        {{-- <div class="row">
            <div class="col-4">Nhập lại mật khẩu (<span style="color: crimson">*</span>)</div>
            <div class="col-8" style="margin-bottom: 10px; "><input style="border: currentColor 1px solid" type="password" value=""  /></div>
        </div> --}}
        <div class="row">
            <div class="col-4">Họ Tên (<span style="color: crimson">*</span>)</div>
            <div class="col-8" style="margin-bottom: 10px; "><input style="border: currentColor 1px solid" type="text" value="" /></div>
        </div>
        <div class="row">
            <div class="col-4">Di động (<span style="color: crimson">*</span>)</div>
            <div class="col-8" style="margin-bottom: 10px; "><input style="border: currentColor 1px solid" type="text" value="" /></div>
        </div>
        {{-- <div class="row">
            <div class="col-4">Di động 2 </div>
            <div class="col-8" style="margin-bottom: 10px; "><input style="border: currentColor 1px solid" type="text" value="" /></div>
        </div> --}}
        <div class="row">
            <div class="col-4">Email liên hệ (<span style="color: crimson">*</span>)</div>
            <div class="col-8" style="margin-bottom: 10px; "><input style="border: currentColor 1px solid" type="email" value="" /></div>
        </div>
        {{-- <div class="row">
            <div class="col-4">Nhập lại email (<span style="color: crimson">*</span>)</div>
            <div class="col-8" style="margin-bottom: 10px; "><input style="border: currentColor 1px solid" type="text" value="" /></div>
        </div> --}}
        <div class="form-check" style="margin-left:160px;margin-bottom: 10px; ">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1" style="color: dodgerblue">Tôi không có email</label>
        </div>
        <div class="row">
        <div class="col-4">Tỉnh Thành/Phố (<span style="color: crimson">*</span>)</div>
        <div class="col-8" style="margin-bottom: 10px; ">
            <select class="select" style="border: currentColor 1px solid; width: 50%;height: 20px;border: 1px solid black;
            border-radius: 2px;">
                <option value="can-ban">-- Chọn tỉnh/thành phố ----</option>
                <option value="cho-thue">Cho thuê</option>
                <option value="can-mua">Cần mua</option>
                <option value="can-thue">Cần thuê</option>
            </select>
        </div>
        </div>
        <div class="row">
            <div class="col-4">Quận/ huyện (<span style="color: crimson">*</span>)</div>
            <div class="col-8">
                <select class="select" style="border: currentColor 1px solid; width: 50%;height: 20px;border: 1px solid black;
                border-radius: 2px;">
                    <option value="can-ban">-------Quận/Huyện ------</option>
                    <option value="cho-thue">Cho thuê</option>
                    <option value="can-mua">Cần mua</option>
                    <option value="can-thue">Cần thuê</option>
                </select>
            </div>
        </div>
        {{-- <div class="row" style="margin-top: 10px;">
            <div class="col-4">Loại tài khoản (<span style="color: crimson">*</span>)</div>
            <div class="col-2"><input value="2" name="agent" type="radio" id="agent2" class="agent" style="width:16px; height:16px;">cá nhân</div>
            <div class="col-3"><input value="2" name="agent" type="radio" id="agent2" class="agent" style="width:16px; height:16px;">Nhà môi giới</div>
        </div>
        <div class="row" style="margin-top: 10px;">
            <div class="col-4" style="color: darkblue;font-weight: bold;">Mã an toàn (<span style="color: crimson">*</span>)</div>
            <div class="col-3"><img class="captchagenerator" src="https://alonhadat.com.vn/CaptchaGenerator.ashx?v=17186" align="left"></div>
            <div class="col-1"><input type="text" id="captcha" class="captcha" style="height:26px; margin-left:5px; width:105px" maxlength="7"></div>
        </div> --}}
      </div>
      <div class="modal-footer">
          <span style="display: inline-block;
          width: 90px;
          text-align: center;
          text-decoration: none;
          padding: 5px 10px 5px 10px;
          margin-top: 10px;
          border-radius: 3px;
          background-color: #09c;
          cursor: pointer;color: white;font-weight: bold" class="login" onclick="">Đăng ký</span>
          <span style="display: inline-block;
          width: 90px;
          text-align: center;
          text-decoration: none;
          padding: 5px 10px 5px 10px;
          margin-top: 10px;
          border-radius: 3px;
          background-color: #09c;
          cursor: pointer; color: white;font-weight: bold" data-dismiss="modal" class="login" onclick="">Thoát</span>
        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
      <div style="margin-left: 5px;"><span style="color: crimson">Số điện thoại hỗ trợ</span> <span style="color: red;    font-weight: bold;">(0254) 3890 425</span>
        </div>
    </div>
  </div>
</div>