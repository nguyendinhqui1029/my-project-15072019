@extends('pages.master')

@section('title',__('title_noi_dung_chi_tiet'))

@section('header-master')
  @include('modules.sub-modules.header-master')
@endsection

@section('content-master')
  {{$data->NoiDungChiTiet}}
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