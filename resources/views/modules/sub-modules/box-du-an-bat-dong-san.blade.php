@component('modules.sub-modules.box-right.box-right-master')
@slot('classContainer')
{{$boxright->classContainer=" d-flex flex-column bd-highlight mb-1"}}
@endslot
@slot('classBoxTitle')
{{$boxright->classBoxTitle= " mt-2 pt-2 background-mua-ban-nha-dat"}}
@endslot
@slot('classTitle')
{{$boxright->classTitle}}
@endslot
@slot('contentTitle')
{{$boxright->contentTitle=' DỰ ÁN BẤT ĐỘNG SẢN'}}
@endslot
@slot('classColumnBoxData')
@endslot
@slot('data')
<div class="form-bds">
    <ul>
        <li><a href="#">Căn hộ chung cư</a></li>
        <li><a href="#">Khu biệt thự</a></li>
        <li><a href="#">Nhà phố</a></li>
        <li><a href="#">Khu phức hợp</a></li>
        <li><a href="#">Căn hộ dịch vụ</a></li>
        <li><a href="#">Khu nghĩ dưỡng</a></li>
        <li><a href="#">Cao ốc văn phòng</a></li>
        <li><a href="#">Khu thương mại</a></li>
        <li><a href="#">Khu dân cư</a></li>
        <li><a href="#">Khu nhà ở xã hội</a></li>
        <li><a href="#">Khu đô thị mới</a></li>
        <li><a href="#">Khu tái định cư</a></li>
    </ul>
</div>


@endslot
@endcomponent


