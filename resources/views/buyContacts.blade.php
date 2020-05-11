@extends('layouts.app')

@section('content')

    <h1>Acquisto Prodotti:</h1>
    <p>Per acquistare i prodotti presenti all&#39;interno del nostro catalogo contatta il nostro servizio clienti
        compilando la form sottostante. Verrai ricontattato da un nostro addetto alle vendite entro 24h</p>
    <form>
        <div class="form-group"><label>Nome</label><input type="text" class="form-control"/></div>
        <div class="form-group"><label>Cognome</label><input type="text" class="form-control"/></div>
        <div class="form-group"><label>Recapito Telefonico</label><input type="tel" class="form-control"/></div>
        <div class="form-group"><label>E-mail</label><input type="email" class="form-control"/></div>
        <div class="form-group"><label>Messaggio della mail</label><textarea class="form-control"></textarea></div>
        <div class="btn-group" role="group">
            <button class="btn btn-primary btn-success" type="button">Invia <i class="fa fa-share"
                                                                               aria-hidden="true"></i>
            </button>
            <button class="btn btn-primary btn-light" type="button">Reset <i class="fa fa-times" aria-hidden="true"></i>
            </button>
        </div>
    </form>

@endsection
