<?php 
$titulo = 'Alta de Equipos';
include 'header.php'; 
?>
<h1 class="d-flex justify-content-center">Rusia <?=$anio?></h1>
<h2 class="d-flex justify-content-center">Alta de equipos</h2>
<?php
$nombre = $_POST['nombre'] ?? '';
$grupo = $_POST['grupo'] ?? ''; 
$posicion = $_POST['posicion'] ?? '';
$grupo = strtoupper($grupo);

$errores = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'equipos-validar.php';
    include 'equipos-alta-DB.php';
}
include 'equipos-alta-form.php';


// UPDATE `equipos` SET `nombre` = 'Lavaqurncia' WHERE `equipos`.`id_equipo` = 44;
?>