<?php
    $errores = '';
    if (!isset($_GET['id_editar'])) {
        header('Location: nos-cuartos-listado.php');
        die;
    }  else {
        include 'conexion.php';

        $sql = 'SELECT
            c.id_cuarto,
            c.nropartido,
            c.posicion,
            c.goles,
            c.penales,
            c.anio,
            e.nombre equipo
        FROM 
            cuartos c
        LEFT JOIN equipos e ON e.id_equipo = c.id_equipo
        WHERE c.nropartido =' .  $_GET['id_editar'];
    

        $rs = mysqli_query($link, $sql);
        mysqli_close($link);
            if (mysqli_num_rows($rs) !== 2 ) {
                header('Location: nos-cuartos-listado.php');
                die;
            }
    }           
        $i = 0;
        while ($cuartosEditar = mysqli_fetch_assoc($rs)) :
        $i++;
        if ($i == 1 ) {
            $nropartido = $cuartosEditar['nropartido'];
            $equipo1 = $cuartosEditar['equipo'];
            $goles1 = $cuartosEditar['goles'];
            $penales1 = $cuartosEditar['penales'];
        }
        if ($i == 2) {
            $equipo2 = $cuartosEditar['equipo'];
            $goles2 = $cuartosEditar['goles'];
            $penales2 = $cuartosEditar['penales'];
        }       
        endwhile;

$titulo = 'Edicion de Cuartos';
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
    if ($errores == '') {
        include 'nos-cuartos-editar-DB.php';
        include 'nos-fixture-semis.php';
        // include 'nos-fixture-finales.php';
    }else {
        include 'errores.php';
    }
    
}

include 'nos-cuartos-editar-form.php';
include 'footer.php';

