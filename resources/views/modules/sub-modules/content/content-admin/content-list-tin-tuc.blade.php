<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Tên tin tức</th>
            <th scope="col">Nội dung tóm tắt tin tức</th>
            <th scope="col">Ngày đăng</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col"> Nội dung chi tiết</th>
            <th scope="col">Loại tin tức</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tintuc as $item) 
        <tr>
        <th scope="row">{{$item->TenTinTuc}}</th>
            <td>{{$item->NoiDungTomTatTinTuc}}</td>
            <td>{{$item->NgayDangTinTuc}}</td>
            <td>{{$item->HinhAnhTinTuc}}</td>
            <td>{{$item->NoiDungChiTietTinTuc}}</td>
            <td>{{$item->ID_LoaiTinTuc}}</td>
            <td>{{$item->TrangThai}}</td>
            <td>
                    <a href="{{ url('admin-tin-tuc?chucnang=update&id='.$item->ID_TinTuc)}}" class="btn btn-danger">Chỉnh sửa</a>
                    <a onclick="myFunction()" href="{{url('delete-tin-tuc?id='.$item->ID_TinTuc)}}" class="btn btn-success">Xóa</a>
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