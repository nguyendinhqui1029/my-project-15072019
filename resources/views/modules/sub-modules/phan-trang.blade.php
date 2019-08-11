@component('modules.sub-modules.phan-trang.phan-trang-master')
    @slot('mode')
         horizontal
    @endslot
    @slot('data')
        @for ($i = 0; $i <10; $i++)
            @component('modules.sub-modules.phan-trang.data-phan-trang')
                @slot('classContainerData')
                bd-highlight container-data-phan-trang
                @endslot
                @slot('url')
                #
                @endslot
                @slot('classContent')
                data-content
                @endslot
                @slot('content')
                    {{$i}}
                @endslot
            @endcomponent
        @endfor
        
    @endslot
@endcomponent