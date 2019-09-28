@component('modules.sub-modules.danh-sach-nha-moi-gioi.from-ds-nha-moi-gioi')
{{-- Add class for box --}}
@slot('classContainerFormDanhSach')
{{$formDanhSachClass->classContainerFormDanhSach=" mr-3 border-danhsach"}}
@endslot
@slot('classContenttieude')
{{$formDanhSachClass->classContenttieude=" d-none"}}
@endslot
@slot('classContainerHinhAnh')
{{$formDanhSachClass->classContainerHinhAnh}}
@endslot
@slot('classContainerNoiDung')
{{$formDanhSachClass->classContainerNoiDung}}
@endslot
@slot('classContainerDanhGia')
{{$formDanhSachClass->classContainerDanhGia="d-none"}}
@endslot
{{-- Add class for box --}}
{{-- Add data for box --}}
        {{-- data hình ảnh --}}
        
        @slot('cardhinhanh')
        
        <div style="width: 100%; height: 100%; padding: 5px;">
                <img src="assets/images/logo.jpg"style="width:100%; height: 100%;    border: 1px solid #e0e0e0;"/>
            </div>
        @endslot
          {{-- data hình ảnh --}}
            {{-- data nội dung --}}
        
        @slot('cardten')
        <div class="row" style="font-size: 15px;font-weight: bold;color: #0a62e2;text-shadow: 1px 1px #fcfcfc;">
           <a href=""> Khu đô thị mới Phú Lương</a>
        </div>
        
         @endslot
         @slot('cardsodienthoai') 
         <div class="row" style="font-style: italic;    text-shadow: 1px 1px #fcfcfc;margin: 5px 0 5px 0;">
            phường Phú Lương, quận Hà Đông, Tp.Hà Nội
         </div>
         
         @endslot
         @slot('carddiachi')
         <div class="row" style="    font-size: 13px;    padding: 0;color: #777;    text-align: justify;">
            Tọa lạc tại phường Phú Lương, quận Hà Đông, Tp.Hà Nội. Khu đô thị mới Phú Lương gần kề với khu đô thị mới Văn Phú, Kiến Hưng,các trung tâm thương mại và siêu thị đầu mối của Hà Đông…
         </div>
        @endslot

        @slot('cardxemtrang')
            <div class="row">       
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                </div ><a href="#"> </a> </div>
        </div>
         @endslot
         
        {{-- data nội dung --}}
        {{-- data Ngôi sao --}}
        @slot('carddanhgia')
        <div class="row justify-content-start">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    {{-- <div class="col-5 col-sm-5 col-md-5 col-lg-5">  card employee--}}
                    <div class="stars" >
                        <form action="">
                                {{-- <span>@yield('title-evaluate')</span> --}}
                                <span>Được đánh giá:</span>
                                <input class="star star-21" id="star-21"
                                        type="radio" name="star" />
                                <label class="star star-21"
                                        for="star-21"></label>
                                <input class="star star-22" id="star-22"
                                        type="radio" name="star" />
                                <label class="star star-22"
                                        for="star-22"></label>
                                <input class="star star-23" id="star-23"
                                        type="radio" name="star" />
                                <label class="star star-23"
                                        for="star-23"></label>
                                <input class="star star-24" id="star-24"
                                        type="radio" name="star" />
                                <label class="star star-24"
                                        for="star-24"></label>
                                <input class="star star-25" id="star-25"
                                        type="radio" name="star" />
                                <label class="star star-25"
                                        for="star-25" style="margin-left: 3px;"></label>
                        </form>
                    </div>
                </div>
            </div>
     @endslot
        {{-- data ngôi sao --}}
       

        {{-- data for card --}}
{{-- Add data for box --}}
@endcomponent