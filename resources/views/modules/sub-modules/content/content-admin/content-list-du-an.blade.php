<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Tên dự án</th>
            <th scope="col">Mô tả dự án</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($duan as $item)
        <tr>
        <th scope="row">{{$item->TenDuAn}}</th>
            <td>{{$item->MoTaDuAn}}</td>
            <td>{{$item->TrangThai}}</td>
            <td>
                <a href="{{url('admin-du-an?chucnang=update&id='.$item->ID_DuAn)}}" class="btn btn-danger">Chỉnh sửa</a>
                <a onclick="myFunction()" href="{{url('delete-du-an?id='.$item->ID_DuAn)}}" class="btn btn-success">Xóa</a>
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