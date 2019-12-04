
<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Tên Admin</th>
                <th scope="col">Email Admin</th>
                <th scope="col">Điện thoại Admin</th>
                <th scope="col">Mật khẩu Admin</th>
                <th scope="col">Ảnh đại diện</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Role</th>
                <th scope="col">Tùy chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admin as $item)
            <tr>
            <th scope="row">{{$item->TenAdmin}}</th>
                <td>{{$item->EmailAdmin}}</td>
                <td>{{$item->DienThoaiAdmin}}</td>
                <td>{{$item->MatKhauAdmin}}</td>
                <td>{{$item->AnhDaiDien}}</td>
                <td>{{$item->TrangThai}}</td>
                <td>{{$item->Role}}</td>
                <td>
                        <a href="{{url('add-tai-khoan?chucnang=update& id='.$item->ID_Admin)}}" class="btn btn-danger">Chỉnh sửa</a>
                        <a onclick="myFunction()" href="{{url('delete-danh-sach?id='.$item->ID_Admin)}}" class="btn btn-success">Xóa</a>
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