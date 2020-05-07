<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/523f3c3982.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


<body>
    <h1>Il tuo Profilo:</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Dati personali:</h1>
                <div class="form-group">
                    <div class="row">
                        <div class="col"><label for="nome">Nome:</label><input type="text" /></div>
                    </div>
                    <div class="row">
                        <div class="col"><label>Cognome:</label><input type="text" /></div>
                    </div>
                    <div class="row">
                        <div class="col"><label>Luogo di Residenza</label><input type="text" /></div>
                    </div>
                    <div class="row">
                        <div class="col"><label>Data di Nascita: </label><input type="text" /></div>
                    </div>
                    <div class="row">
                        <div class="col"><label>Occupazione: </label><input type="text" /></div>
                    </div><button class="btn btn-primary" type="button">Modifica i dati personali</button></div>
            </div>
            <div class="col">
                <h1>Dati di accesso:</h1>
                <div class="form-group">
                    <div class="row">
                        <div class="col"><label>Username: </label><input type="text" /></div>
                    </div>
                    <div class="row">
                        <div class="col"><label>E-mail:</label><input type="text" /></div>
                    </div>
                    <div class="row">
                        <div class="col"><label>Password:</label><input type="text" /></div>
                    </div><button class="btn btn-primary" type="button">Modifica i dati di accesso</button></div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
