@section('html-attributes')
data-bs-theme="blue-theme"
@endsection

@section('head')
@include('admin.head')
@endsection

@section('body')
@if(!($isAuthPage ?? false))
@include('admin.header')
@include('admin.sidebar')
@endif
@if($isAuthPage ?? false)
@yield('main')
@else
<main class="main-wrapper">
@yield('main')
</main>
@include('admin.footer')
@endif
@yield('page-scripts')
@endsection

@include('layouts.app')
