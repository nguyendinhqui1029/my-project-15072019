<div class="admin">
    <form action="{{url('admin-thong-ke?chucnang='.$chucnang)}}" method="POST">
            {!! csrf_field() !!}
        <fieldset>
        <legend style="margin-bottom: 30px; ">Nhập nơi đã bán</legend>
                @if (!empty($data))
                        Tên Quận/Huyện bán: <input value="{{$data->TenQuanBan}}" name="txtquanhuyen" style="width: 300px;margin-left: 60px"  type="text" ><br>
                        Tên người mua: <input value="{{$data->TenNguoiMua}}" name="txtnguoimua" style="width: 300px;margin-left: 90px"  type="text" ><br>
                        Số điện thoại người mua: <input value="{{$data->SoDienThoai}}" name="txtsdt" style="width: 300px;margin-left: 40px"  type="text" ><br>
                        Giá bán: <input value="{{$data->GiaBan}}" name="txtgiaban" style="width: 300px;margin-left: 130px"  type="text" ><br>
                        Ngày bán: <input value="{{$data->NgayBan}}"  name="txxtngay" style="width: 300px;margin-left: 120px;height: 30px;border-radius: 1px;border: 1px solid #e0e0e0"  type="date" ><br>
                        Trạng thái: <select  name="txttrangthai" style="width: 300px;margin-left: 120px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                                <option value="1" {{$data->TrangThai === 1? "selected":''}} >Hiện<option>
                                <option value="2" {{$data->TrangThai === 2? "selected":''}}>Ẩn<option>
                                <option value="3" {{$data->TrangThai === 3? "selected":''}} >Nổi bậc<option>
                                </select><br>
                        <input value="{{$data->ID_DaBan}}" name="id" style="width: 300px;margin-left: 80px"  type="hidden" >
                @else
                        Tên Quận/Huyện bán: <input class="mb-4" name="txtquanhuyen" style="width: 300px;margin-left: 60px"  type="text" ><br>
                        Tên người mua: <input class="mb-4" name="txtnguoimua" style="width: 300px;margin-left: 90px"  type="text" ><br>
                        Số điện thoại người mua: <input class="mb-4" name="txtsdt" style="width: 300px;margin-left: 40px"  type="text" ><br>
                        Giá bán: <input class="mb-4"  name="txtgiaban" style="width: 300px;margin-left: 130px"  type="text" ><br>
                        Ngày bán: <input class="mb-4" name="txxtngay" style="width: 300px;margin-left: 120px;height: 30px;border-radius: 1px;border: 1px solid #e0e0e0"  type="date" ><br>
                        Trạng thái: <select  name="txttrangthai" style="width: 300px;margin-left: 120px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                                <option value="1"  >Hiện<option>
                                <option value="2" >Ẩn<option>
                                <option value="3"  >Nổi bậc<option>
                                </select><br>
                @endif 
        </fieldset>
        <div>
                <button style="width: 80px;height: 30px;margin-left: 30px;" type="submit" class="mt-3">Xác nhận</button>
        </div>
        </form>
</div>