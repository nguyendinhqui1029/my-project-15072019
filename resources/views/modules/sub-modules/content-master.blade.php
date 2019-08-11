@foreach ($listContentMaster as $contentMaster)
        @if ($contentMaster->isClassContainerRow)
        <div class="row {{$contentMaster->classCssContainerRow}}">
                @foreach ($contentMaster->listUrlComponent as $items)
                        @if (is_array($items))
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        @foreach ($items as $item)
                                                @include($item) 
                                        @endforeach
                        </div>
                        @else
                                @include($items) 
                        @endif
                       
                @endforeach
        </div>
        @else
                <div class="{{$contentMaster->classCssContainerRow}}">
                        @foreach ($contentMaster->listUrlComponent as $items)
                                @if (is_array($items))
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        @foreach ($items as $item)
                                                @include($item) 
                                        @endforeach
                                </div>

                                @else
                                        @include($items) 
                                @endif
                        @endforeach
                </div>
        @endif     
@endforeach