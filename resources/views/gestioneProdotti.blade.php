@extends('layouts.app')

@section('title', 'Catalogo')

@section('content')

    @include('components.modalInsertProduct')

    <div class="pl-5 pr-5">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('catalogo') }}">Catalogo</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gestione prodotti</li>
                    </ol>
                </nav>

                <div class="card">
                    <div class="card-body">

                        <div class="row mb-3">
                            <div class="col">
                                <button class="btn btn-primary" onclick='$("#modalInserisciProdotto").modal("show")'>
                                    <i class="fa fa-plus-circle icon"></i>
                                    Inserisci prodotto
                                </button>
                            </div>
                        </div>


                        {{ $prodotti->links() }}
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-lg-8 mx-auto">
                                <!-- List group-->
                                <ul class="list-group shadow">
                                    @foreach($prodotti as $prodotto)
                                        <!-- list group item-->
                                        <li class="list-group-item" id="list_item_prodotto_{{ $prodotto->id_prodotto }}">
                                            <!-- Custom content-->
                                            <div class="media flex-column flex-lg-row p-3">
                                                <div class="media-body order-2 order-lg-1 mr-4">
                                                    <form action="">
                                                        <p class="text-muted mb-0 small">Codice prodotto: {{ $prodotto->id_prodotto }}</p>
                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="nome_prodotto_{{ $prodotto->id_prodotto }}">Nome prodotto</label>
                                                            <input type="text" class="form-control" id="nome_prodotto_{{ $prodotto->id_prodotto }}" placeholder="Inserisci il nome prodotto" name="nome_prodotto" disabled value="{{$prodotto->nome_prodotto}}">
                                                        </div>
                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="descrizione_breve">Descrizione breve</label>
                                                            <input type="text" class="form-control" id="_{{ $prodotto->id_prodotto }}" placeholder="Inserisci la descrizione breve" name="descrizione_breve" disabled value="{{$prodotto->descrizione_breve}}">
                                                        </div>
                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="descrizione_estesa_{{ $prodotto->id_prodotto }}">Descrizione estesa</label>
                                                            <textarea class="form-control" name="descrizione_estesa" disabled id="descrizione_estesa_{{ $prodotto->id_prodotto }}" rows="2" placeholder="Inserisci la descrizione estesa" >{{$prodotto->descrizione_estesa}}</textarea>
                                                        </div>
                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="prezzo_{{ $prodotto->id_prodotto }}">Prezzo</label>
                                                            <input type="number" class="form-control prezzo" id="prezzo_{{ $prodotto->id_prodotto }}" placeholder="Inserisci il prezzo" name="prezzo" disabled value="{{$prodotto->prezzo}}">
                                                        </div>
                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="sconto_{{ $prodotto->id_prodotto }}">Sconto ( in percentuale )</label>
                                                            <div class="percentInput">
                                                                <input type="number" class="form-control sconto" id="sconto_{{ $prodotto->id_prodotto }}" placeholder="Inserisci lo sconto" name="sconto" disabled value="{{$prodotto->sconto}}">
                                                                <span class="input-group-text" id="percentuale_sign">%</span>
                                                            </div>
                                                            <p class="text-muted mb-0 prezzo-scontato-div"> Prezzo scontato: <span class="prezzo-scontato">{{ $prodotto->prezzo_scontato }}</span>€ </p>
                                                        </div>

                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="categoria_{{ $prodotto->id_prodotto }}">Categoria</label>
                                                            <select disabled class="custom-select mdb-select md-form" name="categoria" id="select_categoria_{{ $prodotto->id_prodotto }}" onChange="riempiSelectByCategoria('#select_categoria_{{ $prodotto->id_prodotto }}','#select_sotto_categoria_{{ $prodotto->id_prodotto }}');">
                                                                @foreach( $listaCategorie as $categoria )
                                                                    <option
                                                                            @if($prodotto->id_categoria == $categoria->id_categoria)
                                                                            selected="selected"
                                                                            @endif
                                                                            value="{{$categoria->id_categoria}}">
                                                                        {{$categoria->nome_categoria}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="sotto_categoria_{{ $prodotto->id_prodotto }}">Sotto Categoria</label>
                                                            <select disabled class="custom-select mdb-select md-form" name="sotto_categoria" id="select_sotto_categoria_{{ $prodotto->id_prodotto }}" >
                                                                <option value="#" disabled selected>Selezionare</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="immagine_prodotto_{{ $prodotto->id_prodotto }}">Immagine Prodotto</label>
                                                            <div class="custom-file">
                                                                <input disabled type="file" name="immagine_prodotto" class="custom-file-input" lang="it" id="immagine_prodotto_{{ $prodotto->id_prodotto }}">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>

                                                        <button class="btn btn-outline-warning enable-edit mt-2">
                                                            Abilita modifica
                                                        </button>
                                                        <button class="btn btn-outline-danger disable-edit mt-2">
                                                            Annulla
                                                        </button>
                                                        <input type="submit" class="btn btn-primary modifica-submit-button no-pointer-events float-right mt-2" disabled value="Modifica prodotto">
                                                    </form>
                                                </div>

                                                <div class="order-1 order-lg-2 float-right">

                                                    <img class="image_loading" src="{{$prodotto->percorso_foto != '' ? asset( $prodotto->percorso_foto ) : 'https://via.placeholder.com/2800x2200.png' }}" alt="{{ $prodotto->nome_prodotto }}" width="200">
                                                </div>
                                            </div> <!-- End -->
                                        </li> <!-- End -->
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        {{ $prodotti->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('onload_scripts')

@foreach($prodotti as $prodotto)
    riempiSelectByCategoria('#select_categoria_{{ $prodotto->id_prodotto }}','#select_sotto_categoria_{{ $prodotto->id_prodotto }}')
    .then(() => { $('#select_sotto_categoria_{{ $prodotto->id_prodotto }}').val( {{ $prodotto->id_sotto_categoria }} ); });

@endforeach

@endpush