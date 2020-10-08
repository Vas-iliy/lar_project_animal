@if($dogs)
<section>
    @foreach($dogs as $k=>$dog)
    <div class="half d-md-flex d-block">
        <div class="image {{$k%2 != 0 ? 'order-2' : ''}}" style="background-image: url('{{asset(env('THEME'))}}/img/{{$dog->img}}')"></div>
        <div class="text text-center element-animate">
            <h3 class="mb-4">{{$dog->breed}}</h3>
            <p class="mb-5">{!! \Illuminate\Support\Str::limit($dog->text, 150) !!}</p>
            <p><a href="{{route('breed.show', ['alias' => \Illuminate\Support\Str::replaceFirst(' ', '-', $dog->breed)])}}" class="btn btn-primary btn-sm">Learn More</a></p>
        </div>
    </div>
    @endforeach
</section>
@endif


@if($people)
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center">
                    <h2 class=" heading mb-4">The Dog Team</h2>
                    <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
                </div>
            </div>
            <div class="row element-animate">
                <div class="major-caousel js-carousel-1 owl-carousel">
                    @foreach($people as $person)
                        <div>
                            <div class="media d-block media-custom text-center">
                                <a href="{{route('people.show', ['alias' => \Illuminate\Support\Str::replaceFirst(' ', '-', $person->name)])}}"><img src="{{asset(env('THEME'))}}/img/{{$person->img}}" alt="Image Placeholder" class="img-fluid"></a>
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
