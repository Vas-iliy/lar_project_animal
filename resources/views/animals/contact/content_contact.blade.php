<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5 order-2">
                <form action="{{route('contact')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" id="name" class="form-control ">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="phone">Phone</label>
                            <input name="phone" type="text" id="phone" class="form-control ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email" id="email" class="form-control ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="message">Write Message</label>
                            <textarea name="text" id="message" class="form-control " cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>

            @if($contact)
                <div class="col-md-6 order-2 mb-5">
                    <div class="row justify-content-right">
                        <div class="col-md-8 mx-auto contact-form-contact-info">
                            @foreach($contact as $c)
                                <p class="d-flex">
                                    <span class="{{$c->icon}} icon mr-5"></span>
                                    <span>{{$c->descr}}</span>
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

@if($people)
<section class="section bg-light">
    <div class="container">
        @if($text[0]->name == 'people')
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center">
                    <h2 class=" heading mb-4">{{$text[0]->title}}</h2>
                    <p class="mb-5 lead">{{$text[0]->descr}}</p>
                </div>
            </div>
        @endif
        <div class="row element-animate">
            <div class="major-caousel js-carousel-1 owl-carousel">
                @foreach($people as $person)
                    <div>
                        <div class="media d-block media-custom text-center">
                            <a href="{{route('people.show', ['alias' => \Illuminate\Support\Str::replaceFirst(' ', '-', $person->name)])}}"><img src="{{asset(env('THEME'))}}/img/{{$person->img}}" alt="Image Placeholder" class="img-fluid"></a>
                            <div class="media-body">
                                <h3 class="mt-0 text-black">{{$person->name}} <em>{{$person->profession}}</em></h3>
                                <p>{{\Illuminate\Support\Str::limit($person->descr, 150)}}</p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            <!-- END slider -->
        </div>
    </div>
</section>
@endif
