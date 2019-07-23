@extends('modules.sub-modules.form-search.form-search')

{{-- css form search in center --}}
@section('class-form-search')
    form-search form-search-centre
@endsection

@section('dia-diem')
    <div class="col-2 col-sm-2 col-md-3 col-lg-2">
        <label class="label-form-search">{{__('label-dia-diem')}}</label>
    </div>
    <div class="col-10 col-sm-10 col-md-9 col-lg-10">
        <input type="text" class="place" placeholder="Nhập địa điểm cần tìm" autocomplete="off">
    </div>
@endsection

{{-- loại tin và loại bất động sản --}}
@section('loai-tin-loai-bat-dong-san')
    <div class="col-2 col-sm-2 col-md-3 col-lg-2">
        <label class="label-form-search"> Loại tin</label>
    </div>
    <div class="col-10 col-sm-4 col-md-9 col-lg-4">
        <select class="select">
            <option value="can-ban">Cần bán</option>
            <option value="cho-thue">Cho thuê</option>
            <option value="can-mua">Cần mua</option>
            <option value="can-thue">Cần thuê</option>
        </select>
    </div>

    <div class="col-2 col-sm-2 col-md-3 col-lg-2">
        <label class="label-form-search">Loại BĐS</label>
    </div>
    <div class="col-10 col-sm-4 col-md-9 col-lg-4">
        <select class=" select">
            <option value="can-ban">---Loại BĐS---</option>
        </select>
    </div>
@endsection

{{-- Tỉnh thành phố và quận huyện --}}
@section('tinh-thanh-pho-quan-huyen')
    <div class="col-2 col-sm-2 col-md-3 col-lg-2">
            <label class="label-form-search">Tỉnh/Thành</label>
    </div>
    <div class="col-10 col-sm-4 col-md-9 col-lg-4">
        <select class=" select">
            <option value="can-ban">Cần bán</option>
            <option value="cho-thue">Cho thuê</option>
            <option value="can-mua">Cần mua</option>
            <option value="can-thue">Cần thuê</option>
        </select>
    </div>

    <div class="col-2 col-sm-2 col-md-3 col-lg-2">
            <label class="label-form-search">Quận/Huyện</label>
    </div>
    <div class="col-10 col-sm-4 col-md-9 col-lg-4">
        <select class=" select">
            <option value="can-ban">---Loại BĐS---</option>

        </select>
    </div>
@endsection
{{-- huong --}}
@section('huong')
    <div class="col-2 col-sm-2 col-md-3 col-lg-2">
            <label class="label-form-search">Hướng</label> 
    </div>
    <div class="col-10 col-sm-4 col-md-9 col-lg-4">
    <select class="select">
        <option value="can-ban">---Huong---</option>
    </select>
    </div>
@endsection

{{-- Diện tích và mức giá --}}
@section('dien-tich-muc-gia')
    @section('margin-buttom')
        3%
    @endsection
    <div class="col-2 col-sm-2 col-md-3 col-lg-2">
            <label class="label-form-search">Diện tích</label>
    </div>
    <div class="col-10 col-sm-4 col-md-9 col-lg-4">
        <select class=" select">
            <option value="can-ban">10 m <sub>2</sub></option>
            <option value="cho-thue">10 m <sub>2</sub></option>
            <option value="can-mua">10 m <sub>2</sub></option>
            <option value="can-thue">10 m <sub>2</sub></option>
        </select>
    </div>

    <div class="col-2 col-sm-2 col-md-3 col-lg-2">
            <label class="label-form-search">Mức giá</label>
    </div>
    <div class="col-10 col-sm-4 col-md-9 col-lg-4">
        <select class=" select">
            <option value="can-ban">---Mức giá---</option>

        </select>
    </div>
@endsection
{{-- button tìm kiếm và link tìm kiếm năng cao --}}
@section('button-tim-kiem')
    <div class="col align-self-center offset-4">
        <input name="" id="" class="btn btn-primary" type="button" value="Tìm Kiếm">
    </div>
    <div class="col align-self-end">
        <a href="/tim-kiem-nang-cao.html" rel="nofollow">Tìm kiếm nâng cao</a>
    </div>
@endsection
