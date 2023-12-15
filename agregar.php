<?php
require_once('db/db.php');
$db = obtenerBaseDeDatos();
insertarPromos($db, $_POST['categoria'], $_POST['descripcion'], $_POST['valor']);  
header('Location: https://www.consultoriobelgrano.com/panel.php');
// header('Location: http://localhost/consultoriosBelgrano/panel.php');