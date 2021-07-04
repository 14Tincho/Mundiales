<?php
    $errores = '';
    if (!isset($_GET['id_editar'])) {
        header('Location: nos-finales-listado.php');
        die;
    }  else {
        include 'conexion.php';

        $sql = 'SELECT
            f.id_final,
            f.nropartido,
            f.posicion,
            f.goles,
            f.penales,
            f.anio,
            e.nombre equipo
        FROM 
            finales f
        LEFT JOIN equipos e ON e.id_equipo = f.id_equipo
        WHERE f.nropartido =' .  $_GET['id_editar'];
    

        $rs = mysqli_query($link, $sql);
        mysqli_close($link);
            if (mysqli_num_rows($rs) !== 2 ) {
                header('Location: nos-finales-listado.php');
                die;
            }
    }           
        $i = 0;
        while ($finalesEditar = mysqli_fetch_assoc($rs)) :
        $i++;
        if ($i == 1 ) {
            $nropartido = $finalesEditar['nropartido'];
            $equipo1 = $finalesEditar['equipo'];
            $goles1 = $finalesEditar['goles'];
            $penales1 = $finalesEditar['penales'];
        }
        if ($i == 2) {
            $equipo2 = $finalesEditar['equipo'];
            $goles2 = $finalesEditar['goles'];
            $penales2 = $finalesEditar['penales'];
        }       
        endwhile;

$titulo = 'Edicion de finales';
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
        include 'nos-finales-editar-DB.php';
    }else{
        include 'errores.php';
    }
}

include 'nos-finales-editar-form.php';
include 'footer.php';

