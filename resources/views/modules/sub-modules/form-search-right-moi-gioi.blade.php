@extends('modules.sub-modules.form-search.form-search')

{{-- css form search in center --}}
@section('class-form-search')
form-search  form-search-right-moi-gioi
@endsection

@section('dia-diem')
    {{-- <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <input type="text" class="place" placeholder="Nhập địa điểm cần tìm" autocomplete="off">
    </div> --}}
@endsection

{{-- loại tin và loại bất động sản --}}
@section('loai-tin-loai-bat-dong-san')
    {{-- <div class="col-6 col-sm-6 col-md-6 col-lg-6">
        <select class="select">
            <option value="can-ban">Cần bán</option>
            <option value="cho-thue">Cho thuê</option>
            <option value="can-mua">Cần mua</option>
            <option value="can-thue">Cần thuê</option>
        </select>
    </div>
    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
        <select class=" select">
            <option value="can-ban">---Loại BĐS---</option>
        </select>
    </div> --}}
@endsection

{{-- Tỉnh thành phố và quận huyện --}}
@section('tinh-thanh-pho-quan-huyen')
    {{-- <div class="col-6 col-sm-6 col-md-6 col-lg-6">
        <select class=" select">
            <option value="can-ban">--Tỉnh Thành Phố--</option>
        </select>
    </div>

    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
        <select class=" select">
            <option value="can-ban">---Quận Huyện---</option>
        </select>
    </div> --}}
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <select class="select">
            <option value="can-ban">---Loai BDS---</option>
        </select>
    </div>
@endsection
{{-- huong --}}
@section('huong')
    {{-- <div class="col-6 col-sm-6 col-md-6 col-lg-6">
        <select class=" select">
            <option value="can-ban">10 m <sub>2</sub></option>
            <option value="cho-thue">10 m <sub>2</sub></option>
            <option value="can-mua">10 m <sub>2</sub></option>
            <option value="can-thue">10 m <sub>2</sub></option>
        </select>
    </div>

    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
        <select class=" select">
            <option value="can-ban">---Mức giá---</option>
        </select>
    </div> --}}
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <select class="select">
            <option value="can-ban">---Tỉnh/Thành---</option>
        </select>
    </div>
@endsection

{{-- Diện tích và mức giá --}}
@section('dien-tich-muc-gia')
    @section('margin-buttom')
        {{-- 6px --}}
    @endsection
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <select class="select">
            <option value="can-ban">---Quận/Huyện---</option>
        </select>
    </div>
    
@endsection
{{-- button tìm kiếm và link tìm kiếm năng cao --}}
@section('button-tim-kiem')
<div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
    <input style="width:115px; height: 35px;background-color:deepskyblue;color: floralwhite; " class="btn" type="button" value="Tìm Kiếm">
</div>
    {{-- <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-end">
        <a rel="nofollow" style="font-size: 14px;">Tìm kiếm nâng cao</a>
    </div> --}}
@endsection
