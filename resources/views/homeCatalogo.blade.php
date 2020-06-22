@extends('layouts.app')

@section('title', 'Catalogo')

@section('content')

    <div class="pl-5 pr-5" style="padding-top: 30px">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Catalogo</li>
                    </ol>
                </nav>

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">
                            Catalogo
                        </h5>

                        <div class="row p-3">
                            @foreach($categorie->sortBy('nome_categoria') as $categoria)
                                <div class="col-md-4">
                                    <div class="card m-3">
                                        <img
                                            class="card-img-top"
                                            src="{{ $categoria->percorso_foto != '' ? asset( $categoria->percorso_foto ) : 'https://via.placeholder.com/300x200.png' }}"
                                            alt="Card image cap">
                                        <div class="card-body text-center">
                                            <h5 class="card-title m-0">{{ $categoria->nome_categoria }}</h5>
                                            <a href="{{ route('lista_sotto_categorie', array_merge( request()->except('page'), ['id_categoria' => $categoria->id_categoria] )) }}"
                                               class="stretched-link"></a>
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
                        @if( count($prodotti) == 0 )
                            Nessun prodotto trovato...
                        @endif
                        @if( request()->has('nomeProdotto') || request()->has('prezzoMin') || request()->has('prezzoMax') )
                            <button
                                    onclick="resetFilters();"
                                    class="btn btn-danger mt-2 mb-2"
                            > Resetta filtri <i class="fa fa-ban"></i></button>
                        @endif
                        {{ $prodotti->appends(request()->except('page'))->links() }}
                        <div class="row" style="margin-bottom: 20px;">
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
                                                    <p class="font-italic text-muted mb-0 small">{{$prodotto->descrizione_breve}}</p>
                                                    @auth()
                                                        @if($user->auth_level === 2)
                                                            @if($prodotto->sconto!=0.00)
                                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                                    <h6 class="font-weight-bold my-2"><s>Prezzo: {{$prodotto->prezzo}}€</s></h6>
                                                                    <h6 class="font-weight-bold my-2">- Sconto: {{$prodotto->sconto}}%</h6>
                                                                </div>
                                                                <h6 class="font-weight-bold my-2 " style="color: #FF0000">Prezzo Scontato: {{$prodotto->prezzo-($prodotto->prezzo*$prodotto->sconto)/100}}€</h6>
                                                            @elseif($prodotto->sconto===0.00)
                                                                <h6 class="font-weight-bold my-2">Prezzo: {{$prodotto->prezzo}}€</h6>
                                                            @endif
                                                        @elseif($user->auth_level === 3 || $user->auth_level === 4)
                                                            <h6 class="font-weight-bold my-2">Prezzo: {{$prodotto->prezzo}}€</h6>
                                                        @endif
                                                    @endauth
                                                    @guest()
                                                        <h6 class="font-weight-bold my-2">Prezzo: {{$prodotto->prezzo}}€</h6>
                                                    @endguest
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
                        {{ $prodotti->appends(request()->except('page'))->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
