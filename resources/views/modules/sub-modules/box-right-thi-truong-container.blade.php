@component('modules.sub-modules.box-right.box-right-master')
@slot('classContainer')
{{$boxrightthitruong->classContainer." border2"}}
{{-- d-flex flex-column bd-highlight mb-3 border-right --}}
@endslot
@slot('classBoxTitle')
{{$boxrightthitruong->classBoxTitle." border-header1"}}
{{-- p-2 bd-highlight --}}
@endslot
@slot('classTitle')
{{$boxrightthitruong->classTitle." text-left pt-2 text-color"}}
@endslot
@slot('contentTitle')
{{__($boxrightthitruong->contentTitle= "title_thi_truong")}}
@endslot
@slot('classColumnBoxData')
@endslot

@slot('data')
    @foreach ($boxrightthitruong->data as $item )
        @component('modules.sub-modules.box-right.data-box-right')
            @slot('link')
                {{$item->link=" "}}
            @endslot
            @slot('noidung')
               @include($item->noidung)
            @endslot
            @slot('classBoxData')
            {{$boxrightthitruong->classBoxData=" col-lg-12"}}
            @endslot
            @slot('classLinkData')
            {{$boxrightthitruong->classLinkData=' bd-highlight line-heigh'}}
            @endslot
        @endcomponent
    @endforeach
@endslot
@endcomponent


