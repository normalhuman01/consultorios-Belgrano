<?php
require_once('db/db.php');
$db = obtenerBaseDeDatos();
guardarPromos($db, $_POST['descripcion'], $_POST['valor'], $_POST['id']);  
header('Location: https://www.consultoriobelgrano.com/panel.php');