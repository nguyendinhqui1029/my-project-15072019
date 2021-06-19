@component('modules.sub-modules.danh-sach-nha-moi-gioi.from-ds-nha-moi-gioi')
{{-- Add class for box --}}
@slot('classContainerFormDanhSach')
{{$formDanhSachClass->classContainerFormDanhSach}}
@endslot
@slot('classContenttieude')
{{$formDanhSachClass->classContenttieude}}
@endslot
@slot('classContainerHinhAnh')
{{$formDanhSachClass->classContainerHinhAnh}}
@endslot
@slot('classContainerNoiDung')
{{$formDanhSachClass->classContainerNoiDung}}
@endslot
@slot('classContainerDanhGia')
{{$formDanhSachClass->classContainerDanhGia}}
@endslot
{{-- Add class for box --}}
{{-- Add data for box --}}
        {{-- data hình ảnh --}}
        @slot('cardhinhanh')
        <div style="width: 100%; height: 100%; padding: 5px;">
                <img src="assets/images/logo.jpg"style="width:100%; height: 100%;"/>
            </div>
        @endslot
          {{-- data hình ảnh --}}
            {{-- data nội dung --}}
        
        @slot('cardten')
        <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="ten"><i class="icon-user"></i> CÁT BÌNH</div>
                </div>
            </div>
         @endslot
         @slot('cardsodienthoai')
            <div class="row">
                <div class="col-sm">
                 <div class="phone"><i class="icon-phone"></i><span class="phone1"> 0946.660.679</span></div>
                </div>
            </div>
         @endslot
         @slot('carddiachi')
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="diachi"><img width="2.2%"  src="https://image.flaticon.com/icons/png/512/110/110462.png" />Quận 1, Hồ Chí Minh</div>
                </div>
            </div>
        @endslot
        @slot('cardxemtrang')
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                </div ><a href="#"> Xem trang cá nhân</a> </div>
                <div>Chuyên nhà phố trung tâm quận 1,3,5,10, phú nhuận, bình thạnh tư vấn tận tâm, tận tuỵ, nhiệt tình, hãy tìm cho mình một căn nhà ưng ý , một cơ hội đầu tư tuyệt vời</div>
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