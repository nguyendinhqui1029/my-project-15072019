@extends('pages.master')

@section('title',__('title-home'))

@section('top-info')
  @include('modules.sub-modules.top-info')   
@endsection

@section('logo')
  @include('modules.sub-modules.logo')   
@endsection

@section('video-gioi-thieu')
  @include('modules.sub-modules.video-gioi-thieu')   
@endsection

@section('menu-top')
  @include('modules.sub-modules.menu-top')   
@endsection

@section('main-menu')
  @include('modules.sub-modules.menu')   
@endsection

@section('form-search')
  @include('modules.sub-modules.form-search')   
@endsection

@section('kinh-nghiem')
  @include('modules.sub-modules.kinh-nghiem')   
@endsection


@section('bat-dong-san-noi-bat')
  @include('modules.sub-modules.bat-dong-san-noi-bat')   
@endsection

@section('news-right')
  @include('modules.sub-modules.news-right')   
@endsection

@section('quick-link-right')
  @include('modules.sub-modules.quick-link-right')   
@endsection

@section('quang-cao-trai')
  @include('modules.sub-modules.quang-cao-trai')
@endsection

@section('quang-cao-phai')
  @include('modules.sub-modules.quang-cao-phai')
@endsection

@section('nha-dat-theo-tinh-thanh-pho')
@include('modules.sub-modules.main-card-employee')
{{--@include('modules.sub-modules.nha-dat-khu-vuc')--}}  
@endsection
@section('content')
  @include('modules.sub-modules.content')   
@endsection

@section('footer')
  @include('modules.sub-modules.footer')
@endsection