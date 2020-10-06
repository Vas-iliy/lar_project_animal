@if($pages)
<section>
    @foreach($pages as $k=>$page)
    <div class="half d-md-flex d-block">
        <div class="image {{$k%2 != 0 ? 'order-2' : ''}}" style="background-image: url('{{asset(env('THEME'))}}/img/{{$page->img}}')"></div>
        <div class="text text-center element-animate">
            @if($page->created_at)
                <span class="post-meta">{{$page->created_at->format('F d, Y')}}</span>
            @endif
            <h3 class="mb-4">{{$page->title}}</h3>
            <p class="mb-5">{{$page->descr}}</p>
            <p><a href="{{route('blog.show', ['alias' => $page->id])}}" class="btn btn-primary btn-sm">Continue Reading</a></p>
        </div>
    </div>
    @endforeach
</section>
@endif
