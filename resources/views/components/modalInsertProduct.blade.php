<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
    function riempiSelect(){
        var $select = $('#sub_category');
        $select.find('option').remove();
        if($('#root_category').val() != '#'){
            $.getJSON( 'select.php', {
                    root_category: $('#root_category').val()
                }
            )
                .done(function( data ) {
                    $.each( data, function( key, value ) {
                        $('<option>').val(key).text(value).appendTo($select);
                    });
                });
        }
    }
</script>
@php( $categoria = \App\Categoria::all())
<div class="modal fade" id="modalInserisciProdotto" role="dialog" aria-labelledby="myModalInsertProduct" aria-hidden="true">
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
                            <input type="text" class="form-control" id="prezzo" placeholder="Metti il prezzo" name="prezzo">
                        </div>
                        <div class="col">
                            <label for="percentuale">Percentuale di Sconto</label>
                            <div class="percentInput">
                                <input type="number" name="number" class="form-control">
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <div class="form-row">
                        <div class="col">
                            <label for="prezzo">Selezione Categoria</label><br>
                            <select class="mdb-select md-form" name="root_category" id="root_category" onChange="riempiSelect();">
                                @foreach($categoria as $cat)
                                    <option value="{{ $cat->nome_categoria }}"><h5>{{ $cat->nome_categoria }}</h5></option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col">
                            <label for="percentuale">Selezione Sotto Categoria</label><br>
                            <select name="sub_category" id="sub_category" class="mdb-select md-form">
                                <option value="#" disabled selected>Selezionare</option>
                            </select>
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

<!--/.Content-->


