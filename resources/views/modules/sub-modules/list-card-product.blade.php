<div class="row">
    <span class="title-product m-2 mb-3">
        {{__("Mua bán nhà đất, bất động sản trên toàn quốc")}} 
    </span>
</div>
@foreach ($listProduct as $product)
    @component('modules.sub-modules.main-card-product')
        @slot('id')
            {{$product->ID_SanPham}}
        @endslot
        @slot('title')
            {{$product->TenSanPham}}
        @endslot
        @slot('subContent')
            {{$product->MoTaTomTat}}    
        @endslot
        @slot('parking')
            {{$product->ChoDeXeHoi}}
        @endslot
        @slot('street')
            {{$product->LoGioi}}
        @endslot
        @slot('acreage')
            {{$product->DienTich}}
        @endslot
        @slot('size')
            {{$product->ChieuNgang."x".$product->ChieuDai}}
        @endslot
        @slot('direction')
            {{$product->TenHuong}}
        @endslot
        @slot('price')
            {{$product->Gia}}
        @endslot
        @slot('address')
            {{$product->DiaChi.", ".$product->TenQuanHuyen.", ".$product->TenTinhThanhPho}}
        @endslot
        @slot('imageName')
            {{$product->HinhAnh}}
        @endslot
        @slot('bedroom')
            {{$product->PhongNgu}}
        @endslot
        @slot('floor')
            {{$product->Tang}}
        @endslot
        @slot('diningroom')
            {{$product->PhongAn}}
        @endslot
    @endcomponent
@endforeach