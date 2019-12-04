<div class="admin">
    <form action="{{url('add-tai-khoan?chucnang='.$chucnang)}}" method="POST">
        {!! csrf_field() !!}
        <fieldset>
            <legend style="margin-bottom: 30px; ">Tài Khoản</legend>
            @if (!empty($data))
            Tên Admin: <input value={{$data->TenAdmin}} style="width: 300px;margin-left: 70px" type="text" required name="txtname"><br>
        Email Admin: <input value="{{$data->EmailAdmin}}" style="width: 300px;margin-left: 60px;height: 30px;border: 1px solid #e0e0e0" type="email" required
                name="txtemail"><br>
        Điện thoại Admin: <input value="{{$data->DienThoaiAdmin}}" style="width: 300px;margin-left: 40px; margin-bottom: 5px" type="text" required
                name="txtdienthoai"><br>
                Ngày tạo: <input value="{{$data->NgayTao}}" style="width: 300px;margin-left: 40px; margin-bottom: 5px" type="text" required
                name="txtngaytao"><br>
            Mật khẩu Amin: <input value="{{$data->MatKhauAdmin}}" style="width: 300px;margin-left: 50px" type="text" required name="txtmatkhau"><br>
            Ảnh địa diện: <input style="width: 300px;margin-left: 60px" type="file" required name="txtanh"><br>
            Trạng thái: <select
                style="width: 300px;margin-left: 70px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;"
                name="txttrangthai">
                <option value="1" {{$data->TrangThai === 1? "selected":''}}>Hiện
                <option>
                <option value="2" {{$data->TrangThai === 2? "selected":''}}>Ẩn
                <option>
                <option value="3" {{$data->TrangThai === 3? "selected":''}}>Nổi bậc
                <option>
            </select><br>
            Role: <input value={{$data->Role}} style="width: 300px;margin-left: 70px" type="text" required name="txtrole">
            <input value="{{$data->ID_Admin}}" name="id" style="width: 300px;margin-left: 80px"  type="hidden" >
            @else
                
            Tên Admin: <input class="mb-4" style="width: 300px;margin-left: 70px" type="text" required name="txtname"><br>
            Email Admin: <input class="mb-4" style="width: 300px;margin-left: 60px;height: 30px;border: 1px solid #e0e0e0" type="email" required
                name="txtemail"><br>
            Điện thoại Admin: <input class="mb-4" style="width: 300px;margin-left: 40px; margin-bottom: 5px" type="text" required
                name="txtdienthoai"><br>
            Ngày tạo: <input class="mb-4" style="width: 300px;margin-left: 80px; margin-bottom: 5px;height:12px;border:1px solid thistle" type="date" required
                name="txtngaytao"><br>
            Mật khẩu Amin: <input class="mb-4" style="width: 300px;margin-left: 50px" type="password" required name="txtmatkhau"><br>
            Ảnh địa diện: <input class="mb-4" style="width: 300px;margin-left: 60px" type="file" required name="txtanh"><br>
            Trạng thái: <select
                style="width: 300px;margin-left: 70px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;"
                name="txttrangthai">
                <option value="1">Hiện
                <option>
                <option value="2">Ẩn
                <option>
                <option value="3">Nổi bậc
                <option>
            </select><br> <br>
            Role: <input style="width: 300px;margin-left: 100px; margin-bottom: 5px" type="text" required name="txtrole">
            @endif
        </fieldset>
        <div>
                <button style="width: 80px;height: 30px;margin-left: 30px;" type="submit" class="mt-3">Xác nhận</button>
        </div>
    </form>
</div>
