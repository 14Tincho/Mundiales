<?php

    if (isset($_GET['id_editar'])) {
       include 'conexion.php';
    }   
       
        $sql = 'SELECT * FROM equipos WHERE id_equipo =' .  $_GET['id_editar'];
        $rs = mysqli_query($link, $sql);
        mysqli_close($link);
            if (mysqli_num_rows($rs) !== 1 ) {
                header('Location: nos-equipos-listado.php');
                die;
            }
               
        $equiposEditar = mysqli_fetch_assoc($rs);

    
            $nombre = $equiposEditar['nombre'];
            $nombreAnt = $equiposEditar['nombre'];
            $grupo = $equiposEditar['grupo'];
            $grupoAnt = $equiposEditar['grupo'];
            $posicion = $equiposEditar['posicion'];
            $posicionAnt = $equiposEditar['posicion'];
   

$titulo = 'Edicion de Equipos';
include 'nos-header.php'; 
?>
<h1 class="d-flex justify-content-center"><?= SEDE . ' ' .ANO ?></h1>
<h2 class="d-flex justify-content-center"><?= $titulo ?></h2>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $grupo = $_POST['grupo'] ?? '';
    $posicion = $_POST['posicion'] ?? '';
    $grupo = strtoupper($grupo);

    $errores = '';
    include 'nos-equipos-editar-validar.php';
    include 'nos-equipos-editar-DB.php';
}


include 'nos-equipos-editar-form.php';
include 'footer.php';

