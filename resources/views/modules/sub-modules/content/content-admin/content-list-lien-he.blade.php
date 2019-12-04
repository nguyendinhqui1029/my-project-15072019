<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Tên liên hệ</th>
            <th scope="col">Email</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Nội dung</th>
            <th scope="col"> Địa chỉ</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lienhe as $item)
        <tr>
        <th scope="row">{{$item->TenLienHe}}</th>
            <td>{{$item->Email}}</td>
            <th>{{$item->SoDienThoai}}</th>
            <td>{{$item->DiaChi}}</td>
            <td>{{$item->TieuDe}}</td>
            <td>{{$item->NoiDung}}</td>
            <td>
                    <a onclick="myFunction()" href="{{url('delete-lien-he-gop-y?id='.$item->ID_LienHe)}}" class="btn btn-success">Xóa</a>
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