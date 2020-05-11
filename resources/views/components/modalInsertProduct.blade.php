@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="modal fade" id="modalInserisciProdotto" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog cascading-modal modal-lg"  role="document">
                <!--Content-->
                <div class="modal-content">
                    <div class="col-md-12" id="message">
                        <div style="text-align: center; font-size: 30px;">
                            <b>Inserisci il nuovo prodotto</b>
                        </div>
                        <div class="form-group" id="nomeProdotto">
                            <label for="from_name">Nome Prodotto</label>
                            <input type="text" class="form-control" id="from_name" tabindex="-1" name="from_name" required placeholder="Ex. Yamaha" />
                        </div>
                        <div class="form-group has-feedback" id="descrzioneBreve">
                            <label for="for_descrizionebreve"></label>Descrizione Breve</label>
                            <input type="text" class="form-control" id="from_descrizione" name="from_descrizione" required placeholder="Ex. Archetto a 6 archi" />
                        </div>
                        <div class="form-group" id="immagineProdotto">
                            <label for="immagine">Inserisci l&#39;immagine del prodotto</label>
                            <form method="post" action="" enctype="multipart/form-data">
                                <input type="file" name="upload1" id="upload1"  class="btn"/>
                            </form>
                        </div>
                        <div class="form-group" id="descrizioneEstesa">
                            <label for="comments">Descrizione Estesa</label>
                            <textarea class="form-control" id="comments" name="Comments" placeholder="Digita la tua descrizione" rows="5"></textarea>
                        </div>
                       <div>
                           <div class="form-row">
                               <div class="col">
                                   <label for="prezzo">Prezzo</label>
                                   <input type="text" class="form-control" id="email" placeholder="Metti il prezzo" name="email">
                               </div>
                               <div class="col">
                                   <label for="percentuale">Percentuale di Sconto</label>
                                   <input type="number" class="form-control" placeholder="Metti una percentuale" name="pswd">
                               </div>
                           </div>
                       </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Salva il prodotto <i class="fa fa-chevron-circle-right"></i></button>
                        </div>
                    </div>

                    <!--Footer-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Chiudi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.Content-->


    <a href="#modalInserisciProdotto" class="btn btn-primary float-right modal-toggle" onclick='$("#modalInserisciProdotto").modal("show")'>
        Inserisci Prodotto <i class="fa fa-plus" aria-hidden="true"></i>
    </a>
@endsection
