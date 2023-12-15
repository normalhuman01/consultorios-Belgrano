<?php
require_once('header.php');
require_once('../db/db.php');
$db = obtenerBaseDeDatos();
$promosDepi = traerPromosDepi($db);
$promosCrio = traerPromosCrio($db);
$promosTesla = traerPromosTesla($db);
$promosVenus = traerPromosVenus($db);
$promosPreso = traerPromosPreso($db);
$promosBronceado = traerPromosBronceado($db);
$promosPersonalizado = traerPromosPersonalizado($db);
var_dump($promosPreso, $promosPersonalizado);
?>

<div class="container my-5">
    <div class="row my-5">
        <div id="promoMobile" class="container">
            <div class="container-fluid animated rollIn">
                <img src="../img/promos.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div id="promoEscritorio" class="container w-50">
            <div class="container-fluid animated bounceInLeft">
                <img src="../img/promos2.png" alt="" class="img-fluid">
            </div>
        </div>
        

        <div class="container animated zoomIn w-75">
            <?php if (!empty($promosDepi)) :?> 
            <table class="table">
                <tbody>
                    <tr><strong>DEPILACION DEFINITIVA</strong></tr>
                    <?php for ($i=0; $i < count($promosDepi) ; $i++) :?> 
                    <tr>
                        <td class="align-middle"><?=$promosDepi[$i]['descripcion']?></td>
                        <td class="align-middle">$<?=$promosDepi[$i]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank" onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'quieropromo', 'event_label': 'click', 'value': '0'});">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <?php endfor?>
                </tbody>
            </table>
            <?php endif ?>

            <?php if (!empty($promosCrio)) :?> 
            <table class="table">
                <tbody>
                    <tr><strong>CRIOLIPOLISIS</strong></tr>
                    <?php for ($i=0; $i < count($promosCrio) ; $i++) :?> 
                    <tr>
                        <td class="align-middle"><?=$promosCrio[$i]['descripcion']?></td>
                        <td class="align-middle">$<?=$promosCrio[$i]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank" onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'quieropromo', 'event_label': 'click', 'value': '0'});">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <?php endfor?>
                </tbody>
            </table>
            <?php endif ?>

            <?php if (!empty($promosTesla)) :?> 
            <table class="table">
                <tbody>
                    <tr><strong>TESLAGEN</strong></tr>
                    <?php for ($i=0; $i < count($promosTesla) ; $i++) :?> 
                    <tr>
                        <td class="align-middle"><?=$promosTesla[$i]['descripcion']?></td>
                        <td class="align-middle">$<?=$promosTesla[$i]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank" onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'quieropromo', 'event_label': 'click', 'value': '0'});">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <?php endfor?>
                </tbody>
            </table>
            <?php endif ?>

            <?php if (!empty($promosVenus)) :?> 
            <table class="table">
                <tbody>
                    <tr><strong>VENUS LEGACY</strong></tr>
                    <?php for ($i=0; $i < count($promosVenus) ; $i++) :?> 
                    <tr>
                        <td class="align-middle"><?=$promosVenus[$i]['descripcion']?></td>
                        <td class="align-middle">$<?=$promosVenus[$i]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank" onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'quieropromo', 'event_label': 'click', 'value': '0'});">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <?php endfor?>
                </tbody>
            </table>
            <?php endif ?>

            <?php if (!empty($promosBronceado)) :?>        
            <table class="table">
                <tbody>
                    <tr><strong>BRONCEADO ORGÁNICO</strong></tr>
                    <?php for ($i=0; $i < count($promosBronceado) ; $i++) :?> 
                    <tr>
                        <td class="align-middle"><?=$promosBronceado[$i]['descripcion']?></td>
                        <td class="align-middle">$<?=$promosBronceado[$i]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank" onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'quieropromo', 'event_label': 'click', 'value': '0'});">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <?php endfor?>
                </tbody>
            </table>
            <?php endif ?>

            <?php if (!empty($promosPreso)) :?> 
            <table class="table">
                <tbody>
                    <tr><strong>PRESOTERAPIA</strong></tr>
                    <?php for ($i=0; $i < count($promosPreso) ; $i++) :?> 
                    <tr>
                        <td class="align-middle"><?=$promosPreso[$i]['descripcion']?></td>
                        <td class="align-middle">$<?=$promosPreso[$i]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank" onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'quieropromo', 'event_label': 'click', 'value': '0'});">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <?php endfor?>
                </tbody>
            </table>
            <?php endif ?>

            <?php if (!empty($promosPersonalizado)) :?> 
            <table class="table">
                <tbody>
                    <tr><strong>PERSONALIZADO</strong></tr>
                    <?php for ($i=0; $i < count($promosPersonalizado) ; $i++) :?> 
                    <tr>
                        <td class="align-middle"><?=$promosPersonalizado[$i]['descripcion']?></td>
                        <td class="align-middle">$<?=$promosPersonalizado[$i]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank" onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'quieropromo', 'event_label': 'click', 'value': '0'});">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <?php endfor?>
                </tbody>
            </table>
            <?php endif ?>
        </div>
    </div>
</div>

<div id="whatsapp" data-aos="fade-left">
    <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
    <img src="../img/whatsapp-logo-1.png" alt="">
    </a>
</div>



<?php
require_once('footer.php');
?>