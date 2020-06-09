@extends('layouts.app')

@section('title', 'Catalogo')

@section('content')


    <div class="pl-5 pr-5">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('staff.homepage') }}">Area Personale</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('modifica_prodotti') }}">Gestione Prodotti</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modifica Prodotto</li>
                    </ol>
                </nav>

                <div class="card">
                    <div class="card-body">

                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-lg-8 mx-auto">
                                <!-- List group-->
                                <ul class="list-group shadow">
                                        <!-- list group item-->
                                        <li class="list-group-item" id="list_item_prodotto_{{ $prodotti->id_prodotto }}">
                                            <!-- Custom content-->
                                            <div class="media flex-column flex-lg-row p-3">
                                                <div class="media-body order-2 order-lg-1 mr-4">
                                                    <form action="">
                                                        <p class="text-muted mb-0 small">Codice prodotto: {{ $prodotti->id_prodotto }}</p>
                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="nome_prodotto{{ $prodotti->id_prodotto }}">Nome prodotto</label>
                                                            <input type="text" class="form-control" id="nome_prodotto{{ $prodotti->id_prodotto }}" placeholder="Inserisci il nome prodotto" name="nome_prodotto" disabled value="{{$prodotti->nome_prodotto}}">
                                                        </div>
                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="descrizione_breve">Descrizione breve</label>
                                                            <input type="text" class="form-control" id="desc_breve{{ $prodotti->id_prodotto }}" placeholder="Inserisci la descrizione breve" name="descrizione_breve" disabled value="{{$prodotti->descrizione_breve}}">
                                                        </div>
                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="descrizione_estesa_{{ $prodotti->id_prodotto }}">Descrizione estesa</label>
                                                            <textarea class="form-control" name="descrizione_estesa" disabled id="desc_estesa{{ $prodotti->id_prodotto }}" rows="2" placeholder="Inserisci la descrizione estesa" >{{$prodotti->descrizione_estesa}}</textarea>
                                                        </div>
                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="prezzo_{{ $prodotti->id_prodotto }}">Prezzo</label>
                                                            <input type="number" class="form-control prezzo" id="prezzo{{ $prodotti->id_prodotto }}" placeholder="Inserisci il prezzo" name="prezzo" disabled value="{{$prodotti->prezzo}}">
                                                        </div>
                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="sconto_{{ $prodotti->id_prodotto }}">Sconto ( in percentuale )</label>
                                                            <div class="percentInput">
                                                                <input type="number" class="form-control sconto" id="sconto{{ $prodotti->id_prodotto }}" placeholder="Inserisci lo sconto" name="sconto" disabled value="{{$prodotti->sconto}}">
                                                                <span class="input-group-text" id="percentuale_sign">%</span>
                                                            </div>
                                                            <p class="text-muted mb-0 prezzo-scontato-div"> Prezzo scontato: <span class="prezzo-scontato">{{ $prodotti->prezzo_scontato }}</span>€ </p>
                                                        </div>

                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="categoria_{{ $prodotti->id_prodotto }}">Categoria</label>
                                                            <select disabled class="custom-select mdb-select md-form" name="categoria" id="select_categoria_{{ $prodotti->id_prodotto }}" onChange="riempiSelectByCategoria('#select_categoria_{{ $prodotti->id_prodotto }}','#select_sotto_categoria_{{ $prodotti->id_prodotto }}');">
                                                                @foreach( $listaCategorie as $categoria )
                                                                    <option
                                                                            @if($prodotti->id_categoria == $categoria->id_categoria)
                                                                            selected="selected"
                                                                            @endif
                                                                            value="{{$categoria->id_categoria}}">
                                                                        {{$categoria->nome_categoria}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="sotto_categoria_{{ $prodotti->id_prodotto }}">Sotto Categoria</label>
                                                            <select disabled class="custom-select mdb-select md-form" name="sotto_categoria" id="select_sotto_categoria_{{ $prodotti->id_prodotto }}" >
                                                                <option value="#" disabled selected>Selezionare</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group mb-1">
                                                            <label class="mb-0" for="immagine_prodotto_{{ $prodotti->id_prodotto }}">Immagine Prodotto</label>
                                                            <div class="custom-file">
                                                                <input disabled type="file" name="immagine_prodotto" class="custom-file-input" lang="it" id="percorso_foto{{ $prodotti->id_prodotto }}">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>

                                                        <button class="btn btn-outline-warning enable-edit mt-2">
                                                            Abilita modifica
                                                        </button>
                                                        <button class="btn btn-outline-danger disable-edit mt-2">
                                                            Annulla
                                                        </button>
                                                        <input type="submit" class="btn btn-primary modifica-submit-button no-pointer-events float-right mt-2" id="edit_id_{{$prodotti->id_prodotto}}" onclick="modificaProdotto(event, {{$prodotti->id_prodotto}})" disabled value="Modifica prodotto">
                                                    </form>
                                                </div>

                                                <div class="order-1 order-lg-2 float-right">
                                                    <img class="image_loading" src="{{$prodotti->percorso_foto != '' ? asset( $prodotti->percorso_foto ) : 'https://via.placeholder.com/2800x2200.png' }}" alt="{{ $prodotti->nome_prodotto }}" width="200">
                                                    <form action="{{route('removeProdotto', [$prodotti->id_prodotto])}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button id="{{$prodotti->id_prodotto}}" name="{{$prodotti->id_prodotto}}"  class="btn btn-outline-danger"  onclick="return confirm('Sei Sicuro di voler procedere?')" type="submit" style="margin-top: 5%">Elimina Prodotto</button>
                                                    </form>
                                                </div>
                                            </div> <!-- End -->
                                        </li> <!-- End -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('onload_scripts')


    riempiSelectByCategoria('#select_categoria_{{ $prodotti->id_prodotto }}','#select_sotto_categoria_{{ $prodotti->id_prodotto }}')
    .then(() => { $('#select_sotto_categoria_{{ $prodotti->id_prodotto }}').val( {{ $prodotti->id_sotto_categoria }} ); });


@endpush
