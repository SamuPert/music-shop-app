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
                        <li class="breadcrumb-item"><a
                                href="{{ route('lista_sotto_categorie', ['id_categoria'=> $categoria->id_categoria ]) }}">{{ $categoria->nome_categoria }}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('lista_prodotti', ['id_sotto_categoria'=> $sotto_categoria->id_sotto_categoria ]) }}">{{ $sotto_categoria->nome_sotto_categoria }}</a>
                        </li>
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
                                    <h6>Descrizione Prodotto:</h6>
                                    <p>{{$prodotti->descrizione_estesa}}</p>
                                    <p>Prezzo: <span id="price">{{$prodotti->prezzo}}</span>€</p>
                                    @auth()
                                        @if($user->auth_level === 2)
                                            <div class="d-flex align-items-center justify-content-between mt-1">
                                                <h6 class="font-weight-bold my-2" class="prezzo_scontato" >Prezzo Scontato: {{$prodotti->prezzo-($prodotti->prezzo*$prodotti->sconto)/100}}€</h6>
                                            </div>
                                        @endif
                                    @endauth
                                    <div class="form-group form-inline">
                                        <label for="selectquantity" class="mr-3">Seleziona quantità: </label>
                                        <select class="form-control personal" id="selectquantity">
                                                <optgroup label="This is a group">
                                                    <option value="1" selected>1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </optgroup>
                                            </select>
                                    </div>
                                    <p>Stima Prezzo Totale: <span id="totlaprice">{{$prodotti->prezzo}}</span>€</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('onload_scripts')
    $("#selectquantity").on("change", function () {
    var prezzo=$("#price").text();
    var quantita=$("#selectquantity").val();
    $("#totlaprice").text(prezzo*quantita);
    })
@endpush
