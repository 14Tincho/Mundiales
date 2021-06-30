<?php
    $errores = '';
    if (!isset($_GET['id_editar'])) {
        header('Location: nos-semis-listado.php');
        die;
    }  else {
        include 'conexion.php';

        $sql = 'SELECT
            s.id_semi,
            s.nropartido,
            s.posicion,
            s.goles,
            s.penales,
            s.anio,
            e.nombre equipo
        FROM 
            semis s
        LEFT JOIN equipos e ON e.id_equipo = s.id_equipo
        WHERE s.nropartido =' .  $_GET['id_editar'];
    

        $rs = mysqli_query($link, $sql);
        mysqli_close($link);
            if (mysqli_num_rows($rs) !== 2 ) {
                header('Location: nos-semis-listado.php');
                die;
            }
    }           
        $i = 0;
        while ($semisEditar = mysqli_fetch_assoc($rs)) :
        $i++;
        if ($i == 1 ) {
            $nropartido = $semisEditar['nropartido'];
            $equipo1 = $semisEditar['equipo'];
            $goles1 = $semisEditar['goles'];
            $penales1 = $semisEditar['penales'];
        }
        if ($i == 2) {
            $equipo2 = $semisEditar['equipo'];
            $goles2 = $semisEditar['goles'];
            $penales2 = $semisEditar['penales'];
        }       
        endwhile;

$titulo = 'Edicion de semis';
include 'nos-header.php';
?>
<h1 class="d-flex justify-content-center"><?= SEDE . ' ' .ANO ?></h1>
<h2 class="d-flex justify-content-center"><?= $titulo ?></h2>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nropartido = $_POST['nropartido'] ?? '';
    $equipo1 = $_POST['equipo1'] ?? '';
    $equipo2 = $_POST['equipo2'] ?? '';
    $goles1 = $_POST['goles1'] ?? '';
    $goles2 = $_POST['goles2'] ?? '';
    $penales1 = $_POST['penales1'] ?? '';
    $penales2 = $_POST['penales2'] ?? '';
    

    include 'nos-editar-validar.php';
    include 'nos-semis-editar-DB.php';
    include 'nos-fixture-finales.php';
    
}

include 'nos-semis-editar-form.php';
include 'footer.php';

