<div class="admin">
        <form action="{{url('admin-tinh-thanh-pho?chucnang='.$chucnang)}}" method="POST">
                {!! csrf_field() !!}
            <fieldset>
                <legend style="margin-bottom: 30px; ">Tỉnh Thành Phố</legend>
                @if (!empty($data))
                    Tên tỉnh thành phố: <input value="{{$data->TenTinhThanhPho}}" name="txttinhthanh" style="width: 300px;margin-left: 70px"  type="text" required><br>
                    Trạng thái: <select name="txttrangthai" style="width: 300px;margin-left: 120px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                            <option value="1" {{$data->TrangThai === 1? "selected":''}}>Hiện<option>
                            <option value="2" {{$data->TrangThai === 2? "selected":''}}>Ẩn<option>
                            <option value="3" {{$data->TrangThai === 3? "selected":''}}>Nổi bậc<option>
                        </select><br>
                    Tên T/TP không dấu: <input value="{{$data->TenKhongDauTinhThanhPho}}" name="txtthanhpho" style="width: 300px;margin-left: 60px"  type="text" required><br>
                    Khu vực: <input value="{{$data->KhuVuc}}" name="txtkhuvuc" style="width: 300px;margin-left: 130px"  type="text" required><br>
                    <input value="{{$data->ID_TinhThanhPho}}" name="id" style="width: 300px;margin-left: 80px"  type="hidden" >
                    @else
                    
                    Tên tỉnh thành phố: <input class="mb-4" name="txttinhthanh" style="width: 300px;margin-left: 70px"  type="text" required><br>
                    Trạng thái: <select class="mb-4" name="txttrangthai" style="width: 300px;margin-left: 120px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                            <option value="1">Hiện<option>
                            <option value="2">Ẩn<option>
                            <option value="3">Nổi bậc<option>
                        </select><br>
                    Tên T/TP không dấu: <input class="mb-4" name="txtthanhpho" style="width: 300px;margin-left: 60px"  type="text" required><br>
                    Khu vực: <input name="txtkhuvuc" style="width: 300px;margin-left: 130px"  type="text" required><br>
                    @endif
                </fieldset>
                <div>
                        <button style="width: 80px;height: 30px;margin-left: 30px;" type="submit" class="mt-3">Xác nhận</button>
                </div>
        </form>
    </div>