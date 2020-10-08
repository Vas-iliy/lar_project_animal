@if($people)
    <section class="breed">
        <div class="container">
            @foreach($people as $person)
                <div class="col_breed">
                    <div class="card card-breed ">
                        <a href="{{route('people.show', ['alias' => $person->name])}}"><img src="{{asset(env('THEME'))}}/img/{{$person->img}}" alt=""></a>
                        <div class="card-body">
                            <h2 class="card-title">{{$person->name}}</h2>
                            <h3>{{$person->profession}}</h3>
                            <p class="card-text">{!! \Illuminate\Support\Str::limit($person->descr, 150) !!}</p>
                            <a href="{{route('people.show', ['alias' => \Illuminate\Support\Str::replaceFirst(' ', '-', $person->name)])}}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endif
