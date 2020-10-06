@if($content_slider)
<section class="home-slider inner-page owl-carousel">
    @foreach($content_slider as $content)
        <div class="slider-item" style="background-image: url('{{asset(env('THEME'))}}/img/{{$content->img}}');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>{{$content->title}}</h1>
                        <p class="mb-5">{{$content->descr}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>
@endif
