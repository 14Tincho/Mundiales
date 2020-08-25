<?php
 
 if (!empty($errores)) {?>
    <div class="container text-center">
        <div class="alert alert-danger" role="alert">
            <?= $errores;?>
        </div>
    </div>
<?php
}else {
    include 'conexion.php';

$nombre = mysqli_real_escape_string($link, $nombre);
$grupo = mysqli_real_escape_string($link, $grupo);
$posicion = mysqli_real_escape_string($link, $posicion);

$sql = "UPDATE equipos SET nombre = $nombre, grupo = $grupo, posicion = $posicion WHERE id_equipo = $id";


$rs = mysqli_query($link, $sql);
mysqli_close($link);

header('Location: equipos-listado.php');
//die; // No es necesario, PHP termina acá de todas maneras
}

// $sql = "UPDATE equipos SET nombre = $nombre, grupo = $grupo, posicion = $posicion WHERE equipos.id_equipo = 64;"