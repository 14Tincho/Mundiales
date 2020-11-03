<?php

require 'conexion.php';
$anio = ANO;

$sql = "DELETE FROM semis WHERE anio = $anio";
$rs = mysqli_query($link, $sql);


$sql = "SELECT
c.id_equipo,
c.nropartido,
c.posicion,
c.anio

FROM
cuartos c
LEFT JOIN equipos e ON e.id_equipo = c.id_equipo
WHERE c.anio = $anio AND c.posicion = 1
ORDER BY c.nropartido";

$rs = mysqli_query($link, $sql);

if (!$rs) {
    header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');
    die;
}



$i = 0;
$j = 60;
while ($cuartos = mysqli_fetch_assoc($rs)):
$idEquipo = $cuartos['id_equipo'];
    if ($i == 2)  {
        $i = 0;
    }
    $i++; 
    if ($i == 1) {
        $j++;
    }  

    $sql = "INSERT INTO semis (
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