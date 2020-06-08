@extends('layouts.app')

@section('title', 'Utenti')

@section('content')
@include('components.modalInsertStaffUser')
    <div class="pl-5 pr-5">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.homepage') }}">AdminPage</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gestione Staff</li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-body">

                        <div class="row mb-3">
                            <div class="col">
                                <button class="btn btn-primary" onclick='$("#modalInsertStaffUser").modal("show")'>
                                    <i class="fa fa-plus-circle icon"></i>
                                    Inserisci Utente Staff
                                </button>
                            </div>
                        </div>


                            <div class="col-md-12" id="message">
                                <div style="text-align: left; font-size: 35px;">
                                    <b>Elimina o Modifica Utente Staff</b>
                                </div>
                                <br>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Cognome</th>
                                        <th scope="col">Azioni</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($utente as $utenti)
                                        <tr>
                                            <td>{{$utenti->id}}</td>
                                            <td>
                                                <input type="text" class="form-control" name="first_name" placeholder="Inserisci un Nome" id="id_utente_nome{{$utenti->id}}" disabled value="{{$utenti->first_name}}">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="last_name" placeholder="Inserisci un Cognome" id="id_utente_cognome{{$utenti->id}}" disabled value="{{$utenti->last_name}}">
                                            </td>
                                            <td>
                                                <form action="{{route('removeUser', [$utenti->id])}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button id="{{$utenti->id}}" name="{{$utenti->id}}"  class="btn btn-outline-danger" type="submit">Elimina Utente  <i class="fa fa-trash"></i></button>
                                                </form>
                                                <button id="{{$utenti->id}}"   class="btn btn-outline-info enable-edit-staff" type="submit">Abilita Modifica Utente   <i class="fa fa-user" aria-hidden="true"></i></button>
                                                <button class="btn btn-outline-danger disable-edit-staff mt-2" hidden>Annulla</button>
                                                <form action="{{route('updateUser')}}" method="post">
                                                    @csrf
                                                    <input type="submit" class="btn btn-primary update-staff-submit-button no-pointer-events float-right mt-2" id="edit_id" data-id="{{$utenti->id}}" disabled value="Modifica Utente">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <br>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</div>


@endsection

<script type='text/javascript'>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).on("click", ".update" , function() {
        var edit_id = $(this).data('id');

        var name = $('#id_utente_nome'+edit_id).val();
        var cognome = $('#id_utente_cognome'+edit_id).val();
debugger;
        if(name != '' && cognome != ''){
            $.ajax({
                url: 'updateUser',
                type: 'post',
                data: {_token: CSRF_TOKEN,edit_id: edit_id,name: name,cognome: cognome},
                success: function(response){
                    alert(response);
                }
            });
        }else{
            alert('Riempi tutti i campi');
        }
    });

</script>

