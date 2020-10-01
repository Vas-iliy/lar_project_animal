@extends(env('THEME') . '.layouts.site')

@section('slider')
    {!! $slider !!}
@endsection

@section('content')
    @include(env('THEME') . '.content')
@endsection

@section('footer')
    @include(env('THEME') . '.footer')
@endsection
