@extends(env('THEME') . '.layouts.site')

@section('slider')
    {!! $slider !!}
@endsection

@section('content')
    @include(env('THEME') . '.home.content')
@endsection

@section('footer')
    @include(env('THEME') . '.footer')
@endsection
