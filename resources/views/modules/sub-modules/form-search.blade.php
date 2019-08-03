<div class="form-search">
        <!-- dia diem -->
        <div class="row justify-content-start">
            <div class="col-2 col-sm-2 col-md-3 col-lg-2">
            <label class="label-form-search">{{__('label_dia_diem')}}</label>
            </div>
            <div class="col-10 col-sm-10 col-md-9 col-lg-10">
                <input type="text" class="place" placeholder="Nhập địa điểm cần tìm"
                    autocomplete="off">
            </div>
        </div>
        <!-- dia diem -->
        <!-- loại tin , loại BDSS -->
        <div class="row justify-content-start">
            <div class="col-2 col-sm-2 col-md-3 col-lg-2">
                <label class="label-form-search">{{__('label_loai_tin')}}</label>
            </div>
            <div class="col-10 col-sm-4 col-md-9 col-lg-4">
                <select class="select">
                    <option value="can-ban">Cần bán</option>
                    <option value="cho-thue">Cho thuê</option>
                    <option value="can-mua">Cần mua</option>
                    <option value="can-thue">Cần thuê</option>
                </select>
            </div>

            <div class="col-2 col-sm-2 col-md-3 col-lg-2">
                <label class="label-form-search">{{__('label_loai_bds')}}</label>
            </div>
            <div class="col-10 col-sm-4 col-md-9 col-lg-4">
                <select class=" select">
                    <option value="can-ban">---Loại BĐS---</option>
                </select>
            </div>
        </div>
        <!-- loại tin , loại BDSS -->
        <!-- dòng 3  -->
        <div class="row justify-content-start">
            <div class="col-2 col-sm-2 col-md-3 col-lg-2">
                    <label class="label-form-search">{{__('label_tinh_thanh')}}</label>
            </div>
            <div class="col-10 col-sm-4 col-md-9 col-lg-4">
                <select class=" select">
                    <option value="can-ban">Cần bán</option>
                    <option value="cho-thue">Cho thuê</option>
                    <option value="can-mua">Cần mua</option>
                    <option value="can-thue">Cần thuê</option>
                </select>
            </div>

            <div class="col-2 col-sm-2 col-md-3 col-lg-2">
                    <label class="label-form-search">{{__('label_quan_huyen')}}</label>
            </div>
            <div class="col-10 col-sm-4 col-md-9 col-lg-4">
                <select class=" select">
                    <option value="can-ban">---Loại BĐS---</option>

                </select>
            </div>
        </div>
        <!-- dòng 3  -->

        <!-- dòng 4  -->
        <div class="row justify-content-start">
            <div class="col-2 col-sm-2 col-md-3 col-lg-2">
                    <label class="label-form-search">{{__('label_huong')}}</label> 
            </div>
            <div class="col-10 col-sm-4 col-md-9 col-lg-4">
              <select class="select">
                  <option value="can-ban">---Huong---</option>
              </select>
            </div>
        </div>
        <!-- dòng 4 -->

        <!-- dòng 5 -->
        <div class="row justify-content-start">
            <div class="col-2 col-sm-2 col-md-3 col-lg-2">
                    <label class="label-form-search">{{__('label_dien_tich')}}</label>
            </div>
            <div class="col-10 col-sm-4 col-md-9 col-lg-4">
                <select class=" select">
                    <option value="can-ban">Cần bán</option>
                    <option value="cho-thue">Cho thuê</option>
                    <option value="can-mua">Cần mua</option>
                    <option value="can-thue">Cần thuê</option>
                </select>
            </div>

            <div class="col-2 col-sm-2 col-md-3 col-lg-2">
                    <label class="label-form-search">{{__('label_muc_gia')}}</label>
            </div>
            <div class="col-10 col-sm-4 col-md-9 col-lg-4">
                <select class=" select">
                    <option value="can-ban">---Mức giá---</option>

                </select>
            </div>
        </div>
        <!-- dòng 5 -->

        <!--dòng 6-->
        <div class="row justify-content-centre">
            <div class="col align-self-center offset-4">
                <input name="" id="" class="btn btn-primary" type="button" value="{{__('button_tim_kiem')}}">
            </div>
            <div class="col align-self-end">
                <a href="/tim-kiem-nang-cao.html" rel="nofollow">{{__('label_tim_kiem_nang_cao')}}</a>
            </div>

        </div>
        <!--dòng 6, nút-->
    </div>