<div class="modal fade" id="modalNewSubCategory" role="dialog" aria-labelledby="myModalSubCategory" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg"  role="document">
        <!--Content-->
        <div class="modal-content">
            <div class="col-md-12" id="message">
                <div style="text-align: center; font-size: 30px;">
                    <b>Inserisci la nuova Sotto Categoria</b>
                </div>
                <br>
                <form action="{{route('insertNuovaSubCategoria')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group" id="nomeSottoCateogria">
                    <label for="for_name">Nome Sotto Categoria</label>
                    <input type="text" class="form-control" id="for_name" tabindex="-1" name="nome_sotto_categoria" required placeholder="Chitarra Elettrica" />
                </div>
                <div class="form-group" id="immagineProdotto">
                    <label for="inputFileImmagineSottoCategoria">Immagine della sotto categoria</label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputFileImmagineSottoCategoria" name="percorso_foto_sotto_categoria">
                            <label class="custom-file-label" for="inputFileImmagineSottoCategoria">Scegli l&#39;immagine della sotto categoria</label>
                        </div>
                    </div>
                </div>
                <div class="form-group has-feedback" id="descrzioneBreveSottoCategoria">
                    <label for="for_descrizionebreve"></label>Descrizione </label>
                    <textarea class="form-control" id="descrizione" name="descrizione" placeholder="Digita la tua descrizione" rows="5" required placeholder="Descrivi la sotto categoria" ></textarea>
                </div>
                <div class="form-group has-feedback" id="selectCategoriaForSub">
                    <label for="prezzo">Selezione Categoria</label><br>
                    <select  class="custom-select mdb-select md-form" name="id_categoria" id="select_categoria_input">
                        @foreach( $listaCategorie as $categoria )
                            <option value="{{$categoria->id_categoria}}">{{$categoria->nome_categoria}}</option>
                        @endforeach
                    </select>
                </div>

                <br>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Salva la Sotto Categoria <i class="fa fa-chevron-circle-right"></i></button>
                </div>
                </form>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Chiudi</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/.Content-->


