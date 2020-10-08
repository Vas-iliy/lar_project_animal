@if($dogs)
<section class="breed">
    <div class="container">
        <div class="row">
            @foreach($dogs as $dog)
                <div class="col-6">
                    <div class="card card-breed">
                        <a href="{{route('breed.show', ['alias' => $dog->breed])}}"><img src="{{$dog->img}}" alt=""></a>
                        <div class="card-body">
                            <h3 class="card-title">{{$dog->breed}}</h3>
                            <p class="card-text">{!! $dog->text !!}</p>
                            <a href="{{route('breed.show', ['alias' => $dog->breed])}}" class="btn btn-primary">{{$dog->breed}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
