{{-- @extends('modules.sub-modules.form-search.form-search') --}}

@component('modules.sub-modules.form-search.form-search-master')
    {{-- add class css --}}
    @slot('classContainerFormSearch')
        {{$formSearchClass->classContainerFormSearch}}
    @endslot
    @slot('classContainerDiaDiem')
        {{$formSearchClass->classContainerDiaDiem}}
    @endslot
    @slot('classContainerLoaiTin')
        {{$formSearchClass->classContainerLoaiTin}}
    @endslot
    @slot('classContainerQuanHuyen')
        {{$formSearchClass->classContainerQuanHuyen}}
    @endslot
    @slot('classContainerHuong')
        {{$formSearchClass->classContainerHuong}}
    @endslot
    @slot('classContainerMucGia')
        {{$formSearchClass->classContainerMucGia}}
    @endslot
    @slot('classContainerButtonSearch')
        {{$formSearchClass->classContainerButtonSearch}}
    @endslot
    {{-- add class css --}}
    {{-- data --}}
        @slot('diadiem')
            <div class="col-2 col-sm-2 col-md-3 col-lg-2">
                <label class="label-form-search">{{__('label_dia_diem')}}</label>
            </div>
            <div class="col-10 col-sm-10 col-md-9 col-lg-10">
                <input type="text" class="place" placeholder="Nhập địa điểm cần tìm" autocomplete="off">
            </div>
        @endslot
        {{-- loại tin và loại bất động sản --}}
        @slot('loaitin')
            <div class="col-2 col-sm-2 col-md-3 col-lg-2">
                <label class="label-form-search">{{__('label_loai_tin')}}</label>
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
                <label class="label-form-search">{{__('label_loai_bds')}}</label>
            </div>
            <div class="col-10 col-sm-4 col-md-9 col-lg-4">
                <select class=" select">
                    <option value="can-ban">---Loại BĐS---</option>
                </select>
            </div>
        @endslot
        {{-- Tỉnh thành phố và quận huyện --}}
        @slot('tinhthanhpho')
            <div class="col-2 col-sm-2 col-md-3 col-lg-2">
                    <label class="label-form-search">{{__('label_tinh_thanh')}}</label>
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
                    <label class="label-form-search">{{__('label_quan_huyen')}}</label>
            </div>
            <div class="col-10 col-sm-4 col-md-9 col-lg-4">
                <select class=" select">
                    <option value="can-ban">---Loại BĐS---</option>

                </select>
            </div>
        @endslot

        {{-- huong --}}
        @slot('huong')
            <div class="col-2 col-sm-2 col-md-3 col-lg-2">
                    <label class="label-form-search">{{__('label_huong')}}</label> 
            </div>
            <div class="col-10 col-sm-4 col-md-9 col-lg-4">
            <select class="select">
                <option value="can-ban">---Huong---</option>
            </select>
            </div>
        @endslot

        {{-- Diện tích và mức giá --}}
        @slot('dientich')
            <div class="col-2 col-sm-2 col-md-3 col-lg-2">
                    <label class="label-form-search">{{__('label_dien_tich')}}</label>
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
                    <label class="label-form-search">{{__('label_muc_gia')}}</label>
            </div>
            <div class="col-10 col-sm-4 col-md-9 col-lg-4">
                <select class=" select">
                    <option value="can-ban">---Mức giá---</option>

                </select>
            </div>
        @endslot
        {{-- button tìm kiếm và link tìm kiếm năng cao --}}
        @slot('buttonsearch')
            <div class="col align-self-center offset-4">
                <input name="" id="" class="btn btn-primary" type="button" value="{{__('button_tim_kiem')}}">
            </div>
            <div class="col align-self-end">
                <a href="/tim-kiem-nang-cao.html" rel="nofollow">{{__('label_tim_kiem_nang_cao')}}</a>
            </div>
        @endslot
     {{-- data --}}
@endcomponent
{{-- css form search in center --}}








