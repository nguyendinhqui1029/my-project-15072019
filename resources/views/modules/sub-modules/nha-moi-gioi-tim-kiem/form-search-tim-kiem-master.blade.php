<div class="col-12 col-sm-12 col-md-12 col-lg-12">
        
    <div class="{{$classContainerFormTimKiem}}">
            <form method="POST" action="{{url ('nha-dat-ban')}}">
                    {!! csrf_field() !!}
                        <div class="tittel">Tìm kiếm</div>
                    <!-- dòng 1  -->
                    <div class="{{$classContainerLoaiBDS}}">
                            {{$loaibds}}
                    </div>
                    <!-- dòng 1 -->   
                    <!-- dòng 2  -->
                    <div class="{{$classContainerTinhThanh}}">
                        {{$tinhthanh}}
                    </div>
                    <!-- dòng 2 -->   
                    <!-- dòng 3  -->
                    <div class="{{$classContainerQuuanHuyen}}">
                    {{$quanhuyen}}
                    </div>
                    <!-- dòng 3 -->   
                    <!--dòng 4-->
                    <div class="{{$classContainerButtonTimKiem}}">
                        {{$buttontimkiem}}
                </div>
                <!--dòng 4, nút-->
            </form>
    </div>
</div>

