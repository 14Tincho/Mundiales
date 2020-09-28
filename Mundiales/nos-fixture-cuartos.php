<?php

// require 'config.php';
require 'conexion.php';
$anio = ANO;

$sql = "DELETE FROM cuartos WHERE anio = $anio";
$rs = mysqli_query($link, $sql);


$sql = "SELECT
o.id_equipo,
o.nropartido,
o.posicion,
o.anio

FROM
octavos o
LEFT JOIN equipos e ON e.id_equipo = o.id_equipo
WHERE o.anio = $anio AND o.posicion = 1
ORDER BY o.nropartido";

$rs = mysqli_query($link, $sql);

if (!$rs) {
    header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');
    die;
}

$i = 0;
$j = 56;
while ($octavos = mysqli_fetch_assoc($rs)):
$idEquipo = $octavos['id_equipo'];



    if ($i == 2)  {
        $i = 0;
    }
    $i++; 
    if ($i == 1) {
        $j++;
    }  

    $sql = "INSERT INTO cuartos (
        nropartido,
        posicion,
        id_equipo, 
        anio 
        ) VALUES (
        $j,
        $i,
        $idEquipo,
        $anio        
        )";
    $res = mysqli_query($link, $sql);
endwhile;
mysqli_close($link);