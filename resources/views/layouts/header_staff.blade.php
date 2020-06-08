<div class="row shadow m-0 w-100 custom-header-fixed">
    <div class="col col-md-2 col-sm-2 col-2">
        <img onclick="document.location.href='/'" src="{{ asset("/img/logoSitoMobile.png") }}" class="show-on-desktop image-fluid h-100 mt-2 ml-2"  style="max-height: 120px; cursor: pointer;" />
        <img onclick="document.location.href='/'" src="{{ asset("/img/logoSitoMobile.png") }}" class="show-on-mobile image-fluid h-100 mt-2 ml-2"  style="max-height: 70px; cursor: pointer;" />
    </div>
    <div class="col-md-10 mt-5">
        <div class="row">
            <div class="col-md-9" style="text-align: center">
                <h2 class="text-center">Funzionalità Staff </h2>
                <p class="text-center">Hai eseguito il login da Utente Staff, queste sono le funzionalità a tua disposizione.</p>
            </div>
            <div class="float-right col-md-3">
                <ul class="nav navbar-nav navbar-right">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Benvenuto, {{$user->first_name}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <form id="modifica_form" action="{{route('modificaprofilo')}}">
                                <button type="submit" class="dropdown-item" style="width: 100%; padding: 3px 20px; text-align: left;">Modifica Profilo</button>
                            </form>

                            <form id="back_form" action="{{ route('catalogo') }}"  >
                                <button type="submit" class="dropdown-item" style="width: 100%; padding: 3px 20px; text-align: left;">Torna al Catalogo</button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                <button type="submit" class="btn btn-link btn-logout" style="width: 100%; padding: 3px 20px; text-align: left;">Logout</button>
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    @includeWhen(  request()->route()->getName() == 'catalogo' || request()->route()->getName() == 'lista_sotto_categorie' || request()->route()->getName() == 'lista_prodotti', 'layouts.filtri-bar')
</div>
