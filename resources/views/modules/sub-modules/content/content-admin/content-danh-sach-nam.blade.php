<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Tên quận bán</th>
                <th scope="col">Tên người mua</th>
                <th scope="col">Ngày bán</th>
                <th scope="col">Giá bán</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($thongke as $item)
            <tr>
            <th scope="row">{{$item->TenQuanBan}}</th>
                <td>{{$item->TenNguoiMua}}</td>
                <td>{{$item->NgayBan}}</td>
                <td>{{$item->GiaBan}}</td>
                <td>
                    {{-- <a href="{{url('admin-thong-ke')}}" class="btn btn-danger">Chỉnh sửa</a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="sum" style="text-align: center;margin-left: 500px">
            <form action="{{url('nam-thong-ke')}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" class="p-1" name="ngay"/> 
    </div>