@if(session('notice'))
    <p style="color:red; font-size: 18px; margin-top: 15px">
        {{session('notice')}}
    </p>
@endif
<form action="{{url ('dang-nhap')}}" method="POST">
    {!! csrf_field() !!}
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <p class="modal-title" id="exampleModalLabel" style="margin-left:180px;    font-size: 16px;
              font-weight: bold;
              margin-bottom: 0;
              color: #74a8f5;    height: 30px;
    line-height: 30px;">Đăng nhập</p>
              {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> --}}
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-3">Tên truy cập </div>
                <div class="col-9" style="margin-bottom: 10px; "><input name="txttentruycap" style="border: currentColor 1px solid" type="text" value="" required /></div>
              </div>
              <div class="row">
                <div class="col-3">Mật khẩu </div>
                <div class="col-9"><input name="password" style="border: currentColor 1px solid" type="password" value=""  required /></div>
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
                <button style="display: inline-block;
                width: 90px;
                text-align: center;
                text-decoration: none;
                padding: 5px 10px 5px 10px;
                margin-top: 10px;
                border: 1px solid #74a8f5;
                border-radius:3px;
                background-color: #09c;
                cursor: pointer;color: white;font-weight: bold" class="login" onclick="">Đăng nhập</button>
                {{-- <span style="display: inline-block;
                width: 90px;
                text-align: center;
                text-decoration: none;
                padding: 5px 10px 5px 10px;
                margin-top: 10px;
                border-radius: 3px;
                background-color: #09c;
                cursor: pointer; color: white;font-weight: bold" data-dismiss="modal" class="login" onclick="">Thoát</span> --}}
              {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
          </div>
        </div>
      </form>
