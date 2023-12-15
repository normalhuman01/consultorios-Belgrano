<?php
require_once('db/db.php');
$db = obtenerBaseDeDatos();
if ($_POST) {
    $jornadasAGuardarValor = $_POST['jornadas'];
    $jornadasAGuardarDescripcion = $_POST['descripcionJornadas'];

    $conta = 1;
      for ($i=0; $i < count($jornadasAGuardarValor) ; $i++) { 
          $conta ++;
          guardarJornadas($db, $jornadasAGuardarValor[$i], $jornadasAGuardarDescripcion[$i], $conta);
      }
}
$promosDepi = traerPromosDepi($db);
$promosCrio = traerPromosCrio($db);
$promosTesla = traerPromosTesla($db);
$promosVenus = traerPromosVenus($db);
$promosPreso = traerPromosPreso($db);
$promosBronceado = traerPromosBronceado($db);
$promosPersonalizado = traerPromosPersonalizado($db);
$jornadas = traerJornadas($db);
?>
<!DOCTYPE html>
<html lang="es">
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
    <link rel="shortcut icon" href="img/logomini.png" type="image/x-icon">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Consultorio Belgrano</title>
</head>

<body>
<script>
   let clave = prompt('Ingrese su contraseña');
   if (clave != 'consultoriobelgrano') {
    location.href = "http://www.consultoriobelgrano.com"
   }
</script>

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
                        <a class="nav-link" href="rutas/contacto">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <h2 class="text-center my-3">PANEL DE ADMINISTRACION</h2>
    <div id="panel" class="container form-group pt-5">
        <form action="panel.php" method="post" style="display:flex; flex-direction:column">
            <?php for ($i=0; $i < count($jornadas) ; $i++) :?>
            <label class="font-weight-bold" for="">JORNADA <?=$i+1?></label>
            <input type="text" name="descripcionJornadas[]" value="<?=$jornadas[$i]['descripcion']?>">
            <input type="text" name="jornadas[]" value="<?=$jornadas[$i]['fecha']?>">
            <?php endfor; ?>
            <br>
                <input type="submit" class="btn btn-success" value="MODIFICAR JORNADAS">
            <br>
            <h4 class="font-weight-bold">PROMOS</h4>
            <?php for ($i=0; $i < count($promosDepi) ; $i++) :?>
            <span class="text-uppercase font-weight-bold"><?=$promosDepi[$i]['categoria']?></span>
            ID = <?=$promosDepi[$i]['id']?>
            <input type="text" name="descripcionPromos[]" value="<?=$promosDepi[$i]['descripcion']?>">
            <input type="text" name="valorPromos[]" value="<?=$promosDepi[$i]['valor']?>">
            <?php endfor; ?>
            <?php for ($i=0; $i < count($promosCrio) ; $i++) :?>
            <span class="text-uppercase font-weight-bold"><?=$promosCrio[$i]['categoria']?></span>
            ID = <?=$promosCrio[$i]['id']?>
            <input type="text" name="descripcionPromos[]" value="<?=$promosCrio[$i]['descripcion']?>">
            <input type="text" name="valorPromos[]" value="<?=$promosCrio[$i]['valor']?>">
            <?php endfor; ?>
            <?php for ($i=0; $i < count($promosTesla) ; $i++) :?>
            <span class="text-uppercase font-weight-bold"><?=$promosTesla[$i]['categoria']?></span>
            ID = <?=$promosTesla[$i]['id']?>
            <input type="text" name="descripcionPromos[]" value="<?=$promosTesla[$i]['descripcion']?>">
            <input type="text" name="valorPromos[]" value="<?=$promosTesla[$i]['valor']?>">
            <?php endfor; ?>
            <?php for ($i=0; $i < count($promosVenus) ; $i++) :?>
            <span class="text-uppercase font-weight-bold"><?=$promosVenus[$i]['categoria']?></span>
            ID = <?=$promosVenus[$i]['id']?>
            <input type="text" name="descripcionPromos[]" value="<?=$promosVenus[$i]['descripcion']?>">
            <input type="text" name="valorPromos[]" value="<?=$promosVenus[$i]['valor']?>">
            <?php endfor; ?>
            <?php for ($i=0; $i < count($promosPreso) ; $i++) :?>
            <span class="text-uppercase font-weight-bold"><?=$promosPreso[$i]['categoria']?></span>
            ID = <?=$promosPreso[$i]['id']?>
            <input type="text" name="descripcionPromos[]" value="<?=$promosPreso[$i]['descripcion']?>">
            <input type="text" name="valorPromos[]" value="<?=$promosPreso[$i]['valor']?>">
            <?php endfor; ?>
            <?php for ($i=0; $i < count($promosBronceado) ; $i++) :?>
            <span class="text-uppercase font-weight-bold"><?=$promosBronceado[$i]['categoria']?></span>
            ID = <?=$promosBronceado[$i]['id']?>
            <input type="text" name="descripcionPromos[]" value="<?=$promosBronceado[$i]['descripcion']?>">
            <input type="text" name="valorPromos[]" value="<?=$promosBronceado[$i]['valor']?>">
            <?php endfor; ?>
            <?php for ($i=0; $i < count($promosPersonalizado) ; $i++) :?>
            <span class="text-uppercase font-weight-bold"><?=$promosPersonalizado[$i]['categoria']?></span>
            ID = <?=$promosPersonalizado[$i]['id']?>
            <input type="text" name="descripcionPromos[]" value="<?=$promosPersonalizado[$i]['descripcion']?>">
            <input type="text" name="valorPromos[]" value="<?=$promosPersonalizado[$i]['valor']?>">
            <?php endfor; ?>
            </form>
            <div class="row justify-content-between">
            <button type="button" class="btn btn-primary m-1" style="width:32%"  data-toggle="modal" data-target="#cargarPromos">
                CARGAR PROMOS
            </button>
            <button type="button" class="btn btn-success m-1"  style="width:32%" data-toggle="modal" data-target="#modificarPromos">
                EDITAR PROMOS
            </button>
            <button type="button" class="btn btn-danger m-1"  style="width:32%" data-toggle="modal" data-target="#borrarPromos">
                BORRAR PROMOS
            </button>
            </div>


        <!-- Modal CargaPromo-->
        <div class="modal fade" id="cargarPromos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Promociones</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="agregar.php" method="post">
                            <label class="w-25" for="">Descripcion</label>
                            <input type="text" name="descripcion"><br>
                            <label class="w-25" for="">Precio</label>
                            <input type="text" name="valor" id="" placeholder="$"><br>
                            <select class="custom-select" name="categoria" id="inputGroupSelect01">
                                <option value="depilacion">Depilacion</option>
                                <option value="criolipolisis">Criolipolisis</option>
                                <option value="teslagen">Teslagen</option>
                                <option value="venus">Venus</option>
                                <option value="bronceado organico">Bronceado Orgánico</option>
                                <option value="presoterapia">Presoterapia</option>
                                <option value="personalizado">Personalizado</option>
                            </select>
                            <input type="submit" value="Agregar" class="btn btn-success">
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal ModificarPromo-->
         <div class="modal fade" id="modificarPromos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modificar Promociones</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="modificar.php" method="post">
                            <label class="w-25" for="">ID</label>
                            <input type="text" name="id"><br>
                            <label class="w-25" for="">Descripcion</label>
                            <input type="text" name="descripcion"><br>
                            <label class="w-25" for="">Precio</label>
                            <input type="text" name="valor" id="" placeholder="$"><br>
                            <input type="submit" value="Modificar" class="btn btn-success">
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal BorraPromo -->
        <div class="modal fade" id="borrarPromos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Borrar Promociones</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="borrar.php" method="post">
                            <label class="w-25" for="">ID</label>
                            <input type="text" name="id">
                            <input type="submit" value="Borrar" class="btn btn-danger">
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>

