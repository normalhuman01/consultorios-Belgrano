<?php
require_once('db/db.php');
$db = obtenerBaseDeDatos();
$jornadas = traerJornadas($db);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link href="css/belgrano.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="img/logomini.png" type="image/x-icon">
    <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2400015473572103'); 
        fbq('track', 'PageView');
        </script>
        <noscript>
        <img height="1" width="1" 
        src="https://www.facebook.com/tr?id=2400015473572103&ev=PageView
        &noscript=1"/>
        </noscript>
    <!-- End Facebook Pixel Code -->

    <title>Consultorio Belgrano</title>
</head>

<body>

    <header class="sticky-top">
        <nav id="barraMenu" class="navbar navbar-expand-lg navbar-light p-2 mb-3 bg-white rounded">
            <a id="logo" class="navbar-brand animated pulse delay-1s" href="/"><img class="logo"
                    src="img/logoBC.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-body" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SERVICIOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="rutas/kine">KINESIOLOGIA</a>
                            <a class="dropdown-item" href="rutas/estetica">ESTETICA</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/espmedicas">ESPECIALIDADES MEDICAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/promociones">PROMOCIONES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/faqs">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/obrasociales">OBRAS SOCIALES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/360">TOUR 360</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/contacto">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div data-aos="fade-right" class="social">
        <ul id="redes">
            <li><a href="http://www.facebook.com/nuevosconsultoriosbelgrano" target="_blank" class="icon-facebook"></a>
            </li>
            <li><a href="http://www.instagram.com/consultorios_belgrano" target="_blank" class="icon-instagram"></a>
            </li>
            <li><a href="mailto:info@consultoriobelgrano.com" class="icon-mail2"></a></li>
        </ul>
    </div>
    <div id="portadas" class="row">
        <div class="col-12 col-sm-6">
            <a class="linkPortada" href="rutas/kine">
                <div id="portada1" class="container-fluid wow animated bounceInLeft">
                    <h2 class="tituloIndex">KINESIOLOGIA</h2>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6">
            <a class="linkPortada" href="rutas/estetica">
                <div id="portada2" class="container-fluid wow animated bounceInRight">
                    <h2 class="tituloIndex">ESTETICA</h2>
                </div>
            </a>
        </div>
    </div>

    <div class="container py-5">
        <h1>JORNADAS DEL MES</h1>
        <div class="row">
            <div data-aos="zoom-in" class="col-12 col-sm-6 col-md-4 py-2">
                <div id="jornadas" class="card text-center">
                    <img src="img/depilacion.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$jornadas[0]['fecha']?></h5>
                        <p class="card-text" id="pcard"><?=$jornadas[0]['descripcion']?></p>
                        <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank"
                            class="btn btn-primary" onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'reservarturno', 'event_label': 'click', 'value': '0'});">Reservar turno</a>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in" class="col-12 col-sm-6 col-md-4 py-2">
                <div id="jornadas" class="card text-center">
                    <img src="img/crio.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$jornadas[1]['fecha']?></h5>
                        <p class="card-text" id="pcard"><?=$jornadas[1]['descripcion']?></p>
                        <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank"
                            class="btn btn-primary" onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'reservarturno', 'event_label': 'click', 'value': '0'});">Reservar turno</a>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in" class="col-12 col-sm-6 col-md-4 py-2">
                <div id="jornadas" class="card text-center">
                    <img src="img/venus.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$jornadas[2]['fecha']?></h5>
                        <p class="card-text" id="pcard"><?=$jornadas[2]['descripcion']?></p>
                        <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank"
                            class="btn btn-primary" onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'reservarturno', 'event_label': 'click', 'value': '0'});">Reservar turno</a>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in" class="col-12 col-sm-6 col-md-4 py-2">
                <div id="jornadas" class="card text-center">
                    <img src="img/teslagen.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$jornadas[3]['fecha']?></h5>
                        <p class="card-text" id="pcard"><?=$jornadas[3]['descripcion']?></p>
                        <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank"
                            class="btn btn-primary" onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'reservarturno', 'event_label': 'click', 'value': '0'});">Reservar turno</a>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in" class="col-12 col-sm-6 col-md-4 py-2">
                <div id="jornadas" class="card text-center">
                    <img src="img/bronceado.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$jornadas[4]['fecha']?></h5>
                        <p class="card-text" id="pcard"><?=$jornadas[4]['descripcion']?></p>
                        <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank"
                            class="btn btn-primary" onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'reservarturno', 'event_label': 'click', 'value': '0'});">Reservar turno</a>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in" class="col-12 col-sm-6 col-md-4 py-2">
                <div id="jornadas" class="card text-center">
                    <img src="img/portadapromo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$jornadas[5]['fecha']?></h5>
                        <p class="card-text" id="pcard"><?=$jornadas[5]['descripcion']?></p>
                        <a href="rutas/estetica" target="_blank" class="btn btn-primary" onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'reservarturno', 'event_label': 'click', 'value': '0'});">Consulte aqui</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <footer>
        <div class="container-fluid text-center">
            <ul id="ulFooter">
                <li>Mendoza 6924, S2000 Rosario, Santa Fe</li>
                <li>0341 456-4021 / 3416692938</li>
                <li>info@belgranoconsultorios.com</li>
                <li>Horario de Atención - 9hs a 21hs </li>
            </ul>
            <a href="http://www.somosmarea.com" target="_blank"><img id="mareaFooter" src="img/marea.png" alt=""
                    class="img-fluid"></a>
        </div>
    </footer>


</body>

</html>
<?php
        require_once('whatsapp.php');

        ?>