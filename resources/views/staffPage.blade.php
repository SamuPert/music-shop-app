@extends('layouts.app_admin')

@section('title','StaffPage')

@section('content')
@include('components.modalInsertProduct')
@include('components.modalNewSubCategory')
<!-- Start: 2 Rows 1+3 Columns -->
<br>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4" style="height: 180px;width: 325px;">
                <div class="box">
                    <h3 class="name"><i class="fa fa-plus-circle icon"></i> Inserisci Prodotto</h3>
                    <p class="description">Puoi inserire un nuovo utente nello staff.&nbsp;<br>Compila il modulo!</p><a class="learn-more modal-toggle" href="#modalInserisciProdotto" onclick='$("#modalInserisciProdotto").modal("show")'>Apri modulo</a></div>
            </div>
            <div class="col-md-4 col-lg-4" style="width: 325px;">
                <h3 class="name"><i class="fa fa-pencil"></i> Modifica Prodotto</h3>
                <p>Puoi modificare i dati di una prodotto del catalogo.Compila il modulo!</p><a class="learn-more" href="#">Apri modulo</a></div>
            <div class="col-md-4" style="width: 325px;">
                <h3 class="name"><i class="fa fa-trash"></i>Elimina Prodotto</h3>
                <p>Puoi modificare i dati di una prodotto del catalogo.Compila il modulo!</p><a class="learn-more" href="#">Apri modulo</a></div>
        </div>
    </div>
</div>
<!-- End: 2 Rows 1+3 Columns -->
<!-- Start: 1 Row 2 Columns -->
<br>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 offset-lg-2">
                <h3 class="name"><i class="fa fa-list-alt"></i> Inserisci Categoria</h3>
                <p>Puoi inserire una nuova categoria nel catalogo.&nbsp;<br>Compila il modulo!</p><a class="learn-more" href="#">Apri modulo</a></div>
            <div class="col-md-6 col-lg-5 offset-lg-0">
                <h3 class="name"><i class="fa fa-th-list"></i> Inserisci SottoCategoria</h3>
                <p>Puoi inserire una nuova categoria nel catalogo.&nbsp;<br>Compila il modulo!</p><a class="learn-more" href="#modalNewSubCateogory" onclick='$("#modalNewSubCategory").modal("show")'>Apri modulo</a></div>
        </div>
    </div>
</div>
<!-- End: 1 Row 2 Columns -->


@endsection
