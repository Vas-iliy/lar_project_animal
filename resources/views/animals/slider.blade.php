@if($slider_content)
    <section class="home-slider owl-carousel">
        @foreach($slider_content as $item)
            <div class="slider-item" style="background-image: url('{{asset(env('THEME'))}}/img/{{$item->img}}');">
                <div class="container">
                    <div class="row slider-text align-items-center justify-content-center">
                        <div class="col-md-8 text-center col-sm-12 element-animate">
                            <h1>{{$item->title}}</h1>
                            <p class="mb-5">{{$item->descr}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endif
