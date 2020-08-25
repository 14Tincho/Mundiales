<?php
     $titulo= 'Fixture';
    include 'header.php';
?>
    <h1 class="text-center">Fixture <?=$anio?></h1>
<?php
for ($jj='A'; $jj <= 'H'; $jj++) { 
    for ($ii=1; $ii < 5; $ii++) { 
        $nombre = $_POST['nombre'] ?? '';
     

        $id_equipo = $_POST['id_equipo' . $jj . $ii] ?? '';
        $arrayEquipos[] = $id_equipo;
        // $arrayEquipos = [$id_equipo,];
        // array_push($arrayEquipos, $id_equipo);
    }    
}



$errores = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'fixture-validar.php';
}
echo $errores;
include 'fixture-form.php';
?>
