<?php
    include 'conexion.php';

    $ano = ANO;
    $sql = "SELECT nombre FROM `equipos` WHERE anio = $ano ORDER BY nombre";
    $rs = mysqli_query($link, $sql);
    $equipos = array();
    $cantidad = mysqli_num_rows($rs);
    if ($cantidad > 0) {
        while ($row = mysqli_fetch_assoc($rs)) {
            $equipos[] = $row; 
        }
    }
    mysqli_close($link);


    