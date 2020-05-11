@extends('layouts.app')

@section('content')
    <div style="margin-bottom: 500px;">
        <div
                id="fixed-sidebar"
             class="fixed-sidebar"
                style="">
            @yield('sidebar-content')
        </div>
        <div class="col-md-9 offset-md-3" style="min-height: 400px">
            @yield('main-content')
        </div>
    </div>

@endsection
