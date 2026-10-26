@section('head')
@include('landing.head')
@endsection

@section('body')
@include('landing.header')
@yield('main')
@include('landing.footer')
@yield('page-scripts')
@endsection

@include('layouts.app')
