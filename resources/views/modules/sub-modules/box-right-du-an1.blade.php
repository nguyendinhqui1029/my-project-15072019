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
        Nhà đất khu vực
        @endslot
        @slot('classBoxData')
        p-2 bd-highlight
        @endslot
        @slot('classLinkData')
        p-2 bd-highlight
        @endslot
        @slot('classColumnBoxData')
        @endslot
        
        @slot('data')
            @foreach ($boxright1->data as $item )
                @component('modules.sub-modules.box-right.data-box-right')
                    @slot('link')
                        {{$item->link}}
                    @endslot
                    @slot('noidung')
                        {{$item->noidung}} 
                    @endslot
                    @slot('classBoxData')
                    p-2 bd-highlight
                    @endslot
                    @slot('classLinkData')
                    p-2 bd-highlight
                    @endslot
                @endcomponent
            @endforeach
        @endslot
    @endcomponent
    
   
