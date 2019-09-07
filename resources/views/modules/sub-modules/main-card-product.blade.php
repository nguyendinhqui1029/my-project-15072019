<div class="form-search-centre ml-1 mb-3">
@component('modules.sub-modules.card-employee.component-card')
    @slot('titleProduct')
        <div class="row mt-2 mb-2">
            <div class="col-10">
                <div class="ml-2">
                    <span style="color:red; font-weight: bold;">
                        {{$title}}
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
        @component('modules.sub-modules.card-employee.image-card-employee')
            @slot('imageName')
                {{$imageName}}
            @endslot
        @endcomponent
    @endslot
    @slot('content')
        @component('modules.sub-modules.card-product.content-card-product')
        @slot('subContent')
            {{$subContent}}
        @endslot
        @slot('parking')
            {{$parking}}
        @endslot
        @slot('street')
            {{$street}}
        @endslot
        @slot('acreage')
            {{$acreage}}
        @endslot
        @slot('size')
            {{$size}}
        @endslot
        @slot('direction')
            {{$direction}}
        @endslot
        @slot('price')
            {{$price}}
        @endslot
        @slot('address')
            {{$address}}
        @endslot
        @slot('bedroom')
            {{$bedroom}}
        @endslot
        @slot('floor')
            {{$floor}}
        @endslot
        @slot('diningroom')
            {{$diningroom}}
        @endslot
    @endcomponent
    @endslot
    @slot('evaluate')
        
    @endslot
@endcomponent
</div>