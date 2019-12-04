{{-- @foreach ($kinhnghiem as $key=>$item) --}}
@component('modules.sub-modules.box-du-an-noi-bat.box-du-an-noi-bat-master')
{{-- Add class for box --}}
{{-- @if($key ===0)
        @slot('tieude')
            <div class="{{$boxClass->classContentTieude}}">{{__('d-none')}}</div>
        @endslot
@else
        @slot('tieude')
    
        @endslot
@endif --}}
@slot('classContainerParent')
{{$boxClass->classContainerParent=' row mt-2 mr-3'}}
@endslot
@slot('classContainerParentHeader')
{{$boxClass->classContainerParentHeader="d-none"}}
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
{{$boxClass->classContentImageTop=' col-lg-8'}}
@endslot
@slot('classContentImage')
{{$boxClass->classContentImage}}
@endslot
@slot('classContentImage')
{{$boxClass->classContentImage}}
@endslot
@slot('classParentCart')
{{$boxClass->classParentCart.' col-lg-4'}}
@endslot
@slot('classContentTieude')
{{$boxClass->classContentTieude='d-none'}}
@endslot
@slot('classContent')
col-lg-12 col-12
@endslot

{{-- Add class for box --}}

{{-- Add data for box --}}
        {{-- data for Title and see more --}}
            @slot('contentTitle')

            @endslot
            @slot('contentSeeMore')

            @endslot
            @slot('contentURLImage')
                trc_sau.jpg
            @endslot
            @slot('content')
            @component('modules.sub-modules.box-du-an-noi-bat.card-du-an-noi-bat')
            {{-- class card --}}
            @slot('classContentParentCart')
            {{$boxClass->classContentParentCart=' col-12 col-sm-12 col-md-12 col-lg-12'}}
            @endslot
            @slot('classContentCart')
            {{$boxClass->classContentCart}}
            @endslot
            @slot('classCartImage')
            {{$boxClass->classCartImage}}
            @endslot
            @slot('classImage')
            {{$boxClass->classImage." d-none"}}
            @endslot
            @slot('classCartTitle')
            {{$boxClass->classCartTitle=' pl-2 bd-highlight text-left  color-heard1'}}
            @endslot
            @slot('classContent')
            {{$boxClass->classContent=' pl-2 w-100 bd-highlight '}}
            @endslot
            {{-- class card --}}
            
                @slot('imageCard')
                a
                    {{-- {{$item->image}} --}}
                @endslot
                @slot('contentCart')
                7 loại cây “xịn” như điều hòa, giúp nhà mát lịm dù trời nóng đổ lửa
                {{-- <div>{{$item->NoiDungTomTat}}</div> --}}
                    {{-- {{$item->content}} --}}
                @endslot
                @slot('alt')

                        {{-- {{$item->alt}} --}}
                @endslot
                @slot('contentTitleCart')
                7 loại cây “xịn” như điều hòa, giúp nhà mát lịm dù trời nóng đổ lửa
                {{-- {{$item->title}} --}}
                @endslot
                    @slot('link')
        
                {{-- {{$item->link}} --}}
                    @endslot
                    @endcomponent 
            @endslot
        
        {{-- data for Title and see more --}}
        {{-- data for card --}}
        @section('list-cart')
            <div class="col-12">
            @for ($i = 0; $i < 3; $i++)
            @component('modules.sub-modules.box-du-an-noi-bat.card-du-an-noi-bat')
            {{-- class card --}}
            @slot('classContentParentCart')
            {{$boxClass->classContentParentCart=' col-12 col-sm-12 col-md-12 col-lg-12 color-heard'}}
            @endslot
            @slot('classContentCart')
            {{$boxClass->classContentCart}}
            @endslot
            @slot('classCartImage')
            {{$boxClass->classCartImage}}
            @endslot
            @slot('classImage')
            {{$boxClass->classImage." d-none"}}
            @endslot
            @slot('classCartTitle')
            {{$boxClass->classCartTitle=' pl-2 bd-highlight text-left  '}}
            @endslot
            @slot('classContent')
            {{$boxClass->classContent=' pl-2 w-100 bd-highlight '}}
            @endslot
            {{-- class card --}}
            @foreach ($kinhnghiem as $item)
                @slot('imageCard')
                a
                    {{-- {{$item->image}} --}}
                @endslot
                @slot('contentCart')
                <div>Những loại cây này tương đối dễ trồng. Chỉ cần khoảng thời gian vài tháng đến 1 năm là đủ để ban công nhà bạn được phủ kín màu xanh thật đẹp...</div>
                    {{-- {{$item->content}} --}}
                @endslot
                @slot('alt')
                
                    {{-- {{$item->alt}} --}}
                @endslot
                @slot('contentTitleCart')
                7 loại cây “xịn” như điều hòa, giúp nhà mát lịm dù trời nóng đổ lửa
                
                
                    {{-- {{$item->title}} --}}
                @endslot
                @slot('link')
        
                    {{-- {{$item->link}} --}}
                @endslot
                @endforeach
            @endcomponent 
            @endfor
        </div>
        
        @endsection
        {{-- data for card --}}
{{-- Add data for box --}}
@endcomponent
{{-- @endforeach --}}