@extends('layouts.app')

@section('title', 'AdminPage')

@section('content')
@include('components.modalInsertStaffUser')
@include('components.modalDeletUserStaff')
@include('components.modalDeleteUserRegistered')
<!-- Start: 2 Rows 1+2 Columns -->
<div>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-6" style="width: 490px;height: 180px;">
                <div class="box">
                    <h3 class="name"><i class="fa fa-user-plus icon"></i> Inserisci Utente Staff</h3>
                    <p class="description">Puoi inserire un nuovo utente nello staff.&nbsp;<br>Compila il modulo!</p><a class="learn-more" href="#modalInsertStaffUser" onclick='$("#modalInsertStaffUser").modal("show")'>Apri modulo</a></div>
            </div>
            <div class="col-md-6" >
                <div class="box">
                    <h3 class="name"><i class="fa fa-pencil icon"></i> Modifica Utente Staff</h3>
                    <p class="description">Puoi modificare i dati di un utente dello staff. Compila il modulo!</p><a class="learn-more" href="#">Apri modulo</a></div>
            </div>
        </div>
    </div>
</div>
<!-- End: 2 Rows 1+2 Columns -->
<!-- Start: 1 Row 2 Columns -->
<br>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="height: 180px;">
                <div class="box">
                    <h3 class="name"><i class="fa fa-user-times icon"></i> Elimina Utente Staff</h3>
                    <p class="description">Puoi eliminare un utente dallo staff.&nbsp;<br>Compila il modulo!</p><a class="learn-more" href="#modalDeleteUserStaff" onclick='$("#modalDeleteUserStaff").modal("show")'>Apri modulo</a></div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <h3 class="name"><i class="fa fa-remove icon"></i> Elimina Utente Registrato </h3>
                    <p class="description">Puoi eliminare un utente registrato.&nbsp;<br>Compila il modulo!</p><a class="learn-more" href="#modalDeleteUserRegistered" onclick='$("#modalDeleteUserRegistered").modal("show")'>Apri modulo</a></div>
            </div>
        </div>
    </div>
</div>


@endsection
