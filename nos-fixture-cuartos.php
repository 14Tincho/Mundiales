<?php

require 'conexion.php';
$anio = ANO;

$sql = "DELETE FROM cuartos WHERE anio = $anio";
$rs = mysqli_query($link, $sql);
$sql = "DELETE FROM semis WHERE anio = $anio";
$rs = mysqli_query($link, $sql);
$sql = "DELETE FROM finales WHERE anio = $anio";
$rs = mysqli_query($link, $sql);

// voy barriendo tabla octavos y $h es igual nroPartidos
$i = 0;
$j = 56;
for ($h=49; $h <= 56; $h++) { 


$sql = "SELECT
o.id_equipo,
o.nropartido,
o.goles,
o.penales,
o.posicion,
o.anio

FROM
octavos o
LEFT JOIN equipos e ON e.id_equipo = o.id_equipo
WHERE o.anio = $anio AND o.nropartido = $h
ORDER BY o.posicion";

$rs = mysqli_query($link, $sql);

if (!$rs) {
    header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');
    die;
}


// recorremos de a 2 registros guardando los datos de cada equipo
$k = 0;
while ($octavos = mysqli_fetch_assoc($rs)) {
    $k++;
    if ($k == 1) {
        $idEquipo1 = $octavos['id_equipo'];
        $goles1 = $octavos['goles'];
        $penales1 = $octavos['penales'];
    }
    if ($k == 2) {
        $idEquipo2 = $octavos['id_equipo'];
        $goles2 = $octavos['goles'];
        $penales2 = $octavos['penales'];
    } 
    $nropartidooctavo = $octavos['nropartido'];  
}


// Busco el equipo ganador
if ($i == 2)  {
    $i = 0;
}
$i++; 
if ($i == 1) {
    $j++;
} 

if ($goles1 > $goles2) {
        $sql = "INSERT INTO cuartos (
        nropartido,
        posicion,
        id_equipo,
        anio,
        nropartidooctavo
        ) VALUES (
        $j,
        $i,
        $idEquipo1,
        $anio,
        $nropartidooctavo       
        )";
        $res = mysqli_query($link, $sql);
}elseif ($goles1 < $goles2) {
        $sql = "INSERT INTO cuartos (
        nropartido,
        posicion,
        id_equipo, 
        anio,
        nropartidooctavo
        ) VALUES (
        $j,
        $i,
        $idEquipo2,
        $anio,
        $nropartidooctavo       
        )";
    $res = mysqli_query($link, $sql);
}else{
        if ($penales1 > $penales2) {
                $sql = "INSERT INTO cuartos (
                nropartido,
                posicion,
                id_equipo, 
                anio,
                nropartidooctavo
                ) VALUES (
                $j,
                $i,
                $idEquipo1,
                $anio,
                $nropartidooctavo      
                )";
                $res = mysqli_query($link, $sql);
        }else {
            $sql = "INSERT INTO cuartos (
                nropartido,
                posicion,
                id_equipo, 
                anio,
                nropartidooctavo
                ) VALUES (
                $j,
                $i,
                $idEquipo2,
                $anio,
                $nropartidooctavo
                )";
            $res = mysqli_query($link, $sql);
        }
    }
}
mysqli_close($link);






// $i = 0;
// while ($octavos = mysqli_fetch_assoc($rs)):
//     if ($i == 2)  {
//         $i = 0;
//     }
//     $i++; 
//     if ($i == 1) {
//         $j++;
//     }  

//     $sql = "INSERT INTO cuartos (
//         nropartido,
//         posicion,
//         id_equipo, 
//         anio 
//         ) VALUES (
//         $j,
//         $i,
//         $idEquipo,
//         $anio        
//         )";
//     $res = mysqli_query($link, $sql);
// endwhile;
// }