@foreach ($maunhadep as $item)
<div class="row" style="margin-top: 20px;">
<div class="col-2"><img src="assets/images/maunhadep4.jpg" width="100%"/></div>
    <div class="col-9" style="margin-top: 10px;margin-left: 10px;">
        <div> 
        <a href="mau-nha-dep-chi-tiet/{{$item->ID_MauNhaDep}}">{{$item->TieuDe}}</a>
        </div>
        <div>
        <p>{{$item->NoiDungTomTat}}</p>
        </div>
    </div>
</div>
@endforeach