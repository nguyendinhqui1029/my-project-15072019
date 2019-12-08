<div class="admin">
    <form action="{{url('add-khuyen-mai?chucnang='.$chucnang)}}" method="POST">
            {!! csrf_field() !!}
        <fieldset>
            <legend style="margin-bottom: 30px; ">Khuyến mãi</legend>
            @if (!empty($data))
        Tiêu đề 1: <textarea value="{{$data->TieuDe1}}" style="width: 300px;margin-left: 70px;height: 100px"  type="text"  name="txttieude1"></textarea><br>
        Hình ảnh 1: <input value="{{$data->HinhAnh1}}" style="width: 300px;margin-left: 60px"  type="file"  name="txthinhanh1"><br>
        Tiêu đề 1: <input value="{{$data->TieuDe2}}" style="width: 300px;margin-left: 70px"  type="text"  name="txttieude2"><br>
        Hình ảnh 1: <input value="{{$data->HinhA2}}" style="width: 300px;margin-left: 60px"  type="file"  name="txthinhanh2"><br>
        Tiêu đề 1: <input value="{{$data->TieuDe3}}" style="width: 300px;margin-left: 70px"  type="text"  name="txttieude3"><br>
        Hình ảnh 1: <input value="{{$data->HinhAnh3}}" style="width: 300px;margin-left: 60px"  type="file"  name="txthinhanh3"><br>
        Tiêu đề 1: <input value="{{$data->TieuDe4}}" style="width: 300px;margin-left: 70px"  type="text"  name="txttieude4"><br>
        Hình ảnh 1: <input value="{{$data->HinhAnh4}}" style="width: 300px;margin-left: 60px"  type="file"  name="txthinhanh4"><br>
        Tiêu đề 1: <input value="{{$data->TieuDe5}}" style="width: 300px;margin-left: 70px"  type="text"  name="txttieude5"><br>
            Trạng thái: <select name="txttrangthai" style="width: 300px;margin-left: 70px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                            <option value="1" {{$data->TrangThai ===1 ? "selected":''}}>Hiện<option>
                            <option value="2" {{$data->TrangThai ===2 ? "selected":''}}>Ẩn<option>
                            <option value="3" {{$data->TrangThai ===3 ? "selected":''}}>Nổi bậc<option>
                        </select><br>
            <input value="{{$data->ID_KhuyenMai}}" name="id" style="width: 300px;margin-left: 80px"  type="hidden" >
            @else
                
            Tiêu đề 1: <div><textarea  style="width: 300px;margin-left: 70px;height: 100px"  type="text"  name="txttieude1"></textarea></div><br>
            Hình ảnh 1: <input style="width: 300px;margin-left: 60px"  type="file"  name="txthinhanh1"><br>
            Tiêu đề 2: <div><input style="width: 300px;margin-left: 70px"  type="text"  name="txttieude2"></div><br>
            Hình ảnh 2: <input style="width: 300px;margin-left: 60px"  type="file"  name="txthinhanh2"><br>
            Tiêu đề 3: <div><input style="width: 300px;margin-left: 70px"  type="text"  name="txttieude3"></div><br>
            Hình ảnh 3: <input style="width: 300px;margin-left: 60px"  type="file"  name="txthinhanh3"><br>
            Tiêu đề 4: <div><input style="width: 300px;margin-left: 70px"  type="text"  name="txttieude4"></div><br>
            Hình ảnh 4: <input style="width: 300px;margin-left: 60px"  type="file"  name="txthinhanh4"><br>
            Tiêu đề 5: <div><input style="width: 300px;margin-left: 70px"  type="text"  name="txttieude5"></div><br>
                Trạng thái: <select name="txttrangthai" style="width: 300px;margin-left: 20px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                                <option value="1">Hiện<option>
                                <option value="2">Ẩn<option>
                                <option value="3">Nổi bậc<option>
                            </select><br>
                            @endif
            </fieldset>
            <div>
                    <button style="width: 80px;height: 30px;margin-left: 30px;" type="submit" class="mt-3">Xác nhận</button>
            </div>
    </form>
</div>