<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Tên tỉnh thành phố</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Tên TP không dấu</th>
            <th scope="col">Khu vực</th>
            <th scope="col">Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tinhthanhpho as $item)
        <tr>
        <th scope="row">{{$item->TenTinhThanhPho}}</th>
            <td>{{$item->TrangThai}}</td>
            <td>{{$item->TenKhongDauTinhThanhPho}}</td>
            <td>{{$item->KhuVuc}}</td>
            <td>
                    <a href="{{url('admin-tinh-thanh-pho?chucnang=update&id='.$item->ID_TinhThanhPho)}}" class="btn btn-danger">Chỉnh sửa</a>
                    <a onclick="myFunction()" href="{{url('delete-tinh-thanh-pho?id='.$item->ID_TinhThanhPho)}}" class="btn btn-success">Xóa</a>
                <script>
                        function myFunction() {
                        alert("Bạn có muốn xóa không!");
                        }
                </script>
            </td>
        </tr>
        @endforeach
        <p style="font-weight: bold;margin-top: 10px;margin-left: 10px">Tổng số hàng :  {{ count($tinhthanhpho)}}</p>
    </tbody>
</table>