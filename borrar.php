<?php
require_once('db/db.php');
$db = obtenerBaseDeDatos();
borrarPromos($db,$_POST['id']);
header('Location: https://www.consultoriobelgrano.com/panel.php');