<?php

if (empty($_GET['id'])) {
    header('Location: equipos-listado.php');
    die;
}

$id = $_GET['id'];

require_once 'conexion.php';

$id = mysqli_real_escape_string($link, $id);

$sql = 'DELETE FROM equipos WHERE id_equipo = ' . $id;

$rs = mysqli_query($link, $sql);
mysqli_close($link);

header('Location: equipos-listado.php');
//die; // No es necesario, PHP termina acá de todas maneras
