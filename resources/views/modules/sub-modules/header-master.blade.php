<!-- header top -->
@foreach ($listHeaderMaster as $headerMaster)
    @if ($headerMaster->isClassContainerRow)
        <div class="row {{$headerMaster->classCssContainerRow}}">
                @foreach ($headerMaster->listUrlComponent as $item)
                    @include($item) 
                @endforeach
        </div>
    @else
        <div class="{{$headerMaster->classCssContainerRow}}">
            @foreach ($headerMaster->listUrlComponent as $item)
                @include($item) 
            @endforeach
        </div>
    @endif     
@endforeach
