@extends('layouts.app')

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
                        Catalogo - {{ $categoria->nome_categoria }}
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
        </div>
    </div>
</div>

@endsection
