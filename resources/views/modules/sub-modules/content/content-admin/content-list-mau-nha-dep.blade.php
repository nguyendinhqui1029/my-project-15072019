<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Nội dung tóm tắt</th>
            <th scope="col">Nội dung chi tiết</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($maunhadep as $item)
        <tr>
        <th scope="row">{{$item->TieuDe}}</th>
            <td>{{$item->NoiDungTomTat}}</td>
            <td>{{$item->NoiDungChiTiet}}</td>
            <td>{{$item->HinhAnh}}</td>
            <td>{{$item->TrangThai}}</td>
            <td>
                    <a href="{{url('admin-mau-nha-dep?chucnang=update&id='.$item->ID_MauNhaDep)}}" class="btn btn-danger">Chỉnh sửa</a>
                    <a onclick="myFunction()" href="{{url('delete-mau-nha-dep?id='.$item->ID_MauNhaDep)}}" class="btn btn-success">Xóa</a>
                <script>
                        function myFunction() {
                        alert("Bạn có muốn xóa không!");
                        }
                </script>
            </td>
        </tr>
        @endforeach
        <p style="font-weight: bold;margin-top: 10px;margin-left: 10px">Tổng số sản phẩm :  {{ count($maunhadep)}}</p>
    </tbody>
</table>