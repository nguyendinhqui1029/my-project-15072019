@extends('modules.sub-modules.card-employee.component-card')
@section('title-product')
    <div class="row">
        <div class="col-auto ">
            <b style="color:red;">
                <i style="font-size: 15px;"></i>
                     TUI BÁN GẤP NHÀ TRỌ GỒM 32 PHÒNG VÀ ĐẤT GẦN KCN NHẬT MỸ TRƯỜNG HỌC CHỢ chỉ 390TR MUA ĐƯỢC 
            </b>
        </div>
        <div class="col-auto text-right">Hôm nay</div>
    </div>
@endsection

@section('evaluate-product')
     @include('modules.sub-modules.card-employee.evaluate-card-employee')
@endsection
@section('title-evaluate')
   sssff
@endsection
@section('image')
    @include('modules.sub-modules.card-employee.image-card-employee')
@endsection
@section('content')
    @include('modules.sub-modules.card-product.content-card-product')
@endsection
 {{-- @section('evaluate')
    @include('modules.sub-modules.card-employee.evaluate-card-employee')
@endsection --}}
