<?php
include 'config.php'; 
$titulo = 'Alta de Equipos';
include 'nos-header.php';
?>
<h1 class="d-flex justify-content-center"><?=  SEDE . ' ' . ANO ?></h1>
<h2 class="d-flex justify-content-center"><?=$titulo?></h2>
<?php
$nombre = $_POST['nombre'] ?? '';
$grupo = $_POST['grupo'] ?? ''; 
$posicion = $_POST['posicion'] ?? '';
$grupo = strtoupper($grupo);

$errores = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'nos-equipos-validar.php';
    include 'nos-equipos-alta-DB.php';
}
include 'nos-equipos-alta-form.php';
include 'footer.php';


// UPDATE `equipos` SET `nombre` = 'Lavaqurncia' WHERE `equipos`.`id_equipo` = 44;
?>