<html xmlns:margin-left="http://www.w3.org/1999/xhtml">
<body>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registrazione</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/523f3c3982.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg"  role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">
                            Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">
                            Registrati</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 1-->
                    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">

                        <!--Body Login-->
                        <div class="modal-body mb-1">
                            <form class="login"><div style="text-align: center;"><img src="{{ asset("/img/logoSitoMobile.png") }}" style="max-height: 130px" /></div><br>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Username</label></div>
                                <div class="col"><input type="text" class="form-control" /></div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Password</label></div>
                                <div class="col"><input type="password" class="form-control" /></div>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-info">Accedi</button>
                            </div>
                            </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p><a href="#panel2" class="blue-text">Non hai un Account? Registrati.</a></p>
                                <p><a href="#" class="blue-text">Dimenticato la Password? Clicca Qua.</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                    <!--/.Panel 1-->

                    <!--Panel 2-->
                    <div class="tab-pane fade" id="panel2" role="tabpanel">

                        <!--Body Register-->
                        <div class="modal-body mb-2">
                        <div class="row register-form">
                            <div class="col-md-10 offset-md-1">
                                <form class="register"><div style="text-align: center;"><img src="{{ asset("/img/logoSitoMobile.png") }}"  style="max-height: 130px" /></div><br>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name </label></div>
                                        <div class="col"><input type="text" class="form-control" /></div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Cognome</label></div>
                                        <div class="col"><input type="text" class="form-control" /></div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Luogo di Residenza</label></div>
                                        <div class="col"><input type="text" class="form-control" /></div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Data di Nascita</label></div>
                                        <div class="col"><input class="form-control" type="date" /></div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Occupazione</label></div>
                                        <div class="col"><select class="custom-select"><option value="" selected disabled hidden>Seleziona Occupazione</option>
                                                    <option value="1">Studente</option>
                                                    <option value="2">Operaio</option>
                                                    <option value="3">Impiegato</option>
                                                    <option value="4">Libero Professionista</option>
                                                    <option value="5">Altro</option></select>
                                        </div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Username</label></div>
                                        <div class="col"><input type="text" class="form-control" /></div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Email</label></div>
                                        <div class="col"><input type="email" class="form-control" /></div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Password</label></div>
                                        <div class="col"><input type="password" class="form-control" /></div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Ripeti Password</label></div>
                                        <div class="col"><input type="password" class="form-control" /></div>
                                    </div>
                                    <div class="text-center mt-2">
                                        <button class="btn btn-info">Registrati</button>
                                    </div></form>
                            </div>
                        </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1"><a href="#panel1" class="blue-text">Hai gia un account? Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->

<div class="text-center">
    <a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">Launch
        Modal LogIn/Register</a>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
