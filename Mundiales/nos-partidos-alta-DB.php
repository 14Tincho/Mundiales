<?php
if(!empty($errores)) {
    include 'errores.php';
}else {
    include 'conexion.php';
    
// busco id de equipos
        $sql = "SELECT id_equipo FROM equipos WHERE nombre = '$equipo1'";             
        $rs = mysqli_query($link, $sql);
        if (mysqli_num_rows($rs) !== 1 ) {
        header('Location: nos-partidos-alta.php');
        die;
        }
        $array_equipo = mysqli_fetch_assoc($rs);
        $idEquipo1 = $array_equipo['id_equipo'];


        $sql = "SELECT id_equipo FROM equipos WHERE nombre = '$equipo2'";             
        $rs = mysqli_query($link, $sql);
        if (mysqli_num_rows($rs) !== 1 ) {
        header('Location: nos-partidos-alta.php');

        die;
        }
        $array_equipo = mysqli_fetch_assoc($rs);
        $idEquipo2 = $array_equipo['id_equipo'];



// doy de alta el registro
    $ano = ANO;
    $sql = "INSERT INTO partidos (fase, partido, id_equipo1, id_equipo2, goles1, goles2, penales1, penales2, anio) VALUES 
    ( 'F','$nropartido', '$idEquipo1', '$idEquipo2', '$goles1', '$goles2', '$penales1', '$penales2', $ano)";
    $rs = mysqli_query($link, $sql);

    if (!$rs) {
        date_default_timezone_set(ZONA_HORARIA);
        $fecha = date('d/m/Y H:i:s');
        $error_detalle = mysqli_error($link);
        $error_numero = mysqli_errno($link);
        $fh = fopen(ARCHIVO_LOG_ERRORES, 'a');
        fwrite($fh, "$fecha:\tError $error_numero\t$error_detalle\r\n");
        fclose($fh);
        $mensaje_usuario = 'Se produjo un error al intentar ejecutar la consulta en el servidor de bases de datos. '
            . "(Error: $error_numero)";
        die($mensaje_usuario);
    }else {
        $nropartido = '';
        $equipo1 = '';
        $equipo2 = '';
        $goles1 = '';
        $goles2 = '';
        $penales1 = '';
        $penales2 = '';
    }
    mysqli_close($link);
}

    
