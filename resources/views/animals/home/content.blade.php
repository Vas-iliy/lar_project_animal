@if($dog)
<section class="section element-animate">
    <div class="container">
        @if($text[0]->name == 'dog')
            <div class="row justify-content-center mb-5">
                <div class="col-md-4"></div>
                <div class="col-md-8 section-heading">
                    <h2>{{$text[0]->title}}</h2>
                    <p class="small-sub-heading">{{$text[0]->descr}}</p>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="{{asset(env('THEME'))}}/img/{{$dog->img}}" alt="Image placeholder" class="img-fluid">
            </div>
            <div class="col-md-8">
                {!! $dog->text !!}
                <p><a href="{{route('blog.show', ['alias' => $dog->id])}}">Learn More <span class="ion-ios-arrow-right"></span></a></p>
            </div>
        </div>
    </div>
</section>
@endif

@if($people)
<section class="section bg-light">
    <div class="container">
        @if($text[1]->name == 'people')
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center">
                    <h2 class=" heading mb-4">{{$text[1]->title}}</h2>
                    <p class="mb-5 lead">{{$text[1]->descr}}</p>
                </div>
            </div>
        @endif
        <div class="row element-animate">
            <div class="major-caousel js-carousel-1 owl-carousel">
                @foreach($people as $person)
                    <div>
                        <div class="media d-block media-custom text-center">
                            <a href="{{route('people.show', ['alias', \Illuminate\Support\Str::replaceFirst(' ', '-', $person->name)])}}"><img src="{{asset(env('THEME'))}}/img/{{$person->img}}" alt="Image Placeholder" class="img-fluid"></a>
                            <div class="media-body">
                                <h3 class="mt-0 text-black">{{$person->name}}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
<!-- END section -->

@if($dogs)
<section class="section border-t">
    <div class="container">
        @if($text[2]->name == 'breed')
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center">
                    <h2 class=" heading mb-4">{{$text[2]->title}}</h2>
                    <p class="mb-5 lead">{{$text[2]->descr}}</p>
                </div>
            </div>
        @endif

        <div class="row no-gutters">
            @foreach($dogs as $dog)
                <div class="col-md-4 element-animate">
                    <a href="{{route('breed.show', ['alias' => \Illuminate\Support\Str::replaceFirst(' ','-', $dog->breed)])}}" class="link-thumbnail">
                        <h3>{{$dog->breed}}</h3>
                        <span class="ion-plus icon"></span>
                        <img src="{{asset(env('THEME'))}}/img/{{$dog->img}}" alt="Image placeholder" class="img-fluid">
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</section>
@endif
<!-- END section -->
@if($articles)
<section class="section blog">
    <div class="container">

        @if($text[3]->name == 'blog')
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center">
                    <h2 class=" heading mb-4">{{$text[3]->title}}</h2>
                    <p class="mb-5 lead">{{$text[3]->descr}}</p>
                </div>
            </div>
        @endif

        <div class="row">
            @foreach($articles as $k=>$article)
                @if(($k/2 != 1))
            <div class="col-md-6">
                @endif
                <div class="media mb-4 d-md-flex d-block element-animate">
                    <a href="#" class="mr-5"><img src="{{asset(env('THEME'))}}/img/{{$article->img}}" alt="Placeholder image" class="img-fluid"></a>
                    <div class="media-body">
                        @if($article->created_at)
                            <span class="post-meta">{{$article->created_at->format('F d, Y')}}</span>
                        @endif
                        <h3 class="mt-2 text-black"><a href="#">{{$article->title}}</a></h3>
                        @if($k == 0 || $k > 2)
                            <p>{{\Illuminate\Support\Str::limit($article->descr, 100)}}</p>
                        @endif
                        <p><a href="{{route('blog.show', ['alias' => $article->id])}}" class="btn btn-primary btn-sm">Read more</a></p>
                    </div>
                </div>
                @if($k/1 != 1)
            </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endif
