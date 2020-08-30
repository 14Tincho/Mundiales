<?php

if (empty($_GET['id_editar'])) {
    header('Location: nos-partido-listado.php');
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


    // Busco el id de equipo1 y de equipo2
    $sql = "SELECT id_equipo FROM equipos WHERE nombre = '$equipo1'";             
    $rs = mysqli_query($link, $sql);
    if (mysqli_num_rows($rs) !== 1 ) {
    header('Location: nos-partidos-editar.php');
    die;
    }
    $array_equipo = mysqli_fetch_assoc($rs);
    $idEquipo1 = $array_equipo['id_equipo'];

    $sql = "SELECT id_equipo FROM equipos WHERE nombre = '$equipo2'";             
    $rs = mysqli_query($link, $sql);
    if (mysqli_num_rows($rs) !== 1 ) {
    header('Location: nos-partidos-editar.php');
    die;
    }
    $array_equipo = mysqli_fetch_assoc($rs);
    $idEquipo2 = $array_equipo['id_equipo'];

    if (empty($penales1)) {
        $penales1 = NULL;
    }
    if (empty($penales2)) {
        $penales2 = NULL;
    }
var_dump($penales1);
if ($penales1 == NULL && $penales2 == NULL) {
    $sql = "UPDATE partidos SET partido = $nropartido, id_equipo1 = $idEquipo1, id_equipo2 = $idEquipo2, goles1 = $goles1, goles2 = $goles2 WHERE id_partido = $id_editar";
    $rs = mysqli_query($link, $sql);
    mysqli_close($link);
}else {    
    $sql = "UPDATE partidos SET partido = $nropartido, id_equipo1 = $idEquipo1, id_equipo2 = $idEquipo2, goles1 = $goles1, goles2 = $goles2, penales1 = $penales1, penales2 = $penales2 WHERE id_partido = $id_editar";
    $rs = mysqli_query($link, $sql);
    mysqli_close($link);
}
header('Location: nos-partidos-listado.php');

}

