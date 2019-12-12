<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Tên doanh nghiệp</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Tổng giá</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($doanhnghiep as $item)
        <tr>
        <th scope="row">{{$item->TenDoanhNghiep}}</th>
            <td>{{$item->SoDienThoai}}</td>
            <td>{{$item->TongGia}}</td>
            <td>{{$item->TrangThai}}</td>
            <td>
                <a onclick="myFunction()" href="{{url('delete-doanh-nghiep?id='.$item->ID_DoanhNghiep)}}" class="btn btn-success">Xóa</a>
                <script>
                        function myFunction() {
                        alert("Bạn có muốn xóa không!");
                        }
                </script>
            </td>
        </tr>
        @endforeach
        <p style="font-weight: bold;margin-top: 10px;margin-left: 10px">Tổng số hàng :  {{ count($doanhnghiep)}}</p>
    </tbody>
</table>