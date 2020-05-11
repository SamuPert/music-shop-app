<div class="modal fade" id="modalInsertCategory" role="dialog" aria-labelledby="modalInsertCategory" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg"  role="document">
        <!--Content-->
        <div class="modal-content">
            <div class="col-md-12" id="message">
                <div style="text-align: center; font-size: 30px;">
                    <b>Inserisci la nuova categoria</b>
                </div>
                    <div class="form-group has-feedback" id="nomeCategoria">
                    <label for="for_nomecategoria">Nome Categoria</label>
                    <input type="text" class="form-control" id="from_nome" name="from_nome" required placeholder="Ex. Chitarre" />
                    </div>
                <div class="form-group" id="descrizioneCategoria">
                    <label for="comments">Descrizione Categoria</label>
                    <textarea class="form-control" id="comments" name="Comments" placeholder="Digita la tua descrizione" rows="5"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Salva la categoria <i class="fa fa-chevron-circle-right"></i></button>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Chiudi</button>
            </div>
        </div>
    </div>
</div>
