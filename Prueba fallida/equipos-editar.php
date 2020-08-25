<?php

include 'conexion.php';

$nombre = $_POST['nombre'] ?? '';
$grupo = $_POST['grupo'] ?? '';
$posicion = $_POST['posicion'] ?? '';
$grupo = strtoupper($grupo);


$errores = '';
$alertText = '';
$alertCssClass = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include 'equipos-validar.php';
    if (!empty($errores)) {
        $alertText = $errores;
        $alertCssClass = 'alert-danger';
    } else {
        // Se inserta el producto en la base de datos
        Include 'conexion.php';
       
        // Se limpian los contenidos de los datos recibidos del formulario para evitar inyección SQL
        $nombre = mysqli_real_escape_string($link, $nombre);
        $grupo = mysqli_real_escape_string($link, $grupo);
        $posicion = mysqli_real_escape_string($link, $posicion);
        
                if (empty($_GET['id_editar'])) {
                    
                    // En el del profe, acá estaba el alta del producto
                    die;

                } else {

                    $nombre = mysqli_real_escape_string($link, $nombre);
                    $grupo = mysqli_real_escape_string($link, $grupo);
                    $posicion = mysqli_real_escape_string($link, $posicion);
                    
                   

                    // Se editan los datos del registro
                    $sql = "UPDATE equipos
                            SET 
                                nombre = '$nombre', 
                                grupo = '$grupo', 
                                posicion = $posicion
                            WHERE 
                            id_equipo = {$_GET['id_editar']};";
                                                    
                   
                    $rs = mysqli_query($link, $sql);
                   
                    
                    // si la cantidad de registros modificados no es igual a uno, es porque no se modificó
                    if (mysqli_affected_rows($link) !== 1) {
                        header('Location: equipos-listado.php?editado=' .  $_GET['id_editar'] . '&resultado=0');
                        mysqli_close($link);
                        
                        die;
                    }
                    mysqli_close($link);

                    header('Location: equipos-listado.php?editado=' .  $_GET['id_editar'] . '&resultado=1');
                    die;
                }
    }

}else {
   
    if (isset($_GET['id_editar'])) {
       include 'conexion.php';
    }   
       
        $sql = 'SELECT * FROM equipos WHERE id_equipo =' .  $_GET['id_editar'];
        $rs = mysqli_query($link, $sql);
        mysqli_close($link);
            if (mysqli_num_rows($rs) !== 1 ) {
                header('Location: equipos_listado.php');
                die;
            }
               
        $equiposEditar = mysqli_fetch_assoc($rs);

    
            $nombre = $equiposEditar['nombre'];
            $grupo = $equiposEditar['grupo'];
            $posicion = $equiposEditar['posicion'];

   

}
$titulo = 'Edicion de Equipos';
include 'header.php'; 
?>
<h1 class="d-flex justify-content-center">Rusia <?=$anio?></h1>
<h2 class="d-flex justify-content-center">Edicion de equipos</h2>
<?php

// Si hay que informarle algo al usuario (errores en la validación o confirmación de la creación del producto)
if (!empty($errores)) {?>
    <div class="container text-center">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $errores;?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    </div>
    </div>
<?php
}



include 'equipos-editar-form.php';
include 'footer.php';

