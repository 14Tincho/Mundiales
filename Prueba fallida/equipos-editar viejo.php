<?php

include 'conexion.php';

$nombre = $_POST['nombre'] ?? '';
$grupo = $_POST['grupo'] ?? '';
$posicion = $_POST['posicion'] ?? '';

$errores = '';
$alertText = '';
$alertCssClass = '';


   

    if (empty($_GET['id_editar'])) {    
        header('Location: equipos-listado.php');
        die;
    }


    $id =  $_GET['id_editar'];
    $sql = 'SELECT * FROM equipos WHERE id_equipo =' .  $id;
    $rs = mysqli_query($link, $sql);
        if (mysqli_num_rows($rs) !== 1 ) {
            header('Location: equipos_listado.php');
            die;
        }

    $equiposEditar = mysqli_fetch_assoc($rs);

    mysqli_close($link);



    $nombre = $equiposEditar['nombre'];
    $grupo = $equiposEditar['grupo'];
    $posicion = $equiposEditar['posicion'];



$titulo = 'Edicion de Equipos';
include 'header.php'; 
?>
<h1 class="d-flex justify-content-center">Rusia <?=$anio?></h1>
<h2 class="d-flex justify-content-center">Edicion de equipos</h2>
<?php

// $errores = '';
// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//    include 'equipos-validar.php';
//    include 'equipos-editar-DB.php';
//
// }

include 'equipos-editar-form.php';
include 'footer.php';

?>