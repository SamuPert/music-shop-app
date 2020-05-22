<div class="modal fade" id="modalNewSubCategory" role="dialog" aria-labelledby="myModalSubCategory" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg"  role="document">
        <!--Content-->
        <div class="modal-content">
            <div class="col-md-12" id="message">
                <div style="text-align: center; font-size: 30px;">
                    <b>Inserisci la nuova Sotto Categoria</b>
                </div>
                <br>
                <div class="form-group" id="nomeSottoCateogria">
                    <label for="from_name">Nome Prodotto</label>
                    <input type="text" class="form-control" id="from_name" tabindex="-1" name="from_name" required placeholder="Chitarra Elettrica" />
                </div>
                <div class="form-group has-feedback" id="descrzioneBreveSottoCategoria">
                    <label for="for_descrizionebreve"></label>Descrizione </label>
                    <input type="text" class="form-control" id="from_descrizione" name="from_descrizione" required placeholder="Descrivi la sotto categoria" />
                </div>
                <div class="form-group has-feedback" id="selectCategoriaForSub">
                    <label for="prezzo">Selezione Categoria</label><br>
                    <select  class="custom-select mdb-select md-form" name="categoria" id="select_categoria">

                    </select>
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Salva la Sotto Categoria <i class="fa fa-chevron-circle-right"></i></button>
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


