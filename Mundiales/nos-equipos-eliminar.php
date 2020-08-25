<?php

if (empty($_GET['id_eliminar'])) {
    header('Location: nos-equipos-listado.php');
    die;
}

$id_eliminar = $_GET['id_eliminar'];

require_once 'conexion.php';

// $id = mysqli_real_escape_string($link, $id_eliminar);

$sql = 'DELETE FROM equipos WHERE id_equipo = ' . $id_eliminar;

$rs = mysqli_query($link, $sql);
mysqli_close($link);

header('Location: nos-equipos-listado.php');
//die; // No es necesario, PHP termina acá de todas maneras
