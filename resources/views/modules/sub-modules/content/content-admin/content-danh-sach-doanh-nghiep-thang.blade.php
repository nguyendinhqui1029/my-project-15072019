<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Tên doanh nghiệp</th>
            <th scope="col">Số điện thoại</th>
            {{-- <th scope="col">Thời gian bán</th> --}}
            <th scope="col">Tổng giá</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($doanhnghiep as $item)
        <tr>
        <th scope="row">{{$item->TenDoanhNghiep}}</th>
        <td>{{$item->SoDienThoai}}</td>
        {{-- <td>{{$item->NgayBan}}</td> --}}
        <td>{{$item->TongGia}}</td>
            <td>
                {{-- <a href="{{url('admin-thong-ke')}}" class="btn btn-danger">Chỉnh sửa</a> --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="sum" style="text-align: center;margin-left: 500px">
    <form action="{{url('thong-ke-doanh-nghiep')}}" method="post">
            {{ csrf_field() }}
            <input style="border: 1px solid white"  class="p-1" name="name"  type="hidden"/> 
            <input style="border: 1px solid white"  class="p-1" name="ngay"  type="hidden"/> 
            {{-- <button type="submit" class="p-1" ></button> --}}
    </form>
        
    
    </div>