@component('modules.sub-modules.contenter-kinh-nghiem')
{{-- class card --}}
@slot('classContentParentCart')
{{$boxClass->classContentParentCart =' d-none'}}
@endslot
@slot('classContentCart')
{{$boxClass->classContentCart =' d-none'}}
@endslot
@slot('classCartImage')
{{$boxClass->classCartImage}}
@endslot
@slot('classImage')
{{$boxClass->classImage}}
@endslot
@slot('classCartTitle')
{{$boxClass->classCartTitle=' d-none'}}
@endslot
@slot('classContent')
{{$boxClass->classContent=' d-none'}}
@endslot
{{-- class card --}}
  @slot('imageCard')
      {{$item->image}}
  @endslot
  @slot('contentCart')
      {{$item->content=' d-none'}}
  @endslot
  @slot('alt')
      {{$item->alt=' d-none'}}
  @endslot
  @slot('contentTitleCart')
      {{$item->title=' d-none'}}
  @endslot
  @slot('link')
      {{$item->link=' d-none'}}
  @endslot
@endcomponent