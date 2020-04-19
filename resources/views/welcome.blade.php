@extends('layouts.main')

@section('title', 'Homepage')

@section('sidebar')
    @parent

@endsection

@section('content')
    Contenuto
    <p>This is appended to the master sidebar.</p>
@endsection
