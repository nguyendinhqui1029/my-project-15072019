@component('modules.sub-modules.du-an-tim-kiem.form-du-an-tim-kiem-master')
{{-- add class css --}}
@slot('classContainerFormTimKiem')
{{$formTimKiemClass->classContainerFormTimKiem =" form-search form-search-duan mt-2"}}
@endslot
@slot('classContainerDiaDiem')
{{$formTimKiemClass->classContainerDiaDiem}}
@endslot
@slot('classContainerLoaiBDS')
{{$formTimKiemClass->classContainerLoaiBDS}}
@endslot
@slot('classContainerTinhThanh')
{{$formTimKiemClass->classContainerTinhThanh}}
@endslot
@slot('classContainerQuuanHuyen')
{{$formTimKiemClass->classContainerQuuanHuyen}}
@endslot
@slot('classContainerButtonTimKiem')
{{$formTimKiemClass->classContainerButtonTimKiem}}
@endslot
{{-- add class css --}}
{{-- Địa điểm ---}}
@slot('loaidiadiem')
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <input type="text" class="place" placeholder="Nhập tên cần tìm" autocomplete="off">
</div>
@endslot
{{-- Tỉnh thành phố và quận huyện --}}
@slot('loaibds')
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <select class="select">
        <option value="can-ban">---Loai dự án---</option>
    </select>
</div>
@endslot
{{-- huong --}}
@slot('tinhthanh')
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <select class="select">
        <option value="can-ban">---Tỉnh/Thành---</option>
    </select>
</div>
@endslot

{{-- Diện tích và mức giá --}}
@slot('quanhuyen')
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
<select class="select">
    <option value="can-ban">---Quận/Huyện---</option>
</select>
</div>
@endslot
{{-- button tìm kiếm và link tìm kiếm năng cao --}}
@slot('buttontimkiem')
<div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
    <input style="width:115px; height: 35px;background-color:deepskyblue;color: floralwhite; " class="btn" type="button" value="Tìm Kiếm">
</div>
@endslot
@endcomponent
