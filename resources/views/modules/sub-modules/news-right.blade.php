
    <div class="news-right">
        <div class="title">{{__('title_tin_tuc')}}</div>
        <div class="content-news">
            <ul>
                @foreach ($listtintuc as $tt)           
            <li><a href="#">{{$tt->NoiDungTomTatTinTuc}}</a>
                        @if ($tt->TrangThai=== 4)
                        <img src="assets/images/new.gif">
                        @endif   
            <span class="date" style="margin-left:10px;color: crimson;">{{$tt->NgayDangTinTuc}}</span>
                </li>
                @endforeach
            </ul>
            <div style="text-align:right; padding:0px 3px 0px 0px;"><a
                    href="#">
                    &lt;&lt; Xem thêm &gt;&gt; </a></div>
        </div>
    </div>
