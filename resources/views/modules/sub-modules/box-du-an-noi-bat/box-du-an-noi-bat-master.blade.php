<div class="{{$classContainerParent}}">
                <div class="{{$classContainerParentHeader}}">
                                <div class="{{$classContentHeader}}">{{$contentTitle}}</div>
                                <div class="{{$classContainerSeeMore}}">
                                <a href="#" class="{{$classContentSeeMore}}">{{$contentSeeMore}}</a>
                                </div>
                </div>
                <div class="{{$classContentImageTop}}">
                <img src="assets/images/{{$contentURLImage}}" style="width: 100%;height: 100%;"/>
                </div>
                <div class="{{$classParentCart}}">
                        @section('list-cart')
                        @show 
                </div>
</div>