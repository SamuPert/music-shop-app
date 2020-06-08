@include('components.modalInsertProduct')
<div class="modal fade" id="modalModificaProdotto" role="dialog" aria-labelledby="modalModificaProdotto" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg"  role="document">
        <!--Content-->
        <div class="modal-content">
                <div class="col-md-12" id="message">
                    <div style="text-align: center; font-size: 30px;">
                        <b>Scegli il prodotto da modificare</b>
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
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
                                <td>
                                    <a class="btn btn-primary btn-block"  href="{{  route('gestione_prodotti', ['id_prodotto' => $prodotto->id_prodotto])  }}"><h6 class="name"> Modifica prodotto </h6></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$prodotti->links()}}
                    <br>
                </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Chiudi</button>
            </div>
        </div>
    </div>
</div>
