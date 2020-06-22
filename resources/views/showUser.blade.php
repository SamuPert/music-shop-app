@extends('layouts.app')

@section('content')
    <div class="pl-5 pr-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('catalogo') }}">Catalogo</a></li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h1>Dati personali:</h1>
                                        <div class="edituserdata">
                                            <div class="form-group">
                                                <label for="nome">Nome:</label>
                                                <input type="text" class="form-control personal" id="nome"  name="nome" disabled value="{{$user->first_name}}"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Cognome:</label>
                                                <input type="text" class="form-control personal" id="cognome" name="cognome" disabled value="{{$user->last_name}}"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Luogo di Residenza</label>
                                                <input type="text" class="form-control personal"  id="residenza" name="residenza" disabled value="{{$user->location}}"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Data di Nascita: </label>
                                                <input type="date" class="form-control personal" id="datanascita" disabled name="datanascita" value="{{$user->birth_date->format('Y-m-d')}}"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Occupazione: </label>
                                                <select name="occupation" class="custom-select form-control personal" id="occupazione" disabled name="occupazione">
                                                        @for($i=0; $i < count($datiOccupazione); $i++)
                                                            <option value="{{$datiOccupazione[$i]->occupazione}}"
                                                                    @if($datiOccupazione[$i]->occupazione===$user->occupation)
                                                                    selected
                                                                @endif
                                                            >{{$datiOccupazione[$i]->occupazione}}</option>
                                                        @endfor
                                                        </select>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" id="personal" style="display: block;" type="button" onclick="enable('personal','editPersonal')">Modifica i
                                            dati personali
                                        </button>
                                        <div class="btn-group" id="editPersonal"  role="group" style="display: none;" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary" onclick="disable('personal','editPersonal')">Annulla</button>
                                            <button class="btn btn-secondary" onclick="modificautenteRegistrato(event)">Conferma</button>
                                        </div>
                                </div>
                                <div class="col">
                                    <h1>Dati di accesso:</h1>

                                        <div class="form-group">
                                            <label>Username: </label>
                                            <input type="text" class="form-control " disabled  value="{{$user->username}}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail:</label>
                                            <input type="email" class="form-control dataAccess"  id="email" disabled  value="{{$user->email}}"/>
                                        </div>

                                        <button class="btn btn-primary" id="dataAccess" style="display: block;" type="button" onclick="enable('dataAccess','editDataAccess')">Modifica i
                                            dati di accesso
                                        </button>
                                        <div class="btn-group" id="editDataAccess"  role="group" style="display: none;" aria-label="Basic example">
                                            <div class="form-group">
                                                <label>Nuova Password:</label>
                                                <input type="password" class="form-control dataAccess" id="password" required/>
                                            </div>
                                            <button type="button" class="btn btn-secondary" onclick="disable('dataAccess','editDataAccess')">Annulla</button>
                                            <button class="btn btn-secondary" onclick="modificaDatiAccessoUtenteRegistrato(event)">Conferma</button>
                                            <form action="{{route('deletemyaccount', $user->id)}}" class="mt-2" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-outline-danger" onclick="return confirm('Sei sicuro di procedere?')" type="submit">Elimina Utente  <i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('onload_scripts')

@endpush
