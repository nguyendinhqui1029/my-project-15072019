<div class="col-12 col-sm-12 col-md-12 col-lg-12">
     <div class="row" style="background:wheat;">
          <div class="col-12 col-sm-6 col-md-6 col-xl-3 col-lg-3">
               <div class="title-area">
                    <h5>Khu vực miền nam</h5>
               </div>
               <div class="row">
                    @foreach ($listMN as $item2)
                    <div class="col-6 col-sm-6 col-md-6 col-xl-6 col-lg-6">
                              <div class="border-area">
                                   {{$item2->TenTinhThanhPho}}
                              </div>
                         </div>
                    @endforeach
                    
               </div>                                          
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-xl-3 col-lg-3">
               <div class="title-area">
                    <h5>Khu vực miền trung</h5>
               </div>
               <div class="row ">
                    @foreach ($listMT as $item)
                         <div class="col-6 col-sm-6 col-md-6 col-xl-6 col-lg-6 ">
                              <div class="border-area">
                                   {{$item->TenTinhThanhPho}}
                              </div>
                         </div>
                     @endforeach  
               </div>  
                                               
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-xl-3 col-lg-3">
               <div class="title-area">
                    <h5>Khu vực miền bắc</h5>
               </div>
                    <div class="row">
                         @foreach ($listMB as $item1)
                         <div class="col-6 col-sm-6 col-md-6 col-xl-6 col-lg-6">
                                   <div class="border-area">
                                        {{$item1->TenTinhThanhPho}}
                                   </div>
                              </div>
                         @endforeach  
                    </div>                                    
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-xl-3 col-lg-3">
               <div class="title-area">
                    <h5>Khu vực khác</h5>
               </div>
                    <div class="row">
                         @foreach ($listMK as $item3)
                         <div class="col-6 col-sm-6 col-md-6 col-xl-6 col-lg-6">
                                   <div class="border-area">
                                        {{$item3->TenTinhThanhPho}}
                                   </div>
                              </div>
                         @endforeach
                         
                    </div>         
          </div>
     </div>
</div>