<div class="row">
    <span class="title-product m-2 mb-3">
        {{__("Mua bán nhà đất, bất động sản trên toàn quốc")}} 
    </span>
</div>
@for ($k = 1; $k < 10; $k++)
    @component('modules.sub-modules.main-card-product')
        @slot('id')
            {{$k}}
        @endslot
    @endcomponent
@endfor