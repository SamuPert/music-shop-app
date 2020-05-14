@extends('layouts.app')

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
                                        src="{{ $categoria->percorso_foto != '' ? asset( $categoria->percorso_foto ) : 'https://via.placeholder.com/300x200.png' }}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h5 class="card-title m-0">{{ $categoria->nome_categoria }}</h5>
                                    <a href="{{ route('lista_sotto_categorie', ['id_categoria' => $categoria->id_categoria]) }}" class="stretched-link"></a>
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
