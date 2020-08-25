<?php
     $titulo= 'Resultados';
    include 'header.php';
?>
    <h1 class="text-center">Tu fixture Rusia <?=$anio?></h1>
<?php
for ($jj='A'; $jj <= 'H'; $jj++) { 
    for ($ii=1; $ii < 5; $ii++) { 
        $nombre = $_POST['nombre'] ?? '';
        $id_equipo = $_POST['id_equipo' . $jj . $ii] ?? '';
        $grupo = $_POST['grupo'] ?? '';
        $posicion = $_POST['posicion'] ?? '';
    }    
}
$errores = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'fixture-validar.php';
}
echo $errores;
include 'resultado-fixture-form.php';
