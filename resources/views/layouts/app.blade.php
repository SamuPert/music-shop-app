<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    <!-- APP CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

@if(     Request::is('admin/*') )
    @include('layouts.header_admin')
@elseif( Request::is('staff/*') )
    @include('layouts.header_staff')
@else
    @include('layouts.header')
@endif

{{-- TODO: Visualizzare solo quando è necessario --}}
@includeWhen( false , 'layouts.filtri-bar')

<div class="main-content">
    @yield('content')
</div>

@include('layouts.footer')

<div id="loading-div" class="">
    <div class="sk-chase">
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
    </div>
</div>


<!-- APP JS -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    @stack('onload_scripts')
});
</script>

</body>
</html>
