@component('modules.sub-modules.box-du-an-noi-bat.box-du-an-noi-bat-master')
{{-- Add class for box --}}
@slot('classContainerParent')
{{$boxClass->classContainerParent=' row contenthitruong '}}
@endslot
@slot('classContainerParentHeader')
{{$boxClass->classContainerParentHeader="d-none"}}
@endslot
@slot('classContentHeader')
{{$boxClass->classContentHeader}}
@endslot
@slot('classContainerSeeMore')
{{$boxClass->classContainerSeeMore}}
@endslot
@slot('classContentSeeMore')
{{$boxClass->classContentSeeMore}}
@endslot
@slot('classContentImageTop')
{{$boxClass->classContentImageTop=' col-lg-12'}}
@endslot
@slot('classContentImage')
{{$boxClass->classContentImage=" heigh-image-right"}}
@endslot
@slot('classParentCart')
{{$boxClass->classParentCart=' d-none'}}
@endslot
@slot('classContentTieude')
{{$boxClass->classContentTieude=''}}
@endslot
@slot('classContent')
col-lg-12 col-12
@endslot

{{-- Add class for box --}}

{{-- Add data for box --}}
        {{-- data for Title and see more --}}
            @slot('contentTitle')
          
            @endslot
            @slot('contentSeeMore')
           
            @endslot
            @slot('contentURLImage')
              thi_truong1.jpg 
            @endslot
            @slot('content')
            @component('modules.sub-modules.box-du-an-noi-bat.card-du-an-noi-bat')
            {{-- class card --}}
            @slot('classContentParentCart')
            {{$boxClass->classContentParentCart=' col-12 col-sm-12 col-md-12 col-lg-12'}}
            @endslot
            @slot('classContentCart')
            {{$boxClass->classContentCart}}
            @endslot
            @slot('classCartImage')
            {{$boxClass->classCartImage}}
            @endslot
            @slot('classImage')
            {{$boxClass->classImage." d-none"}}
            @endslot
            @slot('classCartTitle')
            {{$boxClass->classCartTitle=' pl-2 bd-highlight text-left  color-heard1'}}
            @endslot
            @slot('classContent')
            {{$boxClass->classContent=' pl-2 w-100 bd-highlight '}}
            @endslot
            {{-- class card --}}
              @slot('imageCard')
                  {{-- {{$item->image}} --}}
              @endslot
              @slot('contentCart')
              @component('modules.sub-modules.danh-sach-nha-moi-gioi.from-ds-nha-moi-gioi')
              {{-- Add class for box --}}
              @slot('classContainerFormDanhSach')
              {{$formDanhSachClass->classContainerFormDanhSach=" formdanhsach1"}}
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
                              <img src="assets/images/logo.jpg"style="width:100%; height: 100%;"/>
                          </div>
                      @endslot
                        {{-- data hình ảnh --}}
                          {{-- data nội dung --}}
                      
                      @slot('cardten')
                       @endslot
                       @slot('cardsodienthoai') 
                       @endslot
                       @slot('carddiachi')
                      @endslot
              
                      @slot('cardxemtrang')
                          <div class="row">
                                     
                              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                              </div ></div>
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
                  {{-- {{$item->content}} --}}
              @endslot
              @slot('alt')
              
                  {{-- {{$item->alt}} --}}
              @endslot
              @slot('contentTitleCart')
              7 loại cây “xịn” như điều hòa, giúp nhà mát lịm dù trời nóng đổ lửa
                  {{-- {{$item->title}} --}}
              @endslot
              @slot('link')
                
                  {{-- {{$item->link}} --}}
              @endslot
          @endcomponent 
            @endslot
         
        {{-- data for Title and see more --}}
        {{-- data for card --}}
        @section('list-cart')
       <div class="col-12">
           @for ($i = 0; $i < 3; $i++)
           @component('modules.sub-modules.box-du-an-noi-bat.card-du-an-noi-bat')
           {{-- class card --}}
           @slot('classContentParentCart')
           {{$boxClass->classContentParentCart=' col-12 col-sm-12 col-md-12 col-lg-12 color-heard'}}
           @endslot
           @slot('classContentCart')
           {{$boxClass->classContentCart}}
           @endslot
           @slot('classCartImage')
           {{$boxClass->classCartImage}}
           @endslot
           @slot('classImage')
           {{$boxClass->classImage." d-none"}}
           @endslot
           @slot('classCartTitle')
           {{$boxClass->classCartTitle=' pl-2 bd-highlight text-left  '}}
           @endslot
           @slot('classContent')
           {{$boxClass->classContent=' pl-2 w-100 bd-highlight '}}
           @endslot
           {{-- class card --}}
             @slot('imageCard')
             a
                 {{-- {{$item->image}} --}}
             @endslot
             @slot('contentCart')
             <div>Những loại cây này tương đối dễ trồng. Chỉ cần khoảng thời gian vài tháng đến 1 năm là đủ để ban công nhà bạn được phủ kín màu xanh thật đẹp...</div>
                 {{-- {{$item->content}} --}}
             @endslot
             @slot('alt')
             
                 {{-- {{$item->alt}} --}}
             @endslot
             @slot('contentTitleCart')
             7 loại cây “xịn” như điều hòa, giúp nhà mát lịm dù trời nóng đổ lửa
                 {{-- {{$item->title}} --}}
             @endslot
             @slot('link')
        
                 {{-- {{$item->link}} --}}
             @endslot
         @endcomponent 
           @endfor
       </div>
        
        @endsection
        {{-- data for card --}}
{{-- Add data for box --}}
@endcomponent