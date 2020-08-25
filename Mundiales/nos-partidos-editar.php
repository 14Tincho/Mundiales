<?php
    $errores = '';
    if (!isset($_GET['id_editar'])) {
        header('Location: nos-partidos-listado.php');
        die;
    }  else {
        include 'conexion.php';

        $sql = 'SELECT  
            p.partido,
            p.goles1,
            p.goles2,
            p.penales1,
            p.penales2,
            e.nombre equipo1,
            eq.nombre equipo2
        FROM 
            partidos p
        LEFT JOIN equipos e ON e.id_equipo = p.id_equipo1
        LEFT JOIN equipos eq ON eq.id_equipo = p.id_equipo2 
        WHERE id_partido =' .  $_GET['id_editar'];
    

        $rs = mysqli_query($link, $sql);
        mysqli_close($link);
            if (mysqli_num_rows($rs) !== 1 ) {
                header('Location: nos-partidos-listado.php');
                die;
            }
    }           
        $partidosEditar = mysqli_fetch_assoc($rs);

            $nropartido = $partidosEditar['partido'];
            $equipo1 = $partidosEditar['equipo1'];
            $goles1 = $partidosEditar['goles1'];
            $penales1 = $partidosEditar['penales1'];
            $equipo2 = $partidosEditar['equipo2'];
            $goles2 = $partidosEditar['goles2'];
            $penales2 = $partidosEditar['penales2'];

            $nropartidoAnt = $partidosEditar['partido'];
            $equipo1Ant = $partidosEditar['equipo1'];;
            $equipo2Ant = $partidosEditar['equipo2'];
    

            
    
$titulo = 'Edicion de Partidos';
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
   
    include 'nos-partidos-editar-validar.php';
    include 'nos-partidos-editar-DB.php';
}

include 'nos-partidos-editar-form.php';
include 'footer.php';

