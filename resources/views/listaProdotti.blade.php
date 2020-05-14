@extends('layouts.app')

@section('title', 'Prodotti')

@section('content')

<div class="pl-5 pr-5">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('catalogo') }}">Catalogo</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('lista_sotto_categorie', ['id_categoria'=> $categoria->id_categoria ]) }}">{{ $categoria->nome_categoria }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $sotto_categoria->nome_sotto_categoria }}</li>
                </ol>
            </nav>

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">
                        @if(count($prodotti) == 0)
                            Non c'è <i>nessun prodotto</i> in questa categoria.
                        @elseif(count($prodotti) == 1)
                            C'è <i>un solo prodotto</i>
                        @else
                            Ci sono <i>{{ count($prodotti) }} prodotti</i>
                        @endif
                    </h5>

                    <div class="row p-3">
                        @foreach($prodotti as $prodotto)
                        <div class="col-md-4">
                            <div class="card m-3">
                                <img
                                        class="card-img-top"
                                        src="{{ $prodotto->percorso_foto != '' ? asset( $prodotto->percorso_foto ) : 'https://via.placeholder.com/300x200.png' }}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $prodotto->nome_prodotto }}</h5>
                                    <h6 class="card-subtitle mb-0 text-muted">{{ $prodotto->prezzo }}€</h6>
                                    <a href="{{ route('lista_prodotti', ['id_sotto_categoria' => $sotto_categoria->id_sotto_categoria]) }}" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>

@endsection
