@extends('pages.master')

@section('title',__('title_nha_dat_ban_chi_tiet'))

@section('header-master')
  @include('modules.sub-modules.header-master')
@endsection

@section('content-master')
  {{$data->NoiDung}}
@endsection

@section('quang-cao-trai')
  {{-- @include('modules.sub-modules.quang-cao-trai') --}}
@endsection

@section('quang-cao-phai')
  {{-- @include('modules.sub-modules.quang-cao-phai') --}}
@endsection

@section('footer')
  @include('modules.sub-modules.footer')
@endsection