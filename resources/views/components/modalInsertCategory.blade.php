<div class="modal fade" id="modalInsertCategory" role="dialog" aria-labelledby="modalInsertCategory" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg"  role="document">
        <!--Content-->
        <div class="modal-content">
            <div class="col-md-12" id="message">
                <div style="text-align: center; font-size: 30px;">
                    <b>Inserisci la nuova categoria</b>

                </div>
                <form action="{{route('insertNuovaCategoria')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group has-feedback" id="nomeCategoria">
                    <label for="for_nomecategoria">Nome Categoria</label>
                    <input type="text" class="form-control" id="from_nome" name="nome_categoria" required placeholder="Ex. Chitarre" />
                </div>
                <div class="form-group" id="immagineProdotto">
                    <label for="inputFileImmagineCategoria">Immagine della categoria</label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputFileImmagineCategoria" name="percorso_foto_categoria">
                            <label class="custom-file-label" for="inputFileImmagineCategoria">Scegli l&#39;immagine della categoria</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Salva la categoria <i class="fa fa-chevron-circle-right"></i></button>
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
