@if($dog)
<section style="background-color: #262626;" class="one-breed">
    <div style="margin-top: 50px;" class="container">
        <div class="card card-breed card-one-breed">
            <img style="width: 100%" src="{{asset(env('THEME'))}}/img/{{$dog->img}}" alt="">
            <div class="card-body">
                <h1 class="card-title">{{$dog->title}}</h1>
                <p class="card-text">{!! $dog->text !!}</p>
                <a href="{{route('breed.index')}}">Go Back</a>
            </div>
        </div>
    </div>
</section>
@endif
