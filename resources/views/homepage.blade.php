<!DOCTYPE html>
<html xmlns:javascript="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="{{ asset('/css/homepage.css') }}">
    <script src="https://use.fontawesome.com/523f3c3982.js"></script>
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#"><img src="{{ asset('./img/logoSitoMobile.png') }}"
                                                                      height="130px"></a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><button class="btn btn-link"  onclick="scrollsection('#chisiamo')">Chi siamo</button></li>
                <li class="nav-item" role="presentation"><button class="btn btn-link"  onclick="scrollsection('#cosafacciamo')">Cosa facciamo</button></li>
                <li class="nav-item" role="presentation"><button class="btn btn-link"  onclick="scrollsection('#catalogo')">Catalogo</button></li>
                <li class="nav-item" role="presentation"><button class="btn btn-link"  onclick="scrollsection('#dovesiamo')">Dove siamo</button></li>
                <li class="nav-item" role="presentation"><button class="btn btn-link" onclick="scrollsection('#contatti')">Contatti</button></li>
            </ul>
        </div>
    </div>
</nav>
<main >
    <header id="chisiamo" style="height: 800px">
        <div class="overlay" ></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{asset('./img/Videohome.mp4')}}" type="video/mp4">
        </video>
        <div class="container " style="height: 1000px">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h2 class="display-3">CHI SIAMO</h2>
                    <p class="lead mb-0">Music Shop è un'azienda leader a livello nazionale in ambito musicale attiva dal 1970. Presenti in tutta
                        italia con 20 negozi fisici offriamo i migiori esperti in grado di accogliere ogni esigenza sia di
                        supporto all'acquisto che di assistenza.</p>
                </div>
            </div>
        </div>
    </header>
    <section class="clean-block features anchorable">
        <a id="cosafacciamo" class="anchor"></a>
        <div class="container">
            <div class="block-heading">
                <h1 class="text-info">Cosa facciamo</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 feature-box"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <h4>Vendita</h4>
                    <p>Abbiamo più di 2000 punti vendita in tutta Italia. Nei nostri negozi offriamo una vasta possibilità di scelta per tutti i gusti.</p>
                </div>
                <div class="col-md-5 feature-box"><i class="fa fa-cogs" aria-hidden="true"></i>
                    <h4>Assistenza Tecnica</h4>
                    <p>In ogni momento, 7 giorni su 7, i nostri migliori tecnici offrono assistenza compresa nel prezzo di acquisto del prodotto.</p>
                </div>
                <div class="col-md-5 feature-box"><i class="fa fa-comments-o" aria-hidden="true"></i>
                    <h4>Consulenza Tecnica&nbsp;&nbsp;</h4>
                    <p>Mettiamo a disposizione i nostri migliori esperti per qualunque consulenza grazie alle loro spiccate conoscenze in ambito musicale.</p>
                </div>
                <div class="col-md-5 feature-box"><i class="fa fa-wrench" aria-hidden="true"></i>
                    <h4>Installazione</h4>
                    <p>Consegna e installazione dello strumento e dell'attrezzatura a domicilio, gratis per un acquisto superiore ai 200 euro.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block clean-info dark">
        <a id="catalogo" class="anchor"></a>
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Catalogo Prodotti</h2>
                <p>Per visualizzare i prodotti a nostra disposizione ti invitiamo a consultare il nostro catalogo
                    digitale. All'interno di esso potrai trovare tutti i prodotti ordinabili online con consegna a
                    domicilio o nei nostri punti vendita.</p>
                <a href="{{route('catalogo')}}" class="btn  mt-4 btn-primary">
                    Visualizza Catalogo
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>
    <section class="clean-block about-us anchorable">
        <a id="dovesiamo" class="anchor"></a>
        <div>
            <div class="block-heading">
                <h2 class="text-info">Dove Siamo</h2>
                <p>Potete venirci a trovare nella nostra sede</p>
            </div>
            <br>
            <div class="container" style="height: 400px">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1432.5204142450077!2d13.51576893586271!3d43.5862600645216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d80235c260cdf%3A0x3ec7eb70115b435b!2sUniversit%C3%A0%20Politecnica%20delle%20Marche%20-%20Segreteria%20Studenti%20di%20Ingegneria%20-%20Agraria%20-%20Scienze!5e0!3m2!1sit!2sit!4v1587996116101!5m2!1sit!2sit"
                    width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </section>
    <section class="clean-block clean-info dark about-us anchorable">
        <a id="contatti" class="anchor"></a>
        <div class="container mt-3">
            <form name="contact-us" id="contactForm" style="padding:15px;" action="javascript:alert('Mail inviata.')" method="post">
                <div class="form-row" style="margin-left:0px;margin-right:0px;padding:10px;">
                    <div class="col-12" id="message" style="padding-right:20px;padding-left:20px;">
                        <fieldset>
                            <div class="block-heading">
                                <h2 class="text-info">Contattaci</h2>
                            </div>
                        </fieldset>
                        <div class="form-group has-feedback"><label for="from_name">Nome e Cognome</label><input
                                class="form-control" type="text" id="from_name" tabindex="-1" name="from_name" required
                                placeholder="Inserisci nome e cognome"/></div>
                        <div class="form-group has-feedback"><label for="from_email">Email</label><input
                                class="form-control" type="email" id="from_email" name="from_email" required
                                placeholder="Inserisci la tua mail"/></div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group has-feedback"><label for="from_phone">Numero di
                                        Telefono</label><input class="form-control" type="text" id="from_phone"
                                                               name="subject" placeholder="Inserisci il tuo numero"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"><label for="calltime">Motivazione</label><select
                                        class="form-control" id="calltime" name="form-motivation" value="Motivation"
                                        required>
                                        <option value="Vendita">Vendita</option>
                                        <option value="AssistenzaTecnica">Assistenza Tecnica</option>
                                        <option value="Consulenza">Consulenza</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="form-group"><label for="comments">Inserisci qui il tuo messaggio</label><textarea
                                class="form-control" id="comments" name="Comments" placeholder="Scrivi qui..."
                                rows="5"></textarea></div>
                        <div class="form-group">
                            <button class="btn btn-primary active btn-block" style="background-color:#303641;"
                                    type="submit">Invia <i class="fa fa-chevron-circle-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <button class="btn btn-link" onclick="window.scrollTo({top: 0,behavior: 'smooth'});"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
            </p>
            <p>Sito sviluppato da MusicShop S.P.A. tutti i diritti sono riservati. <a href="{{route('privacypolicy')}}">PRIVACY POLICY.</a>  <a href="{{ asset('Relazione_gruppo_15.pdf') }}" style="padding: 5%">Scarica il PDF della Relazione</a></p>
        </div>
    </footer>
</main>
<script src="{{ asset('/js/homepage.js') }}"></script>
</body>

<script type="text/javascript">
    function scrollsection(sezione) {
        window.scrollTo({top: $(sezione).offset().top,behavior: 'smooth'});
    }
</script>
</html>
