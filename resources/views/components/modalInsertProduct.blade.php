<div class="modal fade" id="modalInserisciProdotto" role="dialog" aria-labelledby="myModalInsertProduct" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg"  role="document">
        <!--Content-->
        <div class="modal-content pt-2">
            <div style="text-align: center; font-size: 30px;">
                <b>Inserisci il nuovo prodotto</b>
            </div>
            <div class="col-md-12 pl-5 pr-5 pt-2" id="message">
                <form action="{{route('insertNewProduct')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group" id="nomeProdotto">
                        <label for="form_name">Nome Prodotto</label>
                        <input type="text" class="form-control" id="form_name" tabindex="-1" name="nome_prodotto" required placeholder="Ex. Yamaha" />
                    </div>
                    <div class="form-group has-feedback" id="descrzioneBreve">
                        <label for="form_descrizione">Descrizione Breve</label>
                        <input type="text" class="form-control" id="form_descrizione" name="descrizione_breve" required placeholder="Ex. Archetto a 6 archi" />
                    </div>
                    <div class="form-group" id="immagineProdotto">
                        <label for="inputFileImmagine">Immagine del prodotto</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputFileImmagine" name="percorso_foto">
                                <label class="custom-file-label" for="inputFileImmagine">Scegli l&#39;immagine del prodotto</label>
                            </div>
                        </div>

                    </div>
                    <div class="form-group" id="descrizioneEstesa">
                        <label for="comments">Descrizione Estesa</label>
                        <textarea class="form-control" id="comments" name="descrizione_estesa" placeholder="Digita la tua descrizione" rows="5"></textarea>
                    </div>
                    <div>
                        <div class="form-row">
                            <div class="col">
                                <label for="prezzo">Prezzo</label>
                                <div class="percentInput">
                                    <input type="number" name="prezzo" class="form-control">
                                    <span class="input-group-text" id="percentuale_sign">€</span>
                                </div>
                            </div>
                            <div class="col">
                                <label for="percentuale">Percentuale di Sconto</label>
                                <div class="percentInput">
                                    <input type="number" name="sconto" class="form-control">
                                    <span class="input-group-text" id="percentuale_sign">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <div class="form-row">
                            <div class="col">
                                <label for="prezzo">Selezione Categoria</label><br>
                                <select  class="custom-select mdb-select md-form" name="id_categoria" id="select_categoria" onChange="riempiSelectByCategoria('#select_categoria','#select_sotto_categoria');">
                                    @foreach( $listaCategorie as $categoria )
                                        <option value="{{$categoria->id_categoria}}">{{$categoria->nome_categoria}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="col">
                                <label for="percentuale">Selezione Sotto Categoria</label><br>
                                <select  class="custom-select mdb-select md-form" name="id_sotto_categoria" id="select_sotto_categoria" >
                                    <option value="#" disabled selected>Selezionare</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Salva il prodotto <i class="fa fa-chevron-circle-right"></i></button>
                    </div>
                </form>
            </div>

            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Chiudi</button>
            </div>
        </div>
    </div>
</div>

@push('onload_scripts')

riempiSelectByCategoria('#select_categoria','#select_sotto_categoria');

@endpush



