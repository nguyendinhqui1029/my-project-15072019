@foreach ($listContentMaster as $contentMaster)
        @if ($contentMaster->isClassContainerRow)
        <div class="row {{$contentMaster->classCssContainerRow}}">
                @foreach ($contentMaster->listUrlComponent as $key=> $value)
                        @if (is_array($value))
                                @if($key ==1)
                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                <div class="mr-3">
                                                        @foreach ($value as $item)
                                                                @include($item) 
                                                        @endforeach
                                                </div>
                                        </div>
                                 @else
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                        @foreach ($value as $item)
                                                                @include($item) 
                                                        @endforeach
                                        </div>
                                @endif
                        @else
                                 @include($value) 
                        @endif
                       
                @endforeach
        </div>
        @else
                <div class="{{$contentMaster->classCssContainerRow}}">
                        @foreach ($contentMaster->listUrlComponent as $value)
                                @if (is_array($value))
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        @foreach ($value as $item)
                                                @include($item) 
                                        @endforeach
                                </div>

                                @else
                                        @include($value) 
                                @endif
                        @endforeach
                </div>
        @endif     
@endforeach