@extends('layouts.app')

@section('title','StaffPage')

@section('content')
@include('components.modalInsertProduct')
@include('components.modalInsertCategory')
@include('components.modalNewSubCategory')
@include('components.modalModificaProdotto')
@include('layouts.header_staff')
    <!-- Start: 2 Rows 1+3 Columns -->
    <br>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="box">
                        <a href="#modalModificaProdotto" onclick='$("#modalModificaProdotto").modal("show")'><h3 class="name"><i class="fa fa-gear icon"></i> Gestisci prodotti </h3></a>
                        <p class="description">Puoi gestire i prodotti cliccando nel link.&nbsp;</p>
                        <a class="learn-more" href="#modalModificaProdotto" onclick='$("#modalModificaProdotto").modal("show")'>Apri gestione prodotti</a>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="box">
                        <h3 class="name"><i class="fa fa-list-alt"></i> Inserisci Categoria</h3>
                        <p>Puoi inserire una nuova categoria nel catalogo.&nbsp;<br>Compila il modulo!</p>
                        <a class="learn-more" href="#modalInserCategory" onclick='$("#modalInsertCategory").modal("show")'>Apri modulo</a>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="box">
                        <h3 class="name"><i class="fa fa-th-list"></i> Inserisci SottoCategoria</h3>
                        <p>Puoi inserire una nuova categoria nel catalogo.&nbsp;<br>Compila il modulo!</p><a class="learn-more" href="#modalNewSubCateogory" onclick='$("#modalNewSubCategory").modal("show")'>Apri modulo</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
