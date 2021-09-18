<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
@include('layout.partials.nav')
@if (Auth::check())
@include('layout.partials.admin')
@endif
@yield('content')
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
 </body>
@yield('javascripts')
</html><?php
