<form method="POST" action="dang-tin-nha-dat">
    {!! csrf_field() !!}
<div class="box-right">
  <div class="box-content" style="border: 1px solid #c0c0c0 !important;">

    <p class="title" style="border-top: 1px none white;font-size: 15px;
                    font-weight: bold;
                    color: #F60;
                    text-align: center;
                    border-bottom: 1px dashed #c0c0c0;
                    padding: 15px 5px 10px 5px;">
      ĐĂNG TIN NHÀ ĐẤT MIỄN PHÍ VÀ SẼ LUÔN NHƯ VẬY
    </p>
    <p style="line-height: 25px;
                padding-left: 5px;
                font-style: italic;">Bạn nên sử dụng trình duyệt FireFox 3.0, IE7 trở lên hoặc Google Chrome để việc
      đăng tin được thuận lợi.</p>
    <p style="line-height: 10px;
                padding-left: 5px;
                font-style: italic;">Hãy đọc qua <a href="#" style="color: #F60">Quy định đăng tin</a> của chúng tôi
      trước khi đăng tin.</p>
    <p style="line-height: 2s0px;
                padding-left: 5px;
                font-style: italic;color: red;">Các tin đăng trùng nhau sẽ bị xóa mà không cần báo trước. Sử dụng chức
      năng <b><a href="#">làm mới</a></b> của thành viên để up tin lên đầu trang thay vì đăng lại tin đã đăng trước đó.
    </p>

    <p class="hot-news" style="color: #0046FA;text-decoration: none;
            line-height: 15px;padding-left: 5px;"><img src="assets/images/new.gif" /><a href="#"
        style="padding-left: 10px;">Tin VIP hiệu quả hơn 30 đến 40 lần so với tin thường</a>
    </p>
    <p class="hot-news" style="color: #0046FA;text-decoration: none;
            line-height: 15px;padding-left: 5px;"><img src="assets/images/new.gif" /><a href="#"
        style="padding-left: 10px;">Hướng dẫn đăng tin VIP
      </a>
    </p>
    {{-- Thông tin bắc buộc --}}
    <div class="box-content">
      <h5 style="color: white;background-color: #069ed2;color: #fff;
            font-size: 13px;
            font-weight: bold;
            line-height: 30px;
            height: 30px;
            padding: 0 0 0 5px;
            margin: 0 0 5px 0;">Thông tin bắt buộc</h5>
            {{-- <div class="col-4 col-sm-2 col-md-4 col-lg-4" style="margin-left: 5px;">
              Ngày đăng: <input name="txtdate" style="height:25px;" class="w-50 m-2 ml-5" type="date" />
            </div> --}}
      <div class="row">
        <!-- {{-- tiêu đề --}} -->
        <div class="col-1">Tiêu đề <span style="color: red">*</span></div>
        <div class="col-5">
          <div class="ml-2 mr-2 "><input name="txttieude" class="w-100" type="text"  required/></div>
        </div>
        <div class="col-1">Ngày đăng tin <span style="color: red">*</span></div>
        <div class="col-5">
          <div class="ml-2 mr-2 " style="border: 1px solid wheat; border-radius: 4px"><input name="txtdate" class="w-100" type="date"  required/></div>
        </div>
      </div>
      <div class="row">
        <!-- {{-- nọi dung --}} -->
        <div class="col-1">Nội dung <span style="color: red">*</span></div>
        <div class="col-11">
          <div class="ml-2 mr-2 "><textarea required name="txtnoidung" style="width: 100%;
                    height: 250px;
                    margin: 0;
                    padding: 0;
                " type="text"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
      <!-- loại tin -->
        <div class="col-2 ">
          <label class="label-form-search m-2">Loại tin <span style="color:red">*</span></label>
         </div>
         <div class="col-10 ">
          <div class="ml-2 mr-2 mt-2"><input name="txtloaitin" class="w-100" type="text" /></div>
         </div>
         <div class="col-2 ">
          <label class="label-form-search m-2">Đại chỉ <span style="color:red">*</span></label>
         </div>
         <div class="col-10 ">
          <div class="ml-2 mr-2 mt-2"><input name="txtdiachi" class="w-100" type="text" /></div>
         </div>
         {{-- <div class="col-3 col-sm-2 col-md-3 col-lg-2">
            <label class="label-form-search m-2">Loại BDS <span style="color:red">*</span></label>
         </div>
         <div class="col-9 col-sm-4 col-md-9 col-lg-4">
            <select class=" select m-2 w-50" style="height: 25px;border-radius: 3px;">
              <option value="can-ban">---Loại BĐS---</option>
            </select>
         </div> --}}
            <!-- ------ tỉnh thành-->
          {{-- <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                <label class="label-form-search m-2">Tỉnh/Thành <span style="color:red">*</span></label>
           </div>
          <div class="col-9 col-sm-4 col-md-9 col-lg-4">
            <select class=" select m-2 w-50" style="height: 25px;border-radius: 3px;">
              <option value="can-ban">Cần bán</option>
              <option value="cho-thue">Cho thuê</option>
              <option value="can-mua">Cần mua</option>
              <option value="can-thue">Cần thuê</option>
            </select>
          </div>
          <div class="col-3 col-sm-2 col-md-3 col-lg-2">
              <label class="label-form-search m-2">Quận/Huyện <span style="color:red">*</span></label>
          </div>
          <div class="col-9 col-sm-4 col-md-9 col-lg-4">
            <select class=" select m-2 w-50" style="height: 25px;border-radius: 3px;">
              <option value="can-ban">---Loại BĐS---</option>
            </select>
          </div>
          <!-- Địa chi -->
          <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                <label class="label-form-search m-2">Tỉnh/Thành <span style="color:red">*</span></label>
           </div>
          <div class="col-9 col-sm-4 col-md-9 col-lg-4">
          <div class="ml-2 mr-2 m-2 "><input style="height:25px;" class="w-100" type="text" placeholder="Số nhà 23/12" /></div>
          </div>
          <div class="col-6 col-sm-2 col-md-3 col-lg-2">
            <select class=" select mt-2 w-100" style="height: 25px;border-radius: 3px;">
              <option value="can-ban">---Đường/Phố---</option>
            </select>
          </div>
          <div class="col-6 col-sm-4 col-md-9 col-lg-4">
            <select class=" select m-2 w-50" style="height: 25px;border-radius: 3px;">
              <option value="can-ban">---Phường/Xã---</option>
            </select>
          </div> --}}
          <!-- <div class="row">
          <i style="margin-left:140px;color: #777;">Lưu ý(*): Ghi rõ tên đường/phố, phường/xã nếu không tìm thấy trong danh sách</i>
          </div> -->
          <!-- Dự án -->
          {{-- <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                <label class="label-form-search m-2">Dự án <span style="color:red">*</span></label>
           </div>
          <div class="col-9 col-sm-4 col-md-9 col-lg-4">
            <select class=" select m-2 w-50" style="height: 25px;border-radius: 3px;">
              <option value="can-ban">Cần bán</option>
              <option value="cho-thue">Cho thuê</option>
              <option value="can-mua">Cần mua</option>
              <option value="can-thue">Cần thuê</option>
            </select>
          </div> --}}
          {{-- <div class="col-3 col-sm-2 col-md-3 col-lg-2">
              <label class="label-form-search m-2">Diện tích <span style="color:red">*</span></label>
          </div>
          <div class="col-9 col-sm-4 col-md-9 col-lg-4">
            <input style="height:25px;" class="w-60 m-2" type="text" />m2
          </div> --}}
          <!-- Giá -->
          <div class="col-1 col-sm-2 col-md-3 col-lg-2">
                <label class="label-form-search m-2">Giá bán <span style="color:red">*</span></label>
          </div>
          <div class="col-4 col-sm-2 col-md-5 col-lg-4">
          <input name="txtgiaban" style="height:25px;" class="w-100 m-2" type="text" />
          </div>
          <div class="col-1 m-3">Diện tích</div>
          <div class="col-4 col-sm-2 col-md-4 col-lg-4">
            <input name="txtdientich" style="height:25px;" class="w-50 m-2" type="text" />m2
          </div>
        </div>
          
          <p style="color:#777;margin-left:5px;"> Chú ý: 1 m2 = 1.000 VNĐ</p>
          <p style="color: #1029AC;font-style: italic;margin-left:5px;">Các tin đăng thiếu chính xác, <span style="font-weight: bold;">sai địa chỉ, sai mức giá</span> (giá thấp hơn giá thực tế), <span style="font-weight: bold;">chọn sai dự án</span> sẽ bị  <span style="font-weight: bold;color:red">khóa tài khoản vĩnh viễn</span>
          </p>
        <!-- tên liên hệ -->
        <div class="row">
          <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                <label class="label-form-search m-2">Tên liên hệ <span style="color:red">*</span></label>
          </div>
          <div class="col-9 col-sm-4 col-md-9 col-lg-4">
          <input name="txttenlienhe" style="height:25px;" class="w-60 m-2" type="text" />
          </div>
          <div class="col-3 col-sm-2 col-md-3 col-lg-2">
              <label class="label-form-search m-2">Điện thoại <span style="color:red">*</span></label>
          </div>
          <div class="col-9 col-sm-4 col-md-9 col-lg-4">
            <input name="txtdienthoai" style="height:25px;" class="w-60 m-2" type="text" />
          </div>
        </div>
        <!-- Các Thoonng tin khác -->
        <h5 style="line-height: 30px;height: 30px;padding: 0 0 0 5px; margin: 0 0 5px 0; color: #fff; font-size: 13px;font-weight: bold;background-color: #069ed2;">Các thông tin khác</h5>
        <div class="row">
          <div class="col-9"> 
            <div class="row">
              <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                <label class="label-form-search m-2">Chiều rộng <span style="color:red">*</span></label>
              </div>
              <div class="col-9 col-sm-4 col-md-9 col-lg-4">
              <input name="txtchieurong" style="height:25px;" class="w-60 m-2" type="text" />m2
              </div>
              <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                  <label class="label-form-search m-2">Chiều dài <span style="color:red">*</span></label>
              </div>
              <div class="col-9 col-sm-4 col-md-9 col-lg-4">
                <input name="txtchieudai" style="height:25px;" class="w-60 m-2" type="text" />m2
              </div>
              <!-- hướng -->
              <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                {{-- <label class="label-form-search m-2">Hướng <span style="color:red">*</span></label> --}}
              </div>
              <div class="col-9 col-sm-4 col-md-9 col-lg-4">
              {{-- <input style="height:25px;" class="w-60 m-2" type="text" /> --}}
              </div>
              <div class="col-4 col-sm-3 col-md4 col-lg-2">
                  {{-- <label class="label-form-search m-2">Đường trước nhà <span style="color:red">*</span></label> --}}
              </div>
              <div class="col-8 col-sm-3 col-md-8 col-lg-4">
                {{-- <input style="height:25px;" class="w-60 m-2" type="text" /> --}}
              </div>
          <!-- pháp lý -->
              <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                    {{-- <label class="label-form-search m-2">Pháp lý <span style="color:red">*</span></label> --}}
              </div>
              <div class="col-9 col-sm-4 col-md-9 col-lg-4">
              {{-- <input style="height:25px;" class="w-60 m-2" type="text" /> --}}
              </div>
              <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                  <!-- <label class="label-form-search m-2">Điện thoại <span style="color:red">*</span></label> -->
              </div>
              <div class="col-9 col-sm-4 col-md-9 col-lg-4">
                <!-- <input style="height:25px;" class="w-60 m-2" type="text" /> -->
              </div>
          <!-- số lầu -->
              <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                    <label class="label-form-search m-2">Số lầu <span style="color:red">*</span></label>
              </div>
              <div class="col-9 col-sm-4 col-md-9 col-lg-4">
              <input name="txtsolau" style="height:25px;" class="w-60 m-2" type="text" />
              </div>
              <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                  <label class="label-form-search m-2">Số phòng ngủ <span style="color:red">*</span></label>
              </div>
              <div class="col-9 col-sm-4 col-md-9 col-lg-4">
                <input name="txtsophongngu" style="height:25px;" class="w-60 m-2" type="text" />
              </div>
            </div>
          </div>
          <!-- checkin -->
          <div class="col-3"> 
            <div class="form-check">
              {{-- <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."> Nhà bếp --}}
            </div>
            <div class="form-check">
              {{-- <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."> Phòng ăn --}}
            </div>
            <div class="form-check">
              {{-- <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."> Sân thượng --}}
            </div>
            <div class="form-check">
              {{-- <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."> Chỗ để xe hơi --}}
            </div>
          </div>
        </div>
        <!-- Bảng đồ -->
        <div class="row">
          
        </div>

      <!-- {{-- loại tin --}} -->
      <!-- {{-- tỉnh thành --}} -->
      <!-- <div class="row"> -->
      <!-- <div class="col-6">
            <div class="row">
              <div class="col-3">Tỉnh /Thành <span style="color: red; ">*</span></div>
              <div class="col-9">
                <div class="value">
                  <select name="loaitin" id="loaitin" class="w-100 ml-2 m-1" style="height: 25px;;border-radius: 3px;">
                    <option value="0">---- Loại tin ----</option>
                    <option value="1">Cần bán</option>
                    <option value="2">Cho thuê</option>
                    <option value="3">Cần mua</option>
                    <option value="4">Cần thuê</option>
                  </select>
                </div>
              </div>
            </div>
          </div> -->
      <!-- <div class="col-6">
            <div class="row">
              <div class="col-3">Quận/Huyện <span style="color: red">*</span></div>
              <div class="col-9">
                <div class="value">
                  <select name="loaitin" id="loaitin" class="w-100 ml-2 m-1" style="height: 25px;;border-radius: 3px;">
                    <option value="0">---- Loại BĐS ----</option>
                    <option value="1">Nhà mặt tiền</option>
                    <option value="2">Nhà trong hẻm</option>
                    <option value="3">Biệt thự, nhà liền kề</option>
                    <option value="4">Căn hộ chung cư</option>
                    <option value="8">Phòng trọ, nhà trọ</option>
                    <option value="7">Văn phòng</option>
                    <option value="5">Kho, xưởng</option>
                    <option value="6">Nhà hàng, khách sạn</option>
                    <option value="15">Shop, kiot, quán</option>
                    <option value="9">Trang trại</option>
                    <option value="10">Mặt bằng</option>
                    <option value="11">Đất thổ cư, đất ở</option>
                    <option value="12">Đất nền, liền kề, đất dự án</option>
                    <option value="13">Đất nông, lâm nghiệp</option>
                    <option value="14">Các loại khác</option>
                  </select>
                </div>
              </div>
            </div>
          </div> -->
    </div>
      <!-- bản đồ -->
      <h5 style="line-height: 30px; height: 30px;padding: 0 0 0 5px;margin: 0 0 5px 0;color: #fff;font-size: 13px;font-weight: bold;background-color: #069ed2;"><a><img src="assets/images/new.gif" /></a> Bản đồ</h5>
      <div class="map">
        <p><span style="padding: 5px;color: #d33320;font-weight: bold;">Để tăng độ tin cậy và tin rao được nhiều người quan tâm hơn, hãy sửa vị trí tin rao của bạn trên bản đồ bằng cách</span><span style="color: Blue; font-weight: bold;"> Chọn lại vị trí bản đồ</span>✍</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4683851580926!2d106.69930331440901!3d10.775393292322242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f470cd40481%3A0xe8e77444433758b0!2zMSBMw6ogTOG7o2ksIELhur9uIE5naMOpLCBRdeG6rW4gMSwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1570420796111!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
      <!-- hình ảnh -->
      <h5 style="line-height: 30px; height: 30px;padding: 0 0 0 5px;margin: 0 0 5px 0;color: #fff;font-size: 13px;font-weight: bold;background-color: #069ed2;">Hình ảnh </h5>
      <div class="imgaes">
      <div class="row">
        <p style="font-size: 14px;"><span style="color:blue;font-weight: bold">Lưu ý khi đăng ảnh</span>: Sử dụng hình<b> ảnh thật của tài sản</b> hoặc <b>không sử dụng ảnh</b>. Đăng ảnh không phải của tài sản sẽ bị <span style="color:red;font-weight: bold">khóa tài khoản vĩnh viễn.</span></p>
        <!-- <div class="col-2 col-sm-2 col-md-2 col-lg-2">
          <img width="130px" src="assets/images/camerajpg.jpg" />
          <button type="text">â</button>
          <button type="text">â</button>
        </div>
        <div class="col-2">
        <img src="assets/images/camerajpg.jpg" />
          <button type="text">â</button>
          <button type="text">â</button>
        </div>
        <div class="col-2">
        <img src="assets/images/camerajpg.jpg" />
          <button type="text">â</button>
          <button type="text">â</button>
        </div>
        <div class="col-2">
        <img src="assets/images/camerajpg.jpg" />
          <button type="text">â</button>
          <button type="text">â</button>
        </div>
        <div class="col-2">
        <img src="assets/images/camerajpg.jpg" />
          <button type="text">â</button>
          <button type="text">â</button>
        </div>
        <div class="col-2">
        <img src="assets/images/camerajpg.jpg" />
          <button type="text">â</button>
          <button type="text">â</button>
        </div> -->
        {{-- <div class="col-sm">
          <img src="assets/images/camera.jpg" />
          <div class="row">
          <button style="border-radius:3px;border:1px solid black; width:60px;" type="text">Chọn ảnh</button>
          <button style="height:30px; width:40px; border-radius:3px;border:1px solid black" class="ml-5" type="text">Xóa</button>
          </div>
          </div> --}}
        {{-- <div class="col-sm">
        <img src="assets/images/camera.jpg" />
        <div class="row">
          <button style="border-radius:3px;border:1px solid black; width:60px;" type="text">Chọn ảnh</button>
          <button style="height:30px; width:40px; border-radius:3px;border:1px solid black" class="ml-5" type="text">Xóa</button>
          </div>
        </div> --}}
        {{-- <div class="col-sm">
        <img src="assets/images/camera.jpg" />
        <div class="row">
          <button style="border-radius:3px;border:1px solid black; width:60px;" type="text">Chọn ảnh</button>
          <button style="height:30px; width:40px; border-radius:3px;border:1px solid black" class="ml-5" type="text">Xóa</button>
          </div>
        </div> --}}
        {{-- <div class="col-sm">
        <img src="assets/images/camera.jpg" />
          <div class="row">
          <button style="border-radius:3px;border:1px solid black; width:60px;" type="text">Chọn ảnh</button>
          <button style="height:30px; width:40px; border-radius:3px;border:1px solid black" class="ml-5" type="text">Xóa</button>
          </div>
        </div> --}}
        <div class="col-sm">
        <img src="assets/images/camera.jpg" />
          <div class="row">
          <input name="txthinhanh" class="m-1" style="border-radius:3px;border:1px solid black; width:60px;height:25px;" type="file">
          <button style="height:30px; width:40px; border-radius:3px;border:1px solid black" class="ml-5" type="text">Xóa</button>
          </div>
        </div>
      </div>
      </div>
      <h5 style="line-height: 30px; height: 30px;padding: 0 0 0 5px;margin: 20px 0 5px 0;color: #fff;font-size: 13px;font-weight: bold;background-color: red;">Hình thức đăng</h5>
      <div>
          {{-- {{
            $dientich= $_POST ["txtdientich"],
            $ngay = $_POST["txtngay"],
            $tong= $dientich + $ngay
          }} --}}
        {{-- <form method="GET" action="dang-tin-nha-dat"> --}}
          <p> Cách tính số tiền bạn cần phải trả khi đăng thông tin : </p>
        Diện tích : <input class="ml-5" type="text" value="{{isset($dienTich)?$dienTich:""}}" name="txtdientich" > ( 1 m2 = 1.000 đồng --- Ví dụ: 100m2 = 100.000 đồng)<br>
        Số ngày đăng tin: &nbsp;<input class="ml-1" value="{{isset($numberDay)?$numberDay:""}}" type="text" name="txtngay"  ><br>
        <div style="margin-left: 70px"> Tổng: <input  class="ml-1" name="txttong" type="text" value="{{isset($tong)}}" ></div>
          {{-- <button type="submit">Kết quả</button> --}}
        {{-- </form> --}}
      </div>
      <!-- tin vip ngày -->
      <div class="row" >
        {{-- <div class="col-7" style="background: #e0e0e0;border-right:1px solid #ccc; ">
          <div style="background: #e0e0e0;border-right:1px solid #ccc;border-bottom:1px solid #ccc ">
            <input type="radio" class="mt-2 ml-2" value="0"> <span style="color: red;font-weight: bold;font-size: 14px; margin: 0; cursor: pointer;">Tin VIP ngày</span>
              <div class="row">
                <div class="col-4">
                  <div class="value">
                    <select name="loaitin" id="loaitin" class=" ml-5 m-1" style="height: 25px;;border-radius: 3px;">
                      <option value="0">---- Loại VIP ------</option> 
                    </select>
                  </div>
                </div>
                <div class="col-1"><p class="mt-2 ml-2">x</p></div>
                <div class="col-4">
                  <div class="value">
                    <select name="loaitin" id="loaitin" class=" m-1" style="height: 25px;;border-radius: 3px;">
                      <option value="0">--- Số ngày--</option> 
                    </select>
                  </div>
                </div>
                <div class="col-3"><p class="mt-2 mr-5">= 0đ</p></div>
              </div>
          </div>
          <!-- tin vip tháng -->
          <input type="radio" class="mt-2 ml-2" value="0"> <span style="color: red;font-weight: bold;font-size: 14px; margin: 0; cursor: pointer;">Tin VIP tháng</span>
          <div>
              <div class="value">
                    <select name="loaitin" id="loaitin" class=" ml-5 m-1" style="height: 25px;;border-radius: 3px;">
                      <option value="0">---- Loại VIP ------</option> 
                    </select>
              </div>
              <div style="margin-left:60px">
                <ul>
                  <li>Tiết kiệm 20% so với đăng tin VIP theo ngày</li>
                </ul>
              </div>
          </div>
        </div>
        <div class="col-5" style="background: #e0e0e0;">
          <h5 style="padding: 5px;margin: 0;font-size: 13px;color: #0d50ce;font-weight: bold">Lợi ích của tin VIP</h5>
            <ul style="margin-left:30px">
              <li>Thời gian hiển tin = số ngày VIP + 60 ngày như tin thường</li>
              <li>Tin VIP có chữ màu đỏ, nằm trên tin thường.</li>
              <li>Hiệu quả cao, số lượt xem tin VIP cao hơn từ 30 đến 40 lần so với tin thường.</li>
              <li>Hiển thị ngay sau khi đăng, không phải chờ duyệt như tin thường</li>
            </ul>
        </div> --}}
        {{-- <p style="margin-left:5px;">Số dư tài khoản: 0đ</p> --}}
      </div>
      {{-- <p style="border-top: 1px solid #ccc; margin-top:5px">Người mua (hoặc) người thuê có phải trả phí hoa hồng cho người giới thiệu không? <input type="radio" class="" value="0"> <span style="color: blue">Có trả phí</span> <input type="radio" class="" value="0"> <span style="color: blue">Không mất phí</span></p> --}}
        <div class="form-check">
             {{-- <p style="font-weight:bold;background:#e0e0e0"> <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
             Tôi cam kết thông tin mô tả về tài sản là đúng sự thật và tuân thủ theo <span style="color:blue">quy định đăng tin</span> của Alonhadat.com.vn.
             </p> --}}
             <div class="row">
                {{-- <div class="col-2 m-2">Mã an toàn (*)</div>
                <div class="col-4"><img src="https://alonhadat.com.vn/CaptchaGenerator.ashx?t=dec" /><input class="ml-2" style="width:80px;height:30px " type="text" /></div>
                <div class="col-8"></div> --}}
             </div>
             <div class="row">
                {{-- <div class="col-2"><button style="width:80px;height:30px;background-color: #ca5f1f;" type="button">Lưu nháp</button></div> --}}
                <div class="col-6"></div>
                {{-- <div class="col-2"><button style="width:80px;height:30px;background-color: hsl(195, 100%, 40%);" type="button">Đăng ký</button></div> --}}
                <div class="col-2 mt-3"><button style="width:80px;height:30px;background-color: #aca3a3;color: #fff;border-radius: 3px;border: 1px solid #aca3a3" type="submit">Xác nhận</button></div>
             </div>
            {{-- <div>{{$tong}}</div> --}}
         </div>
         <p style="font-style: italic;padding: 5px;margin-top: 15px;font-size: 17px;">Nếu gặp khó khăn trong vấn đề đăng tin, xin vòng liên hệ số <span style="font-weight:bold">0334234461 </span> để được hướng dẫn.</p>
  </div>
</div>
</form>