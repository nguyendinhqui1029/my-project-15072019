<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Tiêu đề1</th>
            <th scope="col">Hình ảnh1</th>
            <th scope="col">Tiêu đề 2</th>
            <th scope="col">Hình ảnh2</th>
            <th scope="col">Tiêu đề3</th>
            <th scope="col">Hình ảnh3</th>
            <th scope="col">Tiêu đề4</th>
            <th scope="col">Hình ảnh4</th>
            <th scope="col">Tiêu đề5</th>
            <th scope="col">Trạng Thái</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($khuyenmai as $item)
        <tr>
        <th scope="row">{{$item->TieuDe1}}</th>
            <td>{{$item->HinhAnh1}}</td>
            <td>{{$item->TieuDe2}}</td>
            <td>{{$item->HinhA2}}</td>
            <td>{{$item->TieuDe3}}</td>
            <td>{{$item->HinhAnh3}}</td>
            <td>{{$item->TieuDe4}}</td>
            <td>{{$item->HinhAnh4}}</td>
            <td>{{$item->TieuDe5}}</td>
            <td>{{$item->TrangThai}}</td>
            <td>
                <a href="{{url('add-khuyen-mai?chucnang=update&id='.$item->ID_KhuyenMai)}}" class="btn btn-danger">Chỉnh sửa</a>
            <a onclick="myFunction()" href="{{url('delete-khuyen-mai?id='.$item->ID_KhuyenMai)}}" class="btn btn-success">Xóa</a>
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