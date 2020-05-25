<ul class="nav navbar-nav navbar-right">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Benvenuto, {{$user->username}}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Modifica Profilo</a>
            <a class="dropdown-item" href="#">Contattaci</a>
            <div class="dropdown-divider"></div>
            <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    <button type="submit" class="btn btn-link btn-logout" style="width: 100%; padding: 3px 20px; text-align: left;">Logout</button>
                    {{ csrf_field() }}
                </form>
            </li>
        </div>
    </div>
</ul>
