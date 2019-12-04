<div class="admin">
        <form action="{{url('admin-du-an?chucnang='.$chucnang)}}" method="POST">
                {!! csrf_field() !!}
            <fieldset>
                <legend style="margin-bottom: 30px; ">Dự Án</legend>
                @if (!empty($data))
            Tên dự án: <input value="{{$data->TenDuAn}}" style="width: 300px;margin-left: 70px"  type="text" required name="txtduan"><br>
            Mô tả dự án: <input value="{{$data->MoTaDuAn}}" style="width: 300px;margin-left: 60px"  type="text" required name="txtmota"><br>
                Trạng thái: <select name="txttrangthai" style="width: 300px;margin-left: 70px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
                                <option value="1" {{$data->TrangThai ===1 ? "selected":''}}>Hiện<option>
                                <option value="2" {{$data->TrangThai ===2 ? "selected":''}}>Ẩn<option>
                                <option value="3" {{$data->TrangThai ===3 ? "selected":''}}>Nổi bậc<option>
                            </select><br>
                <input value="{{$data->ID_DuAn}}" name="id" style="width: 300px;margin-left: 80px"  type="hidden" >
                @else
                    
                    Tên dự án: <input class="mb-4" style="width: 300px;margin-left: 70px"  type="text" required name="txtduan"><br>
                    Mô tả dự án: <input class="mb-4" style="width: 300px;margin-left: 60px"  type="text" required name="txtmota"><br>
                    Trạng thái: <select name="txttrangthai" style="width: 300px;margin-left: 70px;height: 30px;border: 1px solid #e0e0e0;border-radius: 3px;">
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