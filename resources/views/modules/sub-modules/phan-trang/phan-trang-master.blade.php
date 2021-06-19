
@if ($mode == "horizontal")
    <div class="d-flex justify-content-center">
        {{$data}}
    </div>  
@else
    <div class="d-flex flex-column bd-highlight justify-content-center">
       {{$data}}
    </div>
@endif