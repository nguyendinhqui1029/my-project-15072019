    @component('modules.sub-modules.box-right.box-right-master')
        @slot('classContainer')
        {{$boxright->classContainer}}
        @endslot
        @slot('classBoxTitle')
        {{$boxright->classBoxTitle= " mt-2 pt-2 background-mua-ban-nha-dat"}}
        @endslot
        @slot('classTitle')
        {{$boxright->classTitle}}
        @endslot
        @slot('contentTitle')
        {{$boxright->contentTitle=' Liên kết nổi bật'}}
        @endslot

        @slot('classColumnBoxData')
        row
        @endslot
        @slot('data')
            @foreach ($boxright->data as $item )
                @component('modules.sub-modules.box-right.data-box-right')
                    @slot('link')
                        {{$item->link}}
                    @endslot
                    @slot('noidung')
                        {{$item->noidung}} 
                    @endslot
                    @slot('classBoxData')
                    {{$boxright->classBoxData}}
                    {{-- p-2 bd-highlight --}}
                    @endslot
                    @slot('classLinkData')
                    {{$boxright->classLinkData}}
                    @endslot
                @endcomponent
            @endforeach
        @endslot
    @endcomponent
    
   
