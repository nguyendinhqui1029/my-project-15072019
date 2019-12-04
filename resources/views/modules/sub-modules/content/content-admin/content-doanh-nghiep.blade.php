<div class="admin">
        <form action="{{url('admin-doanh-nghiep?chucnang='.$chucnang)}}" method="POST">
                {!! csrf_field() !!}
            <fieldset>
                <legend style="margin-bottom: 30px; ">Thêm Doanh Nghiệp</legend>
                @if (!empty($data))
            Tên doanh nghiệp: <input value="{{$data->TenDoanhNghiep}}" style="width: 300px;margin-left: 70px"  type="text" required name="txtdoanhnghiep"><br>
            Số điện thoại: <input value="{{$data->SoDienThoai}}" style="width: 300px;margin-left: 90px"  type="text" required name="txtdienthoai"><br>
            Nơi bán: <input value="{{$data->NoiBan}}" style="width: 300px;margin-left: 120px"  type="text" required name="txtnoiban"><br>
            Tổng giá: <input value="{{$data->TongGia}}" style="width: 300px;margin-left: 120px"  type="text" required name="txttong"><br>
            Ngày bán: <input value="{{$data->NgayBan}}" style="width: 300px;margin-left: 110px;height: 20px;margin-bottom: 5px;border: 1px solid wheat"  type="date" required name="txtngayban"><br>
                Trạng thái: <select name="txttrangthai" style="width: 300px;margin-left: 110px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                                <option value="1" {{$data->TrangThai ===1 ? "selected":''}}>Hiện<option>
                                <option value="2" {{$data->TrangThai ===2 ? "selected":''}}>Ẩn<option>
                                <option value="3" {{$data->TrangThai ===3 ? "selected":''}}>Nổi bậc<option>
                            </select><br>
                <input value="{{$data->ID_DoanhNghiep}}" name="id" style="width: 300px;margin-left: 80px"  type="hidden" >
                @else
                    
                Tên doanh nghiệp: <input class="mb-4" style="width: 300px;margin-left: 70px"  type="text" required name="txtdoanhnghiep"><br>
                Số điện thoại: <input class="mb-4" style="width: 300px;margin-left: 90px"  type="text" required name="txtdienthoai"><br>
                Nơi bán: <input  style="width: 300px;margin-left: 120px"  type="text" required name="txtnoiban"><br>
                Tổng giá: <input style="width: 300px;margin-left: 120px"  type="text" required name="txttong"><br>
                Ngày bán: <input style="width: 300px;margin-left: 110px;height: 20px;margin-bottom: 5px;border: 1px solid wheat"  type="date" required name="txtngayban"><br>
                    Trạng thái: <select name="txttrangthai" style="width: 300px;margin-left: 110px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
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