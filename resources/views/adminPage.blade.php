@extends('layouts.app')

@section('title', 'AdminPage')

@section('content')
@include('components.modalInsertStaffUser')
@include('components.modalDeletUserStaff')
@include('components.modalDeleteUserRegistered')
@include('layouts.header_admin')

<br>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="box">
                    <a href="{{ route('gestione_staff') }}"><h3 class="name"><i class="fa fa-gear icon"></i> Gestisci Utenti Staff </h3></a>
                    <p class="description">Puoi gestire gli utenti Staff cliccando nel link.&nbsp;</p>
                    <a class="learn-more" href="{{ route('gestione_staff') }}">Apri gestione Staff</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="box">
                    <h3 class="name"><i class="fa fa-remove icon"></i> Elimina Utente Registrato </h3>
                    <p class="description">Puoi eliminare un utente registrato.&nbsp;<br>Compila il modulo!</p><a class="learn-more" href="#modalDeleteUserRegistered" onclick='$("#modalDeleteUserRegistered").modal("show")'>Apri modulo</a>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

@endsection
