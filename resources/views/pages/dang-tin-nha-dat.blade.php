@extends('pages.master')

@section('title',__('title_rao_vat'))

@section('header-master')
  @include('modules.sub-modules.header-master')
@endsection

@section('content-master')
  @include('modules.sub-modules.content-master') 
@endsection

@section('footer')
  @include('modules.sub-modules.footer')
@endsection