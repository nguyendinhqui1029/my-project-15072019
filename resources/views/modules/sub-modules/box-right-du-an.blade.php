    @component('modules.sub-modules.box-right.box-right-master')
        @slot('classContainer')
        d-flex flex-column bd-highlight mb-3 border-right
        @endslot
        @slot('classBoxTitle')
        p-2 bd-highlight
        @endslot
        @slot('classTitle')
        @endslot
        @slot('contentTitle')
        Liên kết nổi bật
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
                    col-lg-6
                    {{-- p-2 bd-highlight --}}
                    @endslot
                    @slot('classLinkData')
                    p-2 bd-highlight
                    @endslot
                @endcomponent
            @endforeach
        @endslot
    @endcomponent
    
   
