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
            @foreach ($kinhnghiem as $item)
            <tr>
            <th scope="row">{{$item->TieuDe}}</th>
                <td>{{$item->NoiDungTomTat}}</td>
                <td>{{$item->NoiDungChiTiet}}</td>
                <td>{{$item->HinhAnh}}</td>
                <td>{{$item->TrangThai}}</td>
                <td>
                        <a href="{{url('admin-kinh-nghiem?chucnang=update&id='.$item->ID_KinhNghiem)}}" class="btn btn-danger">Chỉnh sửa</a>
                        <a onclick="myFunction()" href="{{url('delete-kinh-nghiem?id='.$item->ID_KinhNghiem)}}" class="btn btn-success">Xóa</a>
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