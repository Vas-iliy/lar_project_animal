@if($article)
    <section style="background-color: #262626;" class="one-breed">
        <div style="margin-top: 50px;" class="container">
            <div class="card card-breed card-one-breed">
                <img style="width: 100%" src="{{asset(env('THEME'))}}/img/{{$article->img}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$article->title}}</h1>
                    <p class="card-text">{!! $article->descr !!}</p>
                    <a href="{{route('blog.index')}}">Go Back</a>
                </div>
            </div>
        </div>
    </section>
@endif
