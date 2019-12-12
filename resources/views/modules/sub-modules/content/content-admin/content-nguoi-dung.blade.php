<div class="box-nguoidung">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Ngày đăng nhập</th>
                <th>Tùy chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adminn as $item)
            <tr>
                <th>{{$item->TenAdmin}}</th>
                <th>{{$item->EmailAdmin}}</th>
                <th>{{$item->DienThoaiAdmin}}</th>
                <th>{{$item->NgayTao}}</th>
                <th>
                <a onclick="MyFunction()" href="{{url ('delete-nguoi-dung?id='.$item->ID_Admin)}}" class="btn btn-success">Xóa</a>  
                <script>
                    function MyFunction(){
                        alert("Bạn có muốn xóa không !!!");
                    }
                    </script>
                </th>
            </tr>
            @endforeach
            <p style="font-weight: bold;margin-top: 10px;margin-left: 10px">Tổng số hàng :  {{ count($adminn)}}</p>
        </tbody>
    </table>
</div>