    @component('modules.sub-modules.box-right.box-right-master')
        @slot('classContainer')
        d-flex flex-column bd-highlight mb-3 border-right
        @endslot
        @slot('classBoxTitle')
        mt-2 pt-2 background-mua-ban-nha-dat
        @endslot
        @slot('classTitle')
        text-left
        @endslot
        @slot('contentTitle')
        NHÀ ĐẤT KHU VỰC
        @endslot
        @slot('classBoxData')
        p-2 bd-highlight
        @endslot
        @slot('classLinkData')
        p-2 bd-highlight
        @endslot
        @slot('classColumnBoxData')
        row
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
                    col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6
                    @endslot
                    @slot('classLinkData')
                    p-2 bd-highlight 
                    @endslot
                @endcomponent
            @endforeach
        @endslot
    @endcomponent
    
   
