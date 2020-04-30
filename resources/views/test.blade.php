@extends('layouts.app_sidebar')

@section('title', 'PROVA')


@section('sidebar-content')
    <div class="m-3 card">
        <div class="card-body">
            Contenuto SIDEBAR
        </div>
    </div>
@endsection

@section('main-content')

    <div class="container">
        @for($i=0; $i<5;$i++)
            <div class="m-3 card float-left m-0 w-25">
                <div class="card-body">
                    Contenuto MAIN
                </div>
            </div>
        @endfor

    </div>


@endsection

