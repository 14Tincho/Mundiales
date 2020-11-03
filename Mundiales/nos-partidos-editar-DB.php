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

// $nropartido = mysqli_real_escape_string($link, $nropartido);
// $equipo1 = mysqli_real_escape_string($link, $equipo1);
// $equipo2 = mysqli_real_escape_string($link, $equipo2);
$goles1 = mysqli_real_escape_string($link, $goles1);
$goles2 = mysqli_real_escape_string($link, $goles2);



    // Busco el id de equipo1 y de equipo2
    // $sql = "SELECT id_equipo FROM equipos WHERE nombre = '$equipo1'";             
    // $rs = mysqli_query($link, $sql);
    // if (mysqli_num_rows($rs) !== 1 ) {
    // header('Location: nos-partidos-editar.php');
    // die;
    // }
    // $array_equipo = mysqli_fetch_assoc($rs);
    // $idEquipo1 = $array_equipo['id_equipo'];

    // $sql = "SELECT id_equipo FROM equipos WHERE nombre = '$equipo2'";             
    // $rs = mysqli_query($link, $sql);
    // if (mysqli_num_rows($rs) !== 1 ) {
    // header('Location: nos-partidos-editar.php');
    // die;
    // }
    // $array_equipo = mysqli_fetch_assoc($rs);
    // $idEquipo2 = $array_equipo['id_equipo'];


        $sql = "UPDATE partidos SET
        goles1 = $goles1,
        goles2 = $goles2
        WHERE id_partido = $id_editar";
        $rs = mysqli_query($link, $sql);

header('Location: nos-partidos-listado.php');

}

