<?php
    include 'user-inicio-sesion.php';
    include 'conexion.php';
    $anio = ANO;

$titulo = 'Tabla de Posiciones';
include 'user-header.php';

?>
    <h1 class="text-center marginBottom40"><?= $titulo ?></h1>
    
<?php
include 'user-tabla-posiciones-div.php';
include 'footer.php';