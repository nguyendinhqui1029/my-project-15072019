<div class="admin">
        <form action="{{url('admin-tin-tuc?chucnang='.$chucnang)}}" method="POST">
                {!! csrf_field() !!}
            <fieldset>
                <legend style="margin-bottom: 30px; ">Tin Tức</legend>
                    @if (!empty($data))
                        {{-- <legend style="margin-bottom: 30px; ">Tin Tức</legend> --}}
                        Tên tin tức: <input value="{{$data->TenTinTuc}}" name="txttintuc" style="width: 300px;margin-left: 70px"  type="text" ><br>
                        Nội dung tóm tắt tin tức: <input value="{{$data->NoiDungTomTatTinTuc}}" name="txtnoidungtomtat" style="width: 300px;margin-left: 10px"  type="text" ><br>
                        Hình ảnh: <input value="{{$data->HinhAnhTinTuc}}" name="txthinhanh" style="width: 300px;margin-left: 80px"  type="file" ><br>
                        Ngày đăng: <input value="{{$data->NgayDangTinTuc}}" name="txxtngay" style="width: 300px;margin-left: 70px;height: 30px;border-radius: 1px;border: 1px solid #e0e0e0"  type="date" ><br>
                        Trạng thái: <select  name="txttrangthai" style="width: 300px;margin-left: 70px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                                <option value="1"  {{$data->TrangThai === 1? "selected":''}}>Hiện<option>
                                <option value="2"  {{$data->TrangThai === 2? "selected":''}}>Ẩn<option>
                                <option value="3"  {{$data->TrangThai === 3? "selected":''}}>Nổi bậc<option>
                            </select><br>
                        Nội dung chi tiết: <input value="{{$data->NoiDungChiTietTinTuc}}" name="txtnoidungchitiet" style="width: 300px;margin-left: 40px"  type="text" ><br>
                        <input value="{{$data->ID_TinTuc}}" name="id" style="width: 300px;margin-left: 80px"  type="hidden" >
                            
                        @else
                        Tên tin tức: <input class="mb-4" value="" name="txttintuc" style="width: 300px;margin-left: 70px"  type="text" ><br>
                        Nội dung tóm tắt tin tức: <input class="mb-4" value="" name="txtnoidungtomtat" style="width: 300px;margin-left: 10px"  type="text" ><br>
                        Hình ảnh: <input class="mb-4" value="" name="txthinhanh" style="width: 300px;margin-left: 80px"  type="file" ><br>
                        Ngày đăng: <input class="mb-4" value="" name="txxtngay" style="width: 300px;margin-left: 70px;height: 30px;border-radius: 1px;border: 1px solid #e0e0e0"  type="date" ><br>
                        Trạng thái: <select class="mb-4" value="" name="txttrangthai" style="width: 300px;margin-left: 70px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                                <option value="1">Hiện<option>
                                <option value="2">Ẩn<option>
                                <option value="3">Nổi bậc<option>
                            </select><br>
                        Nội dung chi tiết: <input value="" name="txtnoidungchitiet" style="width: 300px;margin-left: 40px"  type="text" ><br>
                            
                    @endif
                </fieldset>
                <div>
                        <button style="width: 80px;height: 30px;margin-left: 30px;" type="submit" class="mt-3">Xác nhận</button>
                </div>
        </form>
    </div>