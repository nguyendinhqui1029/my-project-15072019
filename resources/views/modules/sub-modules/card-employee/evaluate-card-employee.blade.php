<div class="row justify-content-start">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        {{-- <div class="col-5 col-sm-5 col-md-5 col-lg-5">  card employee--}}
        <div class="stars" >
            <form action="">
                    <span>@yield('title-evaluate')</span>
                    @for ($j = 1; $j <=5; $j++)
                        <input class="star {{$idProduct.$j}}" id="{{$idProduct.$j}}"
                        type="radio" name="star" />
                        <label class="star {{$idProduct.$j}}"
                                for="{{$idProduct.$j}}"></label>
                    @endfor
            </form>
        </div>
    </div>
</div>