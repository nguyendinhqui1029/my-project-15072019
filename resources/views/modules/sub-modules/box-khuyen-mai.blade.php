<p style="font-size: 16px;margin-top: 5px; color: #57A710;font-weight: 700">CHÍNH SÁCH ƯU ĐÃI KHUYẾN MÃI GIÀNH CHO BẠN</p>
@foreach ($listData as $item)
    @component('modules.sub-modules.khuyen-mai')
        {{-- class card --}}
        @slot('classContentParentCart')
        {{-- {{$boxClass->classContentParentCart}} --}}
        @endslot
        @slot('classContentCart')
        {{-- {{$boxClass->classContentCart}} --}}
        @endslot
        @slot('classCartImage')
        {{-- {{$boxClass->classCartImage}} --}}
        @endslot
        @slot('classImage')
        {{-- {{$boxClass->classImage}} --}}
        @endslot
        @slot('classCartTitle')
        {{-- {{$boxClass->classCartTitle}} --}}
        @endslot
        @slot('classContent')
        {{-- {{$boxClass->classContent}} --}}
        @endslot
        {{-- class card --}}
        @slot('imageCard')
            {{$item->image}}
        @endslot
        @slot('contentCart')
            {{$item->title}}
        @endslot
        @slot('alt')
            {{-- {{$item->alt}} --}}
        @endslot
        @slot('contentTitleCart')
        {{$item->content}}
        @endslot
        @slot('link')
            {{-- {{$item->link}} --}}
        @endslot
    @endcomponent
@endforeach