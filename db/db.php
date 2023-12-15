<?php
function obtenerBaseDeDatos()
{
    // $nombre_base_de_datos = "belgrano";
    // $usuario = "root";
    // $contraseña = "";
    $nombre_base_de_datos = "c1701135_belgran";
    $usuario = "c1701135_belgran";
    $contraseña = "niGAvito25";
    try {
        $base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
        $base_de_datos->query("set names utf8;");
        return $base_de_datos;
    } catch (Exception $e) {
        # Nota: ¡en la vida real no imprimas errores!
        echo "Error obteniendo BD: " . $e->getMessage();
        return null;
    }
}
function traerJornadas(PDO $db)
{
    $consulta = $db->prepare("SELECT descripcion, fecha FROM jornadas");
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
 
}
// function traerUser(PDO $db)
// {
//     $consulta = $db->prepare("SELECT * FROM users");
//     $consulta->execute();
//     $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
//     return $resultado;
// }
function traerIdPromos(PDO $db)
{
    $consulta = $db->prepare("SELECT id FROM promociones");
    $consulta->execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    return $resultado;
 
}
function traerPromosDepi(PDO $db)
{
    $consulta = $db->prepare("SELECT * FROM promociones WHERE categoria  = 'depilacion' ");
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;

}
function traerPromosCrio(PDO $db)
{
    $consulta = $db->prepare("SELECT * FROM promociones WHERE categoria = 'criolipolisis' ");
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;

}
function traerPromosTesla(PDO $db)
{
    $consulta = $db->prepare("SELECT * FROM promociones WHERE categoria = 'teslagen' ");
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;

}
function traerPromosVenus(PDO $db)
{
    $consulta = $db->prepare("SELECT * FROM promociones WHERE categoria = 'venus' ");
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}
function traerPromosPreso(PDO $db)
{
    $consulta = $db->prepare("SELECT * FROM promociones WHERE categoria = 'presoterapia' ");
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}
function traerPromosBronceado(PDO $db)
{
    $consulta = $db->prepare("SELECT * FROM promociones WHERE categoria = 'bronceado organico' ");
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}
function traerPromosPersonalizado(PDO $db)
{
    $consulta = $db->prepare("SELECT * FROM promociones WHERE categoria = 'personalizado' ");
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function guardarJornadas(PDO $db, $fecha, $descripcion, $i)
{
    $consulta = $db->prepare("UPDATE jornadas SET fecha = '$fecha', descripcion = '$descripcion' WHERE jornadas.id = $i");
    return $consulta->execute();
}
function guardarPromos(PDO $db, $descripcion, $valor, $i)
{
    $consulta = $db->prepare("UPDATE promociones SET descripcion = '$descripcion', valor = $valor WHERE promociones.id = $i");
    $consulta->execute();
}
function insertarPromos(PDO $db, $categoria, $descripcion, $valor) {
    $consulta = $db->prepare("INSERT INTO promociones (categoria, descripcion, valor) VALUES ('$categoria', '$descripcion', '$valor')");
    $consulta->execute();
}
function borrarPromos(PDO $db, $id) {
    $consulta = $db->prepare("DELETE FROM `promociones` WHERE `promociones`.`id` = $id");
    $consulta->execute();
}
?>