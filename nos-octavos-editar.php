<?php
    $errores = '';
    if (!isset($_GET['id_editar'])) {
        header('Location: nos-octavos-listado.php');
        die;
    }  else {
        include 'conexion.php';
        $editar = $_GET["id_editar"];

        $sql = "SELECT
            o.id_octavo,
            o.nropartido,
            o.posicion,
            o.goles,
            o.penales,
            o.anio,
            e.nombre equipo
        FROM 
            octavos o
        LEFT JOIN equipos e ON e.id_equipo = o.id_equipo
        WHERE o.nropartido = $editar
        ORDER BY O.posicion";
    

        $rs = mysqli_query($link, $sql);
        mysqli_close($link);
            if (mysqli_num_rows($rs) !== 2 ) {
                header('Location: nos-octavos-listado.php');
                die;
            }
    }           
        $i = 0;
        while ($octavosEditar = mysqli_fetch_assoc($rs)) :
        $i++;
        if ($i == 1 ) {
            $nropartido = $octavosEditar['nropartido'];
            $equipo1 = $octavosEditar['equipo'];
            $goles1 = $octavosEditar['goles'];
            $penales1 = $octavosEditar['penales'];
        }
        if ($i == 2) {
            $equipo2 = $octavosEditar['equipo'];
            $goles2 = $octavosEditar['goles'];
            $penales2 = $octavosEditar['penales'];
        }       
        endwhile;

$titulo = 'Edicion de Octavos';
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
        include 'nos-octavos-editar-DB.php';
        include 'nos-fixture-cuartos.php';
    }else {
        include 'errores.php';
    }
}
include 'nos-octavos-editar-form.php';
include 'footer.php';

