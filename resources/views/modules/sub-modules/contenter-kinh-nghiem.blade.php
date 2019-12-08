{{-- @foreach ($listData as $item) --}}
<div class="row" style="margin-top: 20px;">
    {{-- <div class="col-2"><img src="assets/images/{{$imageCard}}" width="100%"/></div> --}}

    <div class="col-2"><img src="assets/images/{{$imageCard}}" width="100%"/></div>
    <div class="col-9" style="margin-top: 10px;margin-left: 10px;">
        <div> 
            {{-- <a href="">9 cách chống nóng, giảm nhiệt nhà siêu đơn giản có thể bạn chưa biết</a> --}}
        {{-- <a href="kinh-nghiem-chi-tiet/{{$item->ID_KinhNghiem}}">{{$item->TieuDe}}</a> --}}
        </div>
        <div>
        {{-- <p>{{$item->NoiDungTomTat}}</p> --}}
        <a href="kinh-nghiem-chi-tiet/{{$link}}"><h6><b >{{$contentTitleCart}}</b></h6></a>
        <div class="{{$classContent}}" >
                {{$contentCart}}
            </div>
                {{-- <p>Không cần tốn điện bật điều hòa cả ngày, nếu áp dụng những cách đơn giản này bạn có thể phần nào khắc phục được cái nóng oi bức “tấn công” n</p> --}}
        </div>
    </div>
</div>
{{-- @endforeach --}}