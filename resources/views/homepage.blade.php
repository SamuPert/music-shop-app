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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#"><img onclick="document.location.href='/'" src="{{ asset("/img/logoSitoMobile.png") }}" style="height: 130px"/></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#chisiamo">Chi siamo</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#cosafacciamo">Cosa facciamo</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#catalogo">Catalogo</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#contatti">Contatti</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="landing-page mt-5">
    <section id="chisiamo" class="clean-block clean-hero" style="background-image:url("/img/backgroud-information-page.jpg");color:rgba(0, 0, 0, 0.70);">
        <div class="text">
            <h2>CHI SIAMO</h2>
            <p>Music Shop è un'azzienda leader a livello nazionale in ambito musicale attiva dal 1970. Presenti in tutta italia con 20 negozi fisici offriamo i migiori esperti in grado di accogliere ogni esigenza sia di supporto all'acquisto che di assistenza.</p>
        </div>
    </section>
    <section id="cosafacciamo" class="clean-block features">
        <div class="container">
            <div class="block-heading">
                <h1 class="text-info">Cosa facciamo</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 feature-box"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <h4>Vendita</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="col-md-5 feature-box"><i class="fa fa-cogs" aria-hidden="true"></i>
                    <h4>Assistenza Tecnica</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="col-md-5 feature-box"><i class="fa fa-comments-o" aria-hidden="true"></i>
                    <h4>Consulenza Tecnica&nbsp;&nbsp;</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="col-md-5 feature-box"><i class="fa fa-wrench" aria-hidden="true"></i>
                    <h4>Installazione</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="catalogo" class="clean-block clean-info dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Catalogo Prodotti</h2>
                <p>Per visualizzare i prodotti a nostra disposizione ti invitiamo a consultare il nostro catalogo digitale. All'interno di esso potrai trovare tutti i prodotti ordinabili online con consegna a domicilio o nei nostri punti vendita.</p>
                <a class="btn btn-primary" href="#" role="button">Visita il nostro catalogo <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <section id="contatti" class="clean-block about-us">
        <div class="container mt-3">
            <form id="contactForm" style="padding:15px;" action="javascript:void();" method="post">
                <div class="form-row" style="margin-left:0px;margin-right:0px;padding:10px;">
                    <div class="col-12" id="message" style="padding-right:20px;padding-left:20px;">
                        <fieldset>
                            <legend>Contattaci</legend>
                        </fieldset>
                        <div class="form-group has-feedback"><label for="from_name">Nome e Cognome</label><input class="form-control" type="text" id="from_name" tabindex="-1" name="from_name" required placeholder="Inserisci nome e cognome" /></div>
                        <div class="form-group has-feedback"><label for="from_email">Email</label><input class="form-control" type="email" id="from_email" name="from_email" required placeholder="Inserisci la tua mail" /></div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group has-feedback"><label for="from_phone">Numero di Telefono</label><input class="form-control" type="text" id="from_phone" name="subject" placeholder="Inserisci il tuo numero" /></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"><label for="calltime">Motivazione</label><select class="form-control" id="calltime" name="afdeling" value="Afdeling" required><option value="Sales">Sales</option><option value="Technische Dienst">Technische Dienst</option><option value="Webdevelopers">Webdevelopers</option></select></div>
                            </div>
                        </div>
                        <div class="form-group"><label for="comments">Inserisci qui il tuo messaggio</label><textarea class="form-control" id="comments" name="Comments" placeholder="Scrivi qui..." rows="5"></textarea></div>
                        <div class="form-group"><button class="btn btn-primary active btn-block" type="submit">Invia <i class="fa fa-chevron-circle-right"></i></button></div>
                        <hr />
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
<footer class="page-footer-copyright">
    <p>© 2018 Copyright Text</p>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>

</body>
</html>
