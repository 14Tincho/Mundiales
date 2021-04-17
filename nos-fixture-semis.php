<?php

require 'conexion.php';
$anio = ANO;

$sql = "DELETE FROM semis WHERE anio = $anio";
$rs = mysqli_query($link, $sql);
var_dump($sql);


// voy barriendo tabla cuartos y $h es igual nroPartidos
$i = 0;
$j = 60;
for ($h=57; $h <= 60; $h++) { 


$sql = "SELECT
c.id_equipo,
c.nropartido,
c.goles,
c.penales,
c.posicion,
c.anio

FROM
cuartos c
LEFT JOIN equipos e ON e.id_equipo = c.id_equipo
WHERE c.anio = $anio AND c.nropartido = $h
ORDER BY c.posicion";

$rs = mysqli_query($link, $sql);

if (!$rs) {
    header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');
    die;
}


// recorremos de a 2 registros guardando los datos de cada equipo
$k = 0;
while ($cuartos = mysqli_fetch_assoc($rs)) {
    $k++;
    if ($k == 1) {
        $idEquipo1 = $cuartos['id_equipo'];
        $goles1 = $cuartos['goles'];
        $penales1 = $cuartos['penales'];
    }
    if ($k == 2) {
        $idEquipo2 = $cuartos['id_equipo'];
        $goles2 = $cuartos['goles'];
        $penales2 = $cuartos['penales'];
    } 
    $nropartidocuarto = $cuartos['nropartido'];   
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
        $sql = "INSERT INTO semis (
        nropartido,
        posicion,
        id_equipo, 
        anio,
        nropartidocuarto 
        ) VALUES (
        $j,
        $i,
        $idEquipo1,
        $anio,
        $nropartidocuarto         
        )";
        $res = mysqli_query($link, $sql);
}elseif ($goles1 < $goles2) {
        $sql = "INSERT INTO semis (
        nropartido,
        posicion,
        id_equipo, 
        anio,
        nropartidocuarto  
        ) VALUES (
        $j,
        $i,
        $idEquipo2,
        $anio,
        $nropartidocuarto         
        )";
    $res = mysqli_query($link, $sql);
}else{
        if ($penales1 > $penales2) {
                $sql = "INSERT INTO semis (
                nropartido,
                posicion,
                id_equipo, 
                anio,
                nropartidocuarto  
                ) VALUES (
                $j,
                $i,
                $idEquipo1,
                $anio,
                $nropartidocuarto         
                )";
                $res = mysqli_query($link, $sql);
        }else {
            $sql = "INSERT INTO semis (
                nropartido,
                posicion,
                id_equipo, 
                anio,
                nropartidocuarto  
                ) VALUES (
                $j,
                $i,
                $idEquipo2,
                $anio,
                $nropartidocuarto         
                )";
            $res = mysqli_query($link, $sql);
        }
    }
}
mysqli_close($link);
