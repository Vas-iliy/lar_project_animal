@if($dogs)
<section class="breed">
    <div class="container">
        @foreach($dogs as $dog)
            <div class="col_breed">
                <div class="card card-breed ">
                    <a href="{{route('breed.show', ['alias' => $dog->breed])}}"><img src="{{asset(env('THEME'))}}/img/{{$dog->img}}" alt=""></a>
                    <div class="card-body">
                        <h3 class="card-title">{{$dog->breed}}</h3>
                        <p class="card-text">{!! \Illuminate\Support\Str::limit($dog->text, 150) !!}</p>
                        <a href="{{route('breed.show', ['alias' => \Illuminate\Support\Str::replaceFirst(' ', '', $dog->breed)])}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endif
