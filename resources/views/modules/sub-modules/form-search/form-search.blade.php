<div class="@yield('class-form-search')">
            <form>
                <!-- dia diem -->
                <div class="row justify-content-start">
                    @section('dia-diem')    
                    @show
                </div>
                <!-- dia diem -->
                <!-- loại tin , loại BDSS -->
                <div class="row justify-content-start"  >
                    @section('loai-tin-loai-bat-dong-san')    
                    @show
                </div>
                <!-- loại tin , loại BDSS -->
                <!-- dòng 3  -->
                <div class="row justify-content-start">
                    @section('tinh-thanh-pho-quan-huyen')    
                    @show
                </div>
                <!-- dòng 3  -->
        
                <!-- dòng 4  -->
                <div class="row justify-content-start">
                    @section('huong')    
                    @show
                </div>
                <!-- dòng 4 -->
        
                <!-- dòng 5 -->
                <div class="row justify-content-start" style="margin-bottom: @yield('margin-buttom') ;">
                    @section('dien-tich-muc-gia')    
                    @show
                </div>
                <!-- dòng 5 -->
        
                <!--dòng 6-->
                <div class="row justify-content-centre">
                    @section('button-tim-kiem')    
                    @show
                </div>
                <!--dòng 6, nút-->
            </form>
</div>
