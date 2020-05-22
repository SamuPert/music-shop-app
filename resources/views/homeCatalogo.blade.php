@extends('layouts.app')

@section('title', 'Catalogo')

@section('content')

    <div class="pl-5 pr-5">
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
                            @foreach($categorie as $categoria)
                                <div class="col-md-4">
                                    <div class="card m-3">
                                        <img
                                            class="card-img-top"
                                            src="{{ $categoria->percorso_foto != '' ? asset( $categoria->percorso_foto ) : 'https://via.placeholder.com/300x200.png' }}"
                                            alt="Card image cap">
                                        <div class="card-body text-center">
                                            <h5 class="card-title m-0">{{ $categoria->nome_categoria }}</h5>
                                            <a href="{{ route('lista_sotto_categorie', ['id_categoria' => $categoria->id_categoria]) }}"
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
                        {{ $prodotti->links() }}
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
{{--                        <nav aria-label="Page navigation example">--}}
{{--                            <ul class="pagination">--}}
{{--                                <li class="page-item"><a class="page-link" href="{{ $prodotti->previousPageUrl() }}">Previous</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                @if($prodotti->hasMorePages())--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                @endif--}}
{{--                                <li class="page-item"><a class="page-link" href="{{ $prodotti->nextPageUrl() }}">Next</a></li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
{{--                        <p>Pagina {{ $prodotti->currentPage() }} di {{ $prodotti->lastPage() }} -- Prossima  <a href="{{ $prodotti->nextPageUrl() }}"> pagina </a></p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
