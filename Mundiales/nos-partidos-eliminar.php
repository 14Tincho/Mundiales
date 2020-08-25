<?php

if (empty($_GET['id_eliminar'])) {
    header('Location: nos-partidos-listado.php');
    die;
}

$id_eliminar = $_GET['id_eliminar'];

require_once 'conexion.php';

$id_eliminar = mysqli_real_escape_string($link, $id_eliminar);

$sql = 'DELETE FROM partidos WHERE id_partido = ' . $id_eliminar;

$rs = mysqli_query($link, $sql);
mysqli_close($link);

header('Location: nos-partidos-listado.php');
//die; // No es necesario, PHP termina acá de todas maneras
