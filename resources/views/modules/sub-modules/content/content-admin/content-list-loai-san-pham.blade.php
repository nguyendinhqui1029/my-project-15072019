
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Tên loại sản phẩm</th>
            <th scope="col">Mô tả</th>
            <th scope="col">ID loại sản phẩm</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($loaisanpham as $item)
        <tr>
        <th scope="row">{{$item->TenLoaiSanPham}}</th>
            <td>{{$item->MoTa}}</td>
            <td>{{$item->Sub_IDLoaiSanPham}}</td>
            <td>{{$item->TrangThai}}</td>
            <td>
                    <a href="{{url('admin-loai-san-pham?chucnang=update&id='.$item->ID_LoaiSanPham)}}" class="btn btn-danger">Chỉnh sửa</a>
                    <a onclick="myFunction()" href="{{url('delete-loai-san-pham?id='.$item->ID_LoaiSanPham)}}" class="btn btn-success">Xóa</a>
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