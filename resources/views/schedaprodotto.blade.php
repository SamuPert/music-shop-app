@extends('layouts.app')

@section('title', 'Prodotto')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col col-mobile">
                <div data-ride="carousel" class="carousel slide" id="carousel-1">
                    <div role="listbox" class="carousel-inner">
                        <div class="carousel-item active"><img class="w-100 d-block"
                                                               src="{{ $prodotti->percorso_foto != '' ? asset( $prodotti->percorso_foto ):'https://via.placeholder.com/300x200.png' }}"
                                                               alt="Slide Image"/></div>
                    </div>
                    <div><a href="#carousel-1" role="button" data-slide="prev" class="carousel-control-prev"><span
                                aria-hidden="true" class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a
                            href="#carousel-1" role="button" data-slide="next"
                            class="carousel-control-next"><span aria-hidden="true"
                                                                class="carousel-control-next-icon"></span><span
                                class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
            <div class="col col-mobile">
                <h1 clas mt-5>{{$prodotti->nome_prodotto}}</h1>
                <p>Categoria (Non so come inserisla con la join</p>
                <hr/>
                <h6>Descrizione Prodotto:</h6>
                <p>Inserire qui descrizione prodotto</p>
                <h6>Prezzo Prodotto:</h6>
                <p>{{$prodotti->prezzo}} €</p>
                <p>Paragraph</p><label>Seleziona quantità: <select>
                        <optgroup label="This is a group">
                            <option value="12" selected>1</option>
                            <option value="13">2</option>
                            <option value="14">3</option>
                            <option value="14">4</option>
                            <option value="14">5</option>
                        </optgroup>
                    </select></label></div>
        </div>
    </div>
@endsection
