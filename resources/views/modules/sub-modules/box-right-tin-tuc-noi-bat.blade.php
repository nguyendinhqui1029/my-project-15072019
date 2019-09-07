    @component('modules.sub-modules.box-right.box-right-master')
        @slot('classContainer')
        {{$boxright1->classContainer." border1"}}
        {{-- d-flex flex-column bd-highlight mb-3 border-right --}}
        @endslot
        @slot('classBoxTitle')
        {{$boxright1->classBoxTitle." border-header"}}
        {{-- p-2 bd-highlight --}}
        @endslot
        @slot('classTitle')
        {{$boxright1->classTitle." text-center pt-2 text-color"}}
        @endslot
        @slot('contentTitle')
        {{$boxright1->contentTitle= "Tin tức nổi bật"}}
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
                       <div style="margin:0px; padding:0px;"> <img width="8px;" src='assets/images/icon.png'/>{{$item->noidung}} </div>
                    @endslot
                    @slot('classBoxData')
                    {{$boxright1->classBoxData=" col-lg-12"}}
                    @endslot
                    @slot('classLinkData')
                    {{$boxright1->classLinkData=' bd-highlight line-heigh'}}
                    @endslot
                @endcomponent
            @endforeach
        @endslot
    @endcomponent
    
   
