<div class="modal fade" id="modalDeleteUserRegistered" role="dialog" aria-labelledby="myModalDeleteUserRegistered" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg"  role="document">
        <!--Content-->
        <div class="modal-content">
            <form method="POST" action="">
                <div class="col-md-12" id="message">
                    <div style="text-align: center; font-size: 30px;">
                        <b>Elimina Utente Registrato</b>
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Cognome</th>
                            <th scope="col">Username</th>
                            <th scope="col">Elmina</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($utenteRegistrato as $utenti)
                            <tr>
                                <th scope="row">{{$utenti->id}}</th>
                                <td>{{$utenti->first_name}}</td>
                                <td>{{$utenti->last_name}}</td>
                                <td>{{$utenti->username}}</td>
                                <td><form action="{{route('removeUser', [$utenti->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button id="{{$utenti->id}}" name="{{$utenti->id}}"  class="btn btn-outline-danger" type="submit">Elimina Utente  <i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br>
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


