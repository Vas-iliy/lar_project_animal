@extends(env('THEME') . '.layouts.site')

@section('menu')
    {!! $navigation !!}
@endsection

@section('slider')
    {!! $slider ?? '' !!}
@endsection

@section('content')
    {!! $content !!}
@endsection

@section('footer')
    {!! $footer !!}
@endsection
