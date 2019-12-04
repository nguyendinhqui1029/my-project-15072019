<div class="admin">
        <form action="{{url('admin-quan-huyen?chucnang='.$chucnang)}}" method="POST">
                {!! csrf_field() !!}
            <fieldset>
                <legend style="margin-bottom: 30px; ">Quận Huyện</legend>
                @if (!empty($data))
            Tên quận huyện: <input value="{{$data->TenQuanHuyen}}" style="width: 300px;margin-left: 70px"  type="text" required name="txtquanhuyen"><br>
            ID tỉnh thành phố: <input value="{{$data->ID_TinhThanhPho}}" style="width: 300px;margin-left: 70px"  type="text" required name="txtthanhpho"><br>
                Trạng thái: <select name="txttrangthai" style="width: 300px;margin-left: 100px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                        <option value="1" {{$data->TrangThai === 1? "selected":''}}>Hiện<option>
                        <option value="2" {{$data->TrangThai === 2? "selected":''}}>Ẩn<option>
                        <option value="3" {{$data->TrangThai === 3? "selected":''}}>Nổi bậc<option>
                    </select><br>
                Tên q/h không dấu: <input value="{{$data->TenQuanHuyenKhongDau}}" name="txttenkhongdau" style="width: 300px;margin-left: 60px"  type="text" required><br>
                <input value="{{$data->ID_QuanHuyen}}" name="id" style="width: 300px;margin-left: 80px"  type="hidden" >
                @else
                    
                    Tên quận huyện: <input class="mb-4" style="width: 300px;margin-left: 70px"  type="text" required name="txtquanhuyen"><br>
                    ID tỉnh thành phố: <input class="mb-4" style="width: 300px;margin-left: 70px"  type="text" required name="txtthanhpho"><br>
                    Trạng thái: <select class="mb-4" name="txttrangthai" style="width: 300px;margin-left: 100px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                            <option value="1">Hiện<option>
                            <option value="2">Ẩn<option>
                            <option value="3">Nổi bậc<option>
                        </select><br>
                    Tên q/h không dấu: <input name="txttenkhongdau" style="width: 300px;margin-left: 60px"  type="text" required><br>
                    @endif
                </fieldset>
                <div>
                        <button style="width: 80px;height: 30px;margin-left: 30px;" type="submit" class="mt-3">Xác nhận</button>
                </div>
        </form>
    </div>