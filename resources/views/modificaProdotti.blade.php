@extends('layouts.app')


@section('content')
    @include('components.modalInsertProduct')
    <div class="pl-5 pr-5">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('staff.homepage') }}">Area Personale</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gestione prodotti</li>
                    </ol>
                </nav>

                <div class="card">
                    <div class="card-body">

                        <div class="col-md-12" id="message">
                            <div style="text-align: center; font-size: 30px;">
                                <b>Scegli il prodotto da modificare</b>
                            </div>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr style="text-align: center">
                                    <th scope="col">Id</th>
                                    <th scope="col" style="width: 175px">Nome</th>
                                    <th scope="col"style="width: 400px">Descrizione Breve</th>
                                    <th scope="col">Descrizione Estesa</th>
                                    <th scope="col">Prezzo</th>
                                    <th scope="col">Sconto</th>
                                    <th scope="col">Azioni</th>
                                </tr>
                                <div class="row mb-3">
                                    <div class="col">
                                        <button class="btn btn-primary" data-dismiss="modal" href="#modalInserisciProdotto"  onclick='$("#modalInserisciProdotto").modal("show")'>
                                            <i class="fa fa-plus-circle icon"></i>
                                            Inserisci prodotto
                                        </button>
                                    </div>
                                </div>
                                </thead>
                                <tbody>
                                @foreach($prodotti as $prodotto)
                                    <tr>
                                        <th scope="row">{{$prodotto->id_prodotto}}</th>
                                        <td>{{$prodotto->nome_prodotto}}</td>
                                        <td>{{$prodotto->descrizione_breve}}</td>
                                        <td style="font-size: small">{{$prodotto->descrizione_estesa}}</td>
                                        <td>{{$prodotto->prezzo}}€</td>
                                        <td>{{$prodotto->sconto}}%</td>
                                        <td>
                                            <a class="btn btn-primary btn-block"  href="{{  route('gestione_prodotti', ['id_prodotto' => $prodotto->id_prodotto])  }}"><h6 class="name"> Modifica prodotto </h6></a>
                                            <form action="{{route('removeProdotto', [$prodotto->id_prodotto])}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button id="{{$prodotto->id_prodotto}}" name="{{$prodotto->id_prodotto}}"  class="btn btn-outline-danger"  onclick="return confirm('Sei Sicuro di voler procedere?')" ype="submit" style="margin-top: 5%">Elimina Prodotto</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <br>
                            {{ $prodotti->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
