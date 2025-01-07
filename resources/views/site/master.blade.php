@include('site.layouts.header')

@include('site.include.topModal')
@include('site.include.loader')
@include('site.layouts.navbar')
@yield('content')

@include('site.layouts.footer')
