<div class="admin">
        <form action="{{url('admin-nha-moi-gioi?chucnang='.$chucnang)}}" method="POST">
                {!! csrf_field() !!}
            <fieldset>
                <legend style="margin-bottom: 30px; ">Nhà Môi Giới</legend>
                @if (!empty($data))
                Tên nhà môi giới: <input value="{{$data->TenNhaMoiGioi}}" style="width: 300px;margin-left: 70px"  type="text" required name="txtname"><br>
                Số điện thoại: <input value="{{$data->SoDienThoai}}" style="width: 300px;margin-left: 95px"  type="text" required name="txtphone"><br>
            Địa chỉ: <input value="{{$data->DiaChi}}" class="mb-4" style="width: 300px;margin-left: 95px"  type="text" required name="txtaddress"><br>
            Nội dung tóm tắt: <input value="{{$data->NoiDungTomTat}}" class="mb-4" style="width: 300px;margin-left: 80px"  type="text" required name="txtcontent"><br>
            Nội dung chi tiết: <input value="{{$data->NoiDungChiTiet}}" class="mb-4" style="width: 300px;margin-left: 80px"  type="text" required name="txtcontent"><br>
            Ảnh đại diện: <input value="{{$data->AnhDaiDien}}" id="myFile" class="mb-4" style="width: 300px;margin-left: 80px"  type="file" required name="txtavatar"><br>
                Trạng thái: <select name="txtstatus" style="width: 300px;margin-left: 120px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                        <option value="1" {{$data->TrangThai === 1? "selected":''}}>Hiện<option>
                        <option value="2" {{$data->TrangThai === 2? "selected":''}}>Ẩn<option>
                        <option value="3" {{$data->TrangThai === 3? "selected":''}}>Nổi bậc<option>
                    </select><br>
                
                {{-- ID loại sản phẩm: <input value="{{$data->Sub_IDLoaiSanPham}}" style="width: 300px;margin-left: 80px"  type="text" required name="txtloaisanpham"><br> --}}
                <input value="{{$data->ID_MoiGioi}}" name="id" style="width: 300px;margin-left: 80px"  type="hidden" >
                @else
                    
                    Tên nhà môi giới: <input class="mb-4" style="width: 300px;margin-left: 70px"  type="text" required name="txtname"><br>
                    Số điện thoại: <input class="mb-4" style="width: 300px;margin-left: 95px"  type="text" required name="txtphone"><br>
                    Địa chỉ: <input class="mb-4" style="width: 300px;margin-left: 140px"  type="text" required name="txtaddress"><br>
                    Nội dung tóm tắt: <input class="mb-4" style="width: 300px;margin-left: 80px"  type="text" required name="txtcontent"><br>
                    Nội dung chi tiết: <input  class="mb-4" style="width: 300px;margin-left: 80px"  type="text" required name="txtnoidungchitiet"><br>
                    Ảnh đại diện: <input class="mb-4" style="width: 300px;margin-left: 80px"  type="file" required name="txtavatar"><br>
                    Trạng thái: <select class="mb-4" name="txtstatus" style="width: 300px;margin-left: 120px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                            <option value="1">Hiện<option>
                            <option value="2">Ẩn<option>
                            <option value="3">Nổi bậc<option>
                        </select><br>
                    
                    {{-- ID loại sản phẩm: <input style="width: 300px;margin-left: 80px"  type="text" required name="txtloaisanpham"><br> --}}
                    @endif
                </fieldset>
                <div>
                        <button style="width: 80px;height: 30px;margin-left: 30px;" type="submit" class="mt-3">Xác nhận</button>
                </div>
        </form>
    </div>