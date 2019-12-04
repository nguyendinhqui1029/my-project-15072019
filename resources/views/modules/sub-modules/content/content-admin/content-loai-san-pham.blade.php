<div class="admin">
        <form action="{{url('admin-loai-san-pham?chucnang='.$chucnang)}}" method="POST">
                {!! csrf_field() !!}
            <fieldset>
                <legend style="margin-bottom: 30px; ">Loại Sản Phẩm</legend>
                @if (!empty($data))
            Tên loại sản phẩm: <input value="{{$data->TenLoaiSanPham}}" style="width: 300px;margin-left: 70px"  type="text" required name="txtsanpham"><br>
                Mô tả: <input value="{{$data->MoTa}}" style="width: 300px;margin-left: 140px"  type="text" required name="txtmota"><br>
                Trạng thái: <select name="txttrangthai" style="width: 300px;margin-left: 120px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                        <option value="1" {{$data->TrangThai === 1? "selected":''}}>Hiện<option>
                        <option value="2" {{$data->TrangThai === 2? "selected":''}}>Ẩn<option>
                        <option value="3" {{$data->TrangThai === 3? "selected":''}}>Nổi bậc<option>
                    </select><br>
                
                ID loại sản phẩm: <input value="{{$data->Sub_IDLoaiSanPham}}" style="width: 300px;margin-left: 80px"  type="text" required name="txtloaisanpham"><br>
                <input value="{{$data->ID_LoaiSanPham}}" name="id" style="width: 300px;margin-left: 80px"  type="hidden" >
                @else
                    
                    Tên loại sản phẩm: <input class="mb-4" style="width: 300px;margin-left: 70px"  type="text" required name="txtsanpham"><br>
                    Mô tả: <input class="mb-4" style="width: 300px;margin-left: 140px"  type="text" required name="txtmota"><br>
                    Trạng thái: <select class="mb-4" name="txttrangthai" style="width: 300px;margin-left: 120px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                            <option value="1">Hiện<option>
                            <option value="2">Ẩn<option>
                            <option value="3">Nổi bậc<option>
                        </select><br>
                    
                    ID loại sản phẩm: <input style="width: 300px;margin-left: 80px"  type="text" required name="txtloaisanpham"><br>
                    @endif
                </fieldset>
                <div>
                        <button style="width: 80px;height: 30px;margin-left: 30px;" type="submit" class="mt-3">Xác nhận</button>
                </div>
        </form>
    </div>