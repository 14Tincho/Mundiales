<?php 
include 'config.php'; 
$titulo = 'Alta de partidos';
include 'nos-header.php';
?>
<h1 class="d-flex justify-content-center"><?=  SEDE . ' ' . ANO ?></h1>
<h2 class="d-flex justify-content-center"><?=$titulo?></h2>
<?php
$nropartido = $_POST['nropartido'] ?? '';
$equipo1 = $_POST['equipo1'] ?? '';
$equipo2 = $_POST['equipo2'] ?? '';
$goles1 = $_POST['goles1'] ?? ''; 
$goles2 = $_POST['goles2'] ?? '';
$penales1 = $_POST['penales1'] ?? '';
$penales2 = $_POST['penales2'] ?? '';
$errores = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'nos-partidos-validar.php';
    include 'nos-partidos-alta-DB.php';
    include 'nos-clasificacion.php';
    include 'nos-fixture-octavos.php';
}
include 'nos-partidos-alta-form.php';
include 'footer.php';


// UPDATE `equipos` SET `nombre` = 'Lavaqurncia' WHERE `equipos`.`id_equipo` = 44;
?>