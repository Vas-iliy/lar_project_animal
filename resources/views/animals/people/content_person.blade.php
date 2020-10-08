@if($person)
    <section style="background-color: #262626;" class="one-breed">
        <div style="margin-top: 50px;" class="container">
            <div class="card card-breed card-one-breed">
                <img style="width: 100%" src="{{asset(env('THEME'))}}/img/{{$person->img}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$person->title}}</h1>
                    <h2 class="card-subtitle">{{$person->profession}}</h2>
                    <p class="card-text">{!! $person->descr !!}</p>
                    <a href="{{route('people.index')}}">Go Back</a>
                </div>
            </div>
        </div>
    </section>
@endif
