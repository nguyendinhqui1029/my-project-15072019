@foreach ($nguoidangtin as $item)
<div style="margin-top: 20px;border: dashed 1px #777474;box-shadow: 5px 5px 5px rgba(61, 60, 60, 0.397);"><p style="color: red;float: right">Hôm nay</p>
    <div><a href="">{{$item->TieuDe}}</a> <img src="assets/images/new.gif" /></div>
        <div class="row" style="margin-top: 10px">
            <div class="col-6" style="margin-left: 5px"><b>Đại chỉ: </b>{{$item->DiaChi}}</div>
            <div class="col-5"><b>Giá bán: </b>{{$item->GiaBan}}</div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-6" style="margin-left: 5px"><b >Tên người bán: </b> {{$item->TenLienHe}}</div>
            <div class="col-5"><b>Số điện thoại: </b>{{$item->DienThoai}}</div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-6" style="margin-left: 5px"><b>Chiều dài: </b> {{$item->ChieuDai}}</div>
            <div class="col-5"><b>Chiều rộng: </b> {{$item->ChieuRong}}</div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-6" style="margin-left: 5px"><b>Phòng ngủ: </b> {{$item->PhongNgu}}</div>
            <div class="col-5"><b>Số lầu: </b> {{$item->SoLau}}</div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-11" style="margin-left: 5px"><b>Diện tích: </b> {{$item->DienTich}}</div>
        </div>
    </div>
@endforeach