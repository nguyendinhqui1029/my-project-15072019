<div class="{{$classContainerFormSearch}}">
            <form method="POST">
                <!-- dia diem -->
                <div class="{{$classContainerDiaDiem}}">
                    @section('dia-diem')    
                    @show
                </div>
                <!-- dia diem -->
                <!-- loại tin , loại BDSS -->
                <div class="{{$classContainerLoaiTin}}"  >
                    @section('loai-tin-loai-bat-dong-san')    
                    @show
                </div>
                <!-- loại tin , loại BDSS -->
                <!-- dòng 3  -->
                <div class="{{$classContainerQuanHuyen}}">
                    @section('tinh-thanh-pho-quan-huyen')    
                    @show
                </div>
                <!-- dòng 3  -->
        
                <!-- dòng 4  -->
                <div class="{{$classContainerHuong}}">
                    @section('huong')    
                    @show
                </div>
                <!-- dòng 4 -->
        
                <!-- dòng 5 -->
                <div class="{{$classContainerMucGia}}">
                    @section('dien-tich-muc-gia')    
                    @show
                </div>
                <!-- dòng 5 -->
        
                <!--dòng 6-->
                <div class="{{$classContainerButtonSearch}}">
                    @section('button-tim-kiem')    
                    @show
                </div>
                <!--dòng 6, nút-->
            </form>
</div>
