@extends('layouts.app')

@section('title', 'Prodotti')

@section('content')

<div class="pl-5 pr-5">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('catalogo', request()->except('page') ) }}">Catalogo</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('lista_sotto_categorie', array_merge( request()->except('page'),['id_categoria'=> $categoria->id_categoria ])) }}">{{ $categoria->nome_categoria }}</a></li>
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
                    {{ $prodotti->appends(request()->except('page'))->links() }}
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
                                                <p class="font-italic text-muted mb-0 small">{{$prodotto->descrizione_breve}}</p>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                </div>
                                                @auth()
                                                    @if($user->auth_level === 2)
                                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                                            <h6 class="font-weight-bold my-2"><s>Prezzo: {{$prodotto->prezzo}}€</s></h6>
                                                            <h6 class="font-weight-bold my-2 " style="color: #FF0000">Prezzo Scontato: {{$prodotto->prezzo-($prodotto->prezzo*$prodotto->sconto)/100}}€</h6>
                                                        </div>
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

