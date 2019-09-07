<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="{{$classContainerParent}}">
                                <div class="{{$classContainerParentHeader}}">
                                                <div class="{{$classContentHeader}}">{{$contentTitle}}</div>
                                                <div class="{{$classContainerSeeMore}}">
                                                <a href="#" class="{{$classContentSeeMore}}">{{$contentSeeMore}}</a>
                                                </div>
                                </div>
                                <div class="{{$classContentImageTop}}">
                                        <div class="{{$classContentImage}}">
                                                <img src="assets/images/{{$contentURLImage}}" style="width: 100%; height:100%; "/>
                                        </div>
                                        <div class="{{$classContent}}">
                                                {{$content}}
                                        </div>
                                </div>
                                <div class="{{$classParentCart}}">
                                        @section('list-cart')
                                        @show 
                                </div>
                </div>
</div>