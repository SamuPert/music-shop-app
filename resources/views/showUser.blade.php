@extends('layouts.app')

@section('content')
    <script type="text/javascript">
        function disable(dataClass,idButton) {
            var formelements = document.getElementsByClassName(dataClass);
            for (i = 0; i < formelements.length; i++) {
                formelements[i].disabled = true;
            }
            document.getElementById(dataClass).style.display = "block";
            document.getElementById(idButton).style.display = "none";        }

        function enable(dataClass,idbutton) {
            var formelements = document.getElementsByClassName(dataClass);
            for (i = 0; i < formelements.length; i++) {
                formelements[i].disabled = false;
            }
            document.getElementById(dataClass).style.display = "none";
            document.getElementById(idbutton).style.display = "block";
        }

    </script>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Dati personali:</h1>
                <form>
                    <div class="edituserdata">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control personal"  disabled value="{{$user->first_name}}"/>
                        </div>
                        <div class="form-group">
                            <label>Cognome:</label>
                            <input type="text" class="form-control personal" disabled value="{{$user->last_name}}"/>
                        </div>
                        <div class="form-group">
                            <label>Luogo di Residenza</label>
                            <input type="text" class="form-control personal" disabled value="{{$user->location}}"/>
                        </div>
                        <div class="form-group">
                            <label>Data di Nascita: </label>
                            <input type="date" class="form-control personal" disabled value="{{$user->birth_date}}"/>
                        </div>
                        <div class="form-group">
                            <label>Occupazione: </label>
                            <input type="text" class="form-control personal" disabled  value="{{$user->occupation}}"/>
                        </div>
                    </div>
                    <button class="btn btn-primary" id="personal" type="button" onclick="enable('personal','editPersonal')">Modifica i
                        dati personali
                    </button>
                    <div class="btn-group" id="editPersonal"  role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary" onclick="disable('personal','editPersonal')">Annulla</button>
                        <button type="button" class="btn btn-secondary">Conferma</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <h1>Dati di accesso:</h1>
                <form>
                    <div class="form-group">
                        <label>Username: </label>
                        <input type="text" class="form-control " disabled  value="{{$user->username}}"/>
                    </div>
                    <div class="form-group">
                        <label>E-mail:</label>
                        <input type="email" class="form-control dataAccess" disabled  value="{{$user->email}}"/>
                    </div>
                    <div class="form-group">
                        <label>Vecchia Password:</label>
                        <input type="password" class="form-control dataAccess" disabled/>
                    </div>
                    <div class="form-group" id="editAccess">
                        <label>Nuova Password:</label>
                        <input type="password" class="form-control dataAccess" disabled/>
                    </div>
                    <button class="btn btn-primary" id="dataAccess" type="button" onclick="enable('dataAccess','editAccess')">Modifica i dati di
                        accesso
                    </button>
                    <div class="btn-group" id="editAccess" style="visibility: hidden" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary" onclick="disable('dataAccess','editAccess')">Annulla</button>
                        <button type="button" class="btn btn-secondary">Conferma</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
