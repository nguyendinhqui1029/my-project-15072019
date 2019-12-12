<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Tên quận huyện</th>
            <th scope="col">ID tỉnh thành phố</th>
            <th scope="col">Tên q/h không dấu</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($quanhuyen as $item)
        <tr>
        <th scope="row">{{$item->TenQuanHuyen}}</th>
            <td>{{$item->ID_TinhThanhPho}}</td>
            <td>{{$item->TenQuanHuyenKhongDau}}</td>
            <td>{{$item->TrangThai}}</td>
            <td>
                <a href="{{url('admin-quan-huyen?chucnang=update&id='.$item->ID_QuanHuyen)}}" class="btn btn-danger">Chỉnh sửa</a>
                <a onclick="myFunction()" href="{{url('delete-quan-huyen?id='.$item->ID_QuanHuyen)}}" class="btn btn-success">Xóa</a>
                <script>
                        function myFunction() {
                        alert("Bạn có muốn xóa không!");
                        }
                </script>
            </td>
        </tr>
        @endforeach
        <p style="font-weight: bold;margin-top: 10px;margin-left: 10px">Tổng số sản phẩm :  {{ count($quanhuyen)}}</p>
    </tbody>
</table>