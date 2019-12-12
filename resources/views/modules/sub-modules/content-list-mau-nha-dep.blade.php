{{-- @foreach ($maunhadep as $item) --}}
<div class="row" style="margin-top: 20px;">
<div class="col-2"><img src="assets/images/{{$imageCard}}" width="100%"/></div>
    <div class="col-9" style="margin-top: 10px;margin-left: 10px;">
        <div> 
        <a href="mau-nha-dep-chi-tiet/{{$link}}">{{$contentTitleCart}}</a>
        </div>
        <div>
            <div class="{{$classContent}}" >
                {{$contentCart}}
            </div>
        </div>
    </div>
</div>
{{-- @endforeach --}}