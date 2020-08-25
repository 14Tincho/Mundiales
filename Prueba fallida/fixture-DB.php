<?php
    include 'conexion.php';


    $sql = "SELECT nombre FROM `equipos` WHERE grupo = '$j'";
    $rs = mysqli_query($link, $sql);
    $equipos = array();
    if (mysqli_num_rows($rs) > 0) {
        while ($row = mysqli_fetch_assoc($rs)) {
            $equipos[] = $row; 
        }
    }
    mysqli_close($link);


    