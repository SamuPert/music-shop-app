@extends('layouts.app')

@section('title', 'Sotto categorie')

@section('content')

<div class="pl-5 pr-5">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('catalogo') }}">Catalogo</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $categoria->nome_categoria }}</li>
                </ol>
            </nav>

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">
                        Catalogo categoria <i>{{ $categoria->nome_categoria }}</i>
                    </h5>

                    <div class="row p-3">
                        @foreach($sotto_categorie as $sotto_categoria)
                        <div class="col-md-4">
                            <div class="card m-3">
                                <img
                                        class="card-img-top"
                                        src="{{ $sotto_categoria->percorso_foto != '' ? asset( $sotto_categoria->percorso_foto ) : 'https://via.placeholder.com/300x200.png' }}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h5 class="card-title m-0">{{ $sotto_categoria->nome_sotto_categoria }}</h5>
                                    <a href="{{ route('lista_prodotti', ['id_sotto_categoria' => $sotto_categoria->id_sotto_categoria]) }}" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        I nostri prodotti
                    </h5>
                    {{ $prodotti->links() }}
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <!-- List group-->
                            @foreach($prodotti as $prodotto)
                                <ul class="list-group shadow">
                                    <!-- list group item-->
                                    <li class="list-group-item">
                                        <!-- Custom content-->
                                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                            <div class="media-body order-2 order-lg-1">
                                                <h5 class="mt-0 font-weight-bold mb-2">{{$prodotto->nome_prodotto}}</h5>
                                                <p class="font-italic text-muted mb-0 small">Ciao</p>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <h6 class="font-weight-bold my-2">{{$prodotto->prezzo}}€</h6>
                                                </div>
                                            </div>
                                            <img src="{{$prodotto->percorso_foto != '' ? asset( $prodotto->percorso_foto ) : 'https://via.placeholder.com/300x200.png' }}" alt="Generic placeholder image"
                                                 width="200" class="ml-lg-5 order-1 order-lg-2">
                                            <a href="{{ route('visualizza_prodotto', ['id_prodotto' => $prodotto->id_prodotto]) }}" class="stretched-link"></a>
                                        </div> <!-- End -->
                                    </li> <!-- End -->
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    {{ $prodotti->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
