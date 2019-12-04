<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Tên quận bán</th>
            <th scope="col">Tên người mua</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Giá bán</th>
            <th scope="col">Ngày bán</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($thongke as $item)
        <tr>
        <th scope="row">{{$item->TenQuanBan}}</th>
            <td>{{$item->TenNguoiMua}}</td>
            <td>{{$item->SoDienThoai}}</td>
            <td>{{$item->GiaBan}}</td>
            <td>{{$item->NgayBan}}</td>
            <td>
                <a href="{{url('admin-thong-ke?chucnang=update&id='.$item->ID_DaBan)}}" class="btn btn-danger">Chỉnh sửa</a>
                <a onclick="myFunction()" href="{{url('delete-thong-ke?id='.$item->ID_DaBan)}}" class="btn btn-success">Xóa</a>
                <script>
                        function myFunction() {
                        alert("Bạn có muốn xóa không!");
                        }
                </script>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>