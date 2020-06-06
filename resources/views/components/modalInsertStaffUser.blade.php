<div class="modal fade" id="modalInsertStaffUser" role="dialog" aria-labelledby="myModalInsertStaffUser" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg"  role="document">
        <!--Content-->
        <div class="modal-content">
            <form action="{{route('registrazioneStaff')}}" method="post">
                @csrf
            <div class="col-md-12" id="message">
                <div style="text-align: center; font-size: 30px;">
                    <b>Inserisci il nuovo Utente Staff</b>
                </div>

                <div class="form-group" id="nomeStaff">
                    <label for="for_name">Nome</label>
                    <input type="text" class="form-control" id="for_name_staff" tabindex="-1" name="first_name" required placeholder="Mario" />
                </div>
                <div class="form-group has-feedback" id="cognomeStaff">
                    <label for="for_cognomeStaff"></label>Cognome</label>
                    <input type="text" class="form-control" id="for_cognome" name="last_name" required placeholder="Rossi" />
                </div>
                <div class="form-group" id="username">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" id="for_username" name="username" required placeholder="mario_rossi" />
                </div>
                <div class="form-group" id="password">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="pass" name="password" placeholder="Digita la password per l'utente staff"/>
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Salva l'Utente Staff <i class="fa fa-chevron-circle-right"></i></button>
                </div>
            </div>
            </form>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Chiudi</button>
            </div>
        </div>
    </div>
</div>

<!--/.Content-->


