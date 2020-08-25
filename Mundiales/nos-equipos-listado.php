<?php

require_once 'conexion.php';


$sql = 'SELECT * FROM equipos';

$rs = mysqli_query($link, $sql);
if (!$rs) {
    header('Location: pagina-error.php?error=2&detalle=Error en la consulta');
    die;
}

mysqli_close($link);

$cantidad_de_equipos = mysqli_num_rows($rs);

$titulo = 'Listado de equipos';
include 'nos-header.php';
?>
        <h1><?= $titulo ?></h1>
<?php
if ($cantidad_de_equipos > 0) {
    include 'nos-equipos-listado-tabla.php';
}
include 'footer.php';
