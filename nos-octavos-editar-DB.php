<?php

if (empty($_GET['id_editar'])) {
    header('Location: nos-octavos-listado.php');
    die;
}

$id_editar = $_GET['id_editar'];

 if (!empty($errores)) {
    include 'errores.php';
    }else {
    include 'conexion.php';

$nropartido = mysqli_real_escape_string($link, $nropartido);
$equipo1 = mysqli_real_escape_string($link, $equipo1);
$equipo2 = mysqli_real_escape_string($link, $equipo2);
$goles1 = mysqli_real_escape_string($link, $goles1);
$goles2 = mysqli_real_escape_string($link, $goles2);
$penales1 = mysqli_real_escape_string($link, $penales1);
$penales2 = mysqli_real_escape_string($link, $penales2);

    if ($goles1 !== $goles2) {
        $penales1 = "NULL";
        $penales2 = "NULL";
    }
    $sql = "UPDATE octavos SET goles = $goles1, penales = $penales1 WHERE nropartido = $nropartido AND posicion = 1";
    $rs = mysqli_query($link, $sql);

    $sql = "UPDATE octavos SET goles = $goles2, penales = $penales2 WHERE nropartido = $nropartido AND posicion = 2";
    $rs = mysqli_query($link, $sql);
mysqli_close($link);

header('Location: nos-octavos-listado.php');

}

