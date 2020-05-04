@extends('layouts.app')

@section('content')
    <div class="row w-100 m-0" style="">
        <div class="fixed-sidebar h-100" style="background-color: #ffffff;">
            @yield('sidebar-content')
        </div>
        <div class="col-md-9 offset-md-3" style="background-color: #ffffff;">
            @yield('main-content')
        </div>
    </div>
@endsection
