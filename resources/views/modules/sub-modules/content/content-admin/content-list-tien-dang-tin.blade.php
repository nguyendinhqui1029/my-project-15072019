<table class="table table-striped">
        <thead>
            <tr>
                {{-- <th scope="col">Tên người đăng</th> --}}
                <th scope="col">Ngày đăng tin</th>
                <th scope="col">Diện tích</th>
                <th scope="col">Tổng giá </th>
                <th scope="col">Tùy chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tiendangtin as $item)
            <tr>
            {{-- <th scope="row">{{$item->TenAdmin}}</th> --}}
                <td>{{$item->NgayDangTin}}</td>
                <td>{{$item->DienTich}}</td>
                <td>{{$item->Tong}}</td>
                <td>
                    {{-- <a href="{{url('admin-quan-huyen?chucnang=update&id='.$item->ID_QuanHuyen)}}" class="btn btn-danger">Chỉnh sửa</a> --}}
                    <a onclick="myFunction()" href="{{url('delete-tien-dang-tin-ngay?id='.$item->ID_DangTin)}}" class="btn btn-success">Xóa</a>
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

    <div class="sum" style="text-align: center;margin-left: 500px">
            <form action="{{url('ngay-thong-ke')}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" class="p-1" name="ngay"/> 
            </form>
                
            
            </div>