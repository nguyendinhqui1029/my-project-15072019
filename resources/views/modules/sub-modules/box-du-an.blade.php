@component('modules.sub-modules.box-du-an-noi-bat.box-du-an-noi-bat-master')
{{-- Add class for box --}}
@slot('classContainerParent')
{{$boxClass->classContainerParent}}
@endslot
@slot('classContainerParentHeader')
{{$boxClass->classContainerParentHeader}}
@endslot
@slot('classContentHeader')
{{$boxClass->classContentHeader}}
@endslot
@slot('classContainerSeeMore')
{{$boxClass->classContainerSeeMore}}
@endslot
@slot('classContentSeeMore')
{{$boxClass->classContentSeeMore}}
@endslot
@slot('classContentImageTop')
{{$boxClass->classContentImageTop}}
@endslot
@slot('classContentImage')
{{$boxClass->classContentImage}}
@endslot
@slot('classParentCart')
{{$boxClass->classParentCart =' row border-duan'}}
@endslot
@slot('classContentTieude')
{{$boxClass->classContentTieude=' d-none'}}
@endslot
@slot('classContent')
@endslot

{{-- Add class for box --}}

{{-- Add data for box --}}
        {{-- data for Title and see more --}}
            @slot('contentTitle')
            {{__('title_bat_dong_san_noi_bat')}}
            @endslot
            @slot('contentSeeMore')
            {{__('title_xem_them')}}
            @endslot
            @slot('contentURLImage')
               anh-noi-bat.png
            @endslot
            @slot('content')
           
            @endslot
        {{-- data for Title and see more --}}
        {{-- data for card --}}
        @section('list-cart')
            @foreach ($listData as $item)
                @component('modules.sub-modules.box-du-an-noi-bat.card-du-an-noi-bat')
                  {{-- class card --}}
                  @slot('classContentParentCart')
                  {{$boxClass->classContentParentCart}}
                  @endslot
                  @slot('classContentCart')
                  {{$boxClass->classContentCart}}
                  @endslot
                  @slot('classCartImage')
                  {{$boxClass->classCartImage}}
                  @endslot
                  @slot('classImage')
                  {{$boxClass->classImage}}
                  @endslot
                  @slot('classCartTitle')
                  {{$boxClass->classCartTitle}}
                  @endslot
                  @slot('classContent')
                  {{$boxClass->classContent}}
                  @endslot
                  {{-- class card --}}
                    @slot('imageCard')
                        {{$item->image}}
                    @endslot
                    @slot('contentCart')
                        {{$item->content}}
                    @endslot
                    @slot('alt')
                        {{$item->alt}}
                    @endslot
                    @slot('contentTitleCart')
                        {{$item->title}}
                    @endslot
                    @slot('link')
                        {{$item->link}}
                    @endslot
                @endcomponent
            @endforeach
        @endsection
        {{-- data for card --}}
{{-- Add data for box --}}
@endcomponent