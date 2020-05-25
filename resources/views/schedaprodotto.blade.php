@extends('layouts.app')

@section('title', 'Prodotto')

@section('content')

    <div class="pl-5 pr-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('catalogo') }}">Catalogo</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('lista_sotto_categorie', ['id_categoria'=> $categoria->id_categoria ]) }}">{{ $categoria->nome_categoria }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('lista_prodotti', ['id_sotto_categoria'=> $sotto_categoria->id_sotto_categoria ]) }}">{{ $sotto_categoria->nome_sotto_categoria }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $prodotti->nome_prodotto }}</li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-body">

                        <div class="container">
                            <div class="row">
                                <div class="col col-mobile">
                                    <div data-ride="carousel" class="carousel slide" id="carousel-1">
                                        <div role="listbox" class="carousel-inner">
                                            <div class="carousel-item active"><img class="w-100 d-block"
                                                                                   src="{{ $prodotti->percorso_foto != '' ? asset( $prodotti->percorso_foto ):'https://via.placeholder.com/300x200.png' }}"
                                                                                   alt="Slide Image"/></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-mobile">
                                    <h1 clas mt-5>{{$prodotti->nome_prodotto}}</h1>
                                    <p>{{ $categoria->nome_categoria }} {{ $sotto_categoria->nome_sotto_categoria }}</p>
                                    <hr/>
                                    <br>
                                    <h6>Descrizione Prodotto:</h6>
                                      <p>{{ $prodotti->descrizione_estesa }}</p>
                                    <br>
                                    <h6>Seleziona Quantità: </h6>
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <select class="custom-select mdb-select md-form" id="select_quantita" style="width: 100px" >
                                                    <optgroup label="Seleziona">
                                                        <option value="1" selected>1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <h4 class="float-right" id="prezzo">{{$prodotti->prezzo}} €</h4>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                    <div class="row justify-content-between">
                                        <div class="col-4">
                                            <h5>Totale:</h5>
                                        </div>
                                        <div class="col-4">
                                            <h2 class="float-right" id="tot_prezzo"> €</h2>
                                        </div>
                                    </div>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
