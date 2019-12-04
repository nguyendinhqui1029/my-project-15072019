
<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Tên nhà môi giới</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Nội dung tóm tắt</th>
                <th scope="col">Nội dung chi tiết</th>
                <th scope="col">Ảnh đại diện</th>
                <th scope="col">Trạng Thái</th>
                <th scope="col">Tùy Chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nhamoigioi as $item)
            <tr>
            <th scope="row">{{$item->TenNhaMoiGioi}}</th>
                <td>{{$item->SoDienThoai}}</td>
                <td>{{$item->DiaChi}}</td>
                <td>{{$item->NoiDungTomTat}}</td>
                <td>{{$item->NoiDungChiTiet}}</td>
                <td>{{$item->AnhDaiDien}}</td>
                <td>{{$item->TrangThai}}</td>
                <td>
                        <a href="{{url('admin-nha-moi-gioi?chucnang=update&id='.$item->ID_MoiGioi)}}" class="btn btn-danger">Chỉnh sửa</a>
                        <a onclick="myFunction()" href="{{url('delete-nha-moi-gioi?id='.$item->ID_MoiGioi)}}" class="btn btn-success">Xóa</a>
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