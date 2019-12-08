        @foreach ($listData as $item)
                @component('modules.sub-modules.contenter-kinh-nghiem')
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
                        {{$item->link}}
                    @endslot
                @endcomponent
                @endforeach