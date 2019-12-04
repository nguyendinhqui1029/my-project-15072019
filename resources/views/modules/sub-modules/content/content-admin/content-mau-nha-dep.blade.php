<div class="admin">
    <form action="{{url('admin-mau-nha-dep?chucnang='.$chucnang)}}" method="POST">
            {!! csrf_field() !!}
        <fieldset>
            <legend style="margin-bottom: 30px; ">Mẫu Nhà Đẹp</legend>
            @if (!empty($data))
        Tiêu đề: <input value="{{$data->TieuDe}}" style="width: 300px;margin-left: 100px"  type="text" required name="txttieude"><br>
        Nội dung tóm tắt: <input value="{{$data->NoiDungTomTat}}" style="width: 300px;margin-left: 60px"  type="text" required name="txtnoidungtomtat"><br>
        Nội dung chi tiết: <textarea value="{{$data->NoiDungChiTiet}}" style="height: 350px;width: 300px;margin-left: 60px"  type="text" required name="txtnoidungchitiet"></textarea><br>
        Hình ảnh: <input value="{{$data->HinhAnh}}" style="width: 300px;margin-left: 60px"  type="file" required name="txthinhanh"><br>
            Trạng thái: <select name="txttrangthai" style="width: 300px;margin-left: 70px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                            <option value="1" {{$data->TrangThai ===1 ? "selected":''}}>Hiện<option>
                            <option value="2" {{$data->TrangThai ===2 ? "selected":''}}>Ẩn<option>
                            <option value="3" {{$data->TrangThai ===3 ? "selected":''}}>Nổi bậc<option>
                        </select><br>
            <input value="{{$data->ID_MauNhaDep}}" name="id" style="width: 300px;margin-left: 80px"  type="hidden" >
            @else
                
            Tiêu đề: <input  style="width: 300px;margin-left: 110px"  type="text" required name="txttieude"><br>
            Nội dung tóm tắt: <input  style="width: 300px;margin-left: 60px"  type="text" required name="txtnoidungtomtat"><br>
            Nội dung chi tiết: <textarea  style="margin-left: 60px;width: 300px;
            border-radius: 5px;
            border: 1px solid #d0d0d0;
          
            height: 350px;"  type="text" required name="txtnoidungchitiet"></textarea><br>
            Hình ảnh: <input  style="width: 300px;margin-left: 100px"  type="file" required name="txthinhanh"><br>
                Trạng thái: <select name="txttrangthai" style="width: 300px;margin-left: 100px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
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