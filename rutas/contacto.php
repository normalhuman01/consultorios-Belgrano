<?php
require_once('header.php');
if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["mensaje"]) ){
    $to = "info@consultoriobelgrano.com";
    $subject = "Mensaje Enviado";
    $contenido .= "Nombre: ".$_POST["nombre"]."\n";
    $contenido .= "Email: ".$_POST["email"]."\n\n";
    $contenido .= "Mensaje: ".$_POST["mensaje"]."\n\n";
    $header = "From: info@consultoriobelgrano.com\nReply-To:".$_POST["email"]."\n";
    $header .= "Mime-Version: 1.0\n";
    $header .= "Content-Type: text/plain";
    if(mail($to, $subject, $contenido ,$header)){
        echo  '<script language="javascript">
                    window.onload = function() {
                        swal("Mensaje Enviado", "success");
                    }
                </script>';
    }
    }               
?>

<div class="container my-5">
    <h1>Contactenos</h1>
    <div class="row">
        <div class="col-12 col-md-6 animated fadeIn">
            <form method="POST" action="contacto">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre </label>
                    <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensaje</label>
                    <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
                <button class="btn btn-primary" type="submit" onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'formulario', 'event_label': 'click', 'value': '0'});">Enviar</button>
            </form>
        </div>
        <div class="col-12 col-md-6 animated fadeIn my-5">
            <img src="../img/email.png" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>
<div class="container py-5">
        <iframe id="mapa" data-aos="fade-in"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.4103870886033!2d-60.71751338525432!3d-32.940172878889605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b6532c9d4f92e3%3A0x7bd635baee85c183!2sNuevos%20Consultorios%20Belgrano!5e0!3m2!1ses!2sar!4v1574174788651!5m2!1ses!2sar"
            width="100%" frameborder="0" style="border:0;" allowfullscreen="">
        </iframe>
    </div>

<div id="whatsapp" data-aos="fade-left">
    <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
    <img src="../img/whatsapp-logo-1.png" alt="">
    </a>
</div>
<?php
require_once('footer.php');
?>