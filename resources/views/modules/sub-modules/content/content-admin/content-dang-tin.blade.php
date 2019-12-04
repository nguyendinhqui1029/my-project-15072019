<div class="box-nguoidung">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Địa chỉ</th>
                <th>Giá bán</th>
                <th>Diện tích</th>
                <th>Tên người liên hệ</th>
                <th>Điện thoại</th>
                <th>Số lầu</th>
                <th>Phòng ngủ</th>
                <th>Hình ảnh</th>
                <th>Số ngày đăng</th>
                <th>Tổng tiền</th>
                <th>Hoạt động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dangtin as $item)
            <tr>
                <th>{{$item->TieuDe}}</th>
                <th>{{$item->NoiDung}}</th>
                <th>{{$item->DiaChi}}</th>
                <th>{{$item->GiaBan}}</th>
                <th>{{$item->DienTich}}</th>
                <th>{{$item->TenLienHe}}</th>
                <th>{{$item->DienThoai}}</th>
                <th>{{$item->SoLau}}</th>
                <th>{{$item->PhongNgu}}</th>
                <th>{{$item->HinhAnh}}</th>
                <th>{{$item->SoNgayDang}}</th>
                <th>{{$item->Tong}}</th>
                <th>
                <a onclick="MyFunctionn()" href="{{url ('delete-dang-tin?id='.$item->ID_DangTin)}}" class="btn btn-success">Xóa</a>
                <a  href="" class="btn btn-success">Đăng tin</a>
                <script>
                    function MyFunctionn(){
                        alert("Bạn có muốn xóa không !!!");
                    }
                    </script>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>