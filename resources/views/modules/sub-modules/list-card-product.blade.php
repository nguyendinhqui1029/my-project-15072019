<div class="row">
    <span class="title-product m-2 mb-3">
        {{__("Mua bán nhà đất, bất động sản trên toàn quốc")}} 
    </span>
</div>
@foreach ($listProduct as $product)
    @component('modules.sub-modules.main-card-product')
        @slot('title')
            {{$product->TenSanPham}}
        @endslot
        @slot('id')
            {{$product->ID_SanPham}}
        @endslot
        @slot('subContent')
            {{$product->MoTaTomTat}}    
        @endslot
        @slot('parking')
            
        @endslot
        @slot('street')
            
        @endslot
        @slot('acreage')
            {{$product->DienTich}}
        @endslot
        @slot('size')
           
        @endslot
        @slot('direction')
            {{$product->ID_Huong}}
        @endslot
        @slot('price')
            {{$product->Gia}}
        @endslot
        @slot('address')
            {{$product->ID_QuanHuyen}}
        @endslot
        @slot('imageName')
            {{$product->HinhAnh}}
        @endslot
        @slot('bedroom')
           
        @endslot
        @slot('floor')
            
        @endslot
    @endcomponent
@endforeach