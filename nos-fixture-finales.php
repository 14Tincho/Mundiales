<?php

require 'conexion.php';
$anio = ANO;

$sql = "DELETE FROM finales WHERE anio = $anio";
$rs = mysqli_query($link, $sql);


// voy barriendo tabla semis y $h es igual nroPartidos
$i = 0;
$j = 62;
for ($h=61; $h <= 62; $h++) { 


$sql = "SELECT
s.id_equipo,
s.nropartido,
s.goles,
s.penales,
s.posicion,
s.anio

FROM
semis s
LEFT JOIN equipos e ON e.id_equipo = s.id_equipo
WHERE s.anio = $anio AND s.nropartido = $h
ORDER BY s.posicion";

$rs = mysqli_query($link, $sql);

if (!$rs) {
    header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');
    die;
}


// recorremos de a 2 registros guardando los datos de cada equipo
$k = 0;
while ($semis = mysqli_fetch_assoc($rs)) {
    $k++;
    if ($k == 1) {
        $idEquipo1 = $semis['id_equipo'];
        $goles1 = $semis['goles'];
        $penales1 = $semis['penales'];
    }
    if ($k == 2) {
        $idEquipo2 = $semis['id_equipo'];
        $goles2 = $semis['goles'];
        $penales2 = $semis['penales'];
    }
    $nropartidosemi = $semis['nropartido'];    
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

        // equipo para 3er puesto
        $sql = "INSERT INTO finales (
        nropartido,
        posicion,
        id_equipo, 
        anio,
        nropartidosemi 
        ) VALUES (
        $j,
        $i,
        $idEquipo2,
        $anio,
        $nropartidosemi        
        )";
        $res = mysqli_query($link, $sql);

        // equipo para 1er puesto
        $j++;
        $sql = "INSERT INTO finales (
            nropartido,
            posicion,
            id_equipo, 
            anio,
            nropartidosemi 
            ) VALUES (
            $j,
            $i,
            $idEquipo1,
            $anio,
            $nropartidosemi        
            )";
            $res = mysqli_query($link, $sql);
        $j--;

}elseif ($goles1 < $goles2) {
        
         // equipo para 3er puesto
        $sql = "INSERT INTO finales (
        nropartido,
        posicion,
        id_equipo, 
        anio,
        nropartidosemi 
        ) VALUES (
        $j,
        $i,
        $idEquipo1,
        $anio,
        $nropartidosemi        
        )";
    $res = mysqli_query($link, $sql);

        // equipo para 1er puesto
        $j++;
        $sql = "INSERT INTO finales (
        nropartido,
        posicion,
        id_equipo, 
        anio,
        nropartidosemi 
        ) VALUES (
        $j,
        $i,
        $idEquipo2,
        $anio,
        $nropartidosemi        
        )";
    $res = mysqli_query($link, $sql);
    $j--;
}else{
        if ($penales1 > $penales2) {
              
               // equipo para 3er puesto
              $sql = "INSERT INTO finales (
                nropartido,
                posicion,
                id_equipo, 
                anio,
                nropartidosemi 
                ) VALUES (
                $j,
                $i,
                $idEquipo2,
                $anio,
                $nropartidosemi        
                )";
                $res = mysqli_query($link, $sql);

             // equipo para 1er puesto
             $j++;
             $sql = "INSERT INTO finales (
                nropartido,
                posicion,
                id_equipo, 
                anio,
                nropartidosemi 
                ) VALUES (
                $j,
                $i,
                $idEquipo1,
                $anio,
                $nropartidosemi        
                )";
                $res = mysqli_query($link, $sql);
                $j--;

        }else {
            
            // equipo para 3er puesto
            $sql = "INSERT INTO finales (
                nropartido,
                posicion,
                id_equipo, 
                anio,
                nropartidosemi 
                ) VALUES (
                $j,
                $i,
                $idEquipo1,
                $anio,
                $nropartidosemi        
                )";
            $res = mysqli_query($link, $sql);

            // equipo para 1er puesto
            $j++;
            $sql = "INSERT INTO finales (
                nropartido,
                posicion,
                id_equipo, 
                anio,
                nropartidosemi 
                ) VALUES (
                $j,
                $i,
                $idEquipo2,
                $anio,
                $nropartidosemi        
                )";
            $res = mysqli_query($link, $sql);
            $j--;
        }
    }
}
mysqli_close($link);