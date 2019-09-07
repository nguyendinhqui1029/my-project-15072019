<div class="form-search-centre ml-1 mb-3">
@component('modules.sub-modules.card-employee.component-card')
    @slot('titleProduct')
        <div class="row mt-2 mb-2">
            <div class="col-10">
                <div class="ml-2">
                    <span style="color:red; font-weight: bold;">
                            TUI BÁN GẤP NHÀ TRỌ GỒM 32 PHÒNG VÀ ĐẤT GẦN KCN NHẬT MỸ TRƯỜNG HỌC CHỢ chỉ 390TR MUA ĐƯỢC 
                    </span>
                </div>
            </div>
            <div style="color:red;" class="col-2 text-right ">Hôm nay</div>
        </div>
        <div class="row">
                @component('modules.sub-modules.card-employee.evaluate-card-employee')
                    @slot('idProduct')
                    {{$id}} 
                    @endslot 
                @endcomponent
        </div>
    @endslot
    @slot('image')
        @include('modules.sub-modules.card-employee.image-card-employee')
    @endslot
    @slot('content')
        @include('modules.sub-modules.card-product.content-card-product')
    @endslot
    @slot('evaluate')
        
    @endslot
@endcomponent
</div>