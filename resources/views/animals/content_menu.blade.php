@if($items)
    @foreach($items as $item)
        @if($item->parent == 0)
        <li class="nav-item {{$item->hasChildren() ? ' dropdown' : ''}} " >
            @endif
            <a class="{{$item->parent ? 'dropdown-item' : 'nav-link'}} {{$item->hasChildren() ? 'nav-link dropdown-toggle' : ''}} {{(\Illuminate\Support\Facades\URL::current() == $item->url()) ? 'active' : ''}}" href="{{$item->url()}}" {{$item->hasChildren() ? "id=\"dropdown04\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"" : ''}} >{{$item->title}}</a>
            @if($item->hasChildren())
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    @include(env('THEME') . '.content_menu', ['items' => $item->children()])
                </div>
            @endif
        @if($item->parent == 0)
            </li>
                @endif
    @endforeach
@endif
