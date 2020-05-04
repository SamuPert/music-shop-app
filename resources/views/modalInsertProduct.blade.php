<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Inserisci Prodotto</title>
</head>
<body>
<div class="modal fade" id="modalLRForm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-xl"  role="document">
        <!--Content-->
        <div class="modal-content">
            <div class="col-md-6" id="message">
                    <fieldset>
                        <legend> Inserisci il nuovo prodotto</legend>
                                <div class="form-group has-feedback">
                                    <label for="from_name">Nome Prodotto</label><br>
                                    <input type="text" class="form-control" id="from_name" tabindex="-1" name="from_name" required placeholder="Yamaha" />
                                </div>
                            <br>
                                <div class="form-group has-feedback">
                                    <label for="for_descrizionebreve"></label>Descrizione Breve</label><br>
                                    <input type="text" class="form-control" id="from_descrizione" name="from_descrizione" required placeholder="Archetto a 6 archi" />
                                </div>
                            <br>
                                <label for="immagine">Inserisci l&#39;immagine del prodotto</label>
                                    <div style="width: 200px;">
                                        <div class="text-center"></div>
                                        <div class="text-center mt-2"></div>
                                    </div>
                                <form>
                                    <button class="btn btn-primary" type="submit">Carica</button>
                                </form>
                            <br>
                                <div class="form-group">
                                    <label for="comments">Descrizione Estesa</label><br>
                                    <textarea class="form-control" id="comments" name="Comments" placeholder="Digita la tua descrizione" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Send <i class="fa fa-chevron-circle-right"></i></button>
                                </div>
                    </fieldset>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
        <!--/.Content-->
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>
