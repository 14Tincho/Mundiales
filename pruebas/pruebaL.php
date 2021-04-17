<?php

include '../conexion.php';

$anio = ANO;

// Sumo los puntos de todas las tablas que contengan prode
$sql = "SELECT id_user, SUM(puntos) FROM prode WHERE anio = $anio GROUP BY id_user";
$rsfa = mysqli_query($link, $sql);

$sql = "SELECT id_user, SUM(puntos) FROM prodeoctavos WHERE anio = $anio GROUP BY id_user";
$rsoc = mysqli_query($link, $sql);

$sql = "SELECT id_user, SUM(puntos) FROM prodecuartos WHERE anio = $anio GROUP BY id_user";
$rscu = mysqli_query($link, $sql);

$sql = "SELECT id_user, SUM(puntos) FROM prodesemis WHERE anio = $anio GROUP BY id_user";
$rsse = mysqli_query($link, $sql);

$sql = "SELECT id_user, SUM(puntos) FROM prodefinales WHERE anio = $anio GROUP BY id_user";
$rsfi = mysqli_query($link, $sql);


// Uniendo los resultados en un array por usuario
while ($userFase = mysqli_fetch_assoc($rsfa)
AND $userOctavos = mysqli_fetch_assoc($rsoc)
AND $userCuartos = mysqli_fetch_assoc($rscu)
AND $userSemis = mysqli_fetch_assoc($rsse)
AND $userFinales = mysqli_fetch_assoc($rsfi) 
){
$id_userFa = $userFase['id_user'];
$fase = $userFase['SUM(puntos)'];
$union = array($id_userFa,$fase);

$id_usuarioOct = $userOctavos['id_user'];
$octavos = $userOctavos['SUM(puntos)'];

$id_usuarioCua = $userCuartos['id_user'];
$cuartos = $userCuartos['SUM(puntos)'];

$id_usuarioSem = $userSemis['id_user'];
$semis = $userSemis['SUM(puntos)'];

$id_usuarioFin = $userFinales['id_user'];
$finales = $userFinales['SUM(puntos)'];


if($union[0] == $id_usuarioOct){
    array_push($union, $octavos);
}

if($union[0] == $id_usuarioCua){
    array_push($union, $cuartos);
}

if($union[0] == $id_usuarioSem){
    array_push($union, $semis);
}

if($union[0] == $id_usuarioFin){
    array_push($union, $finales);
}


// Calculo los puntos totales
$puntostotales = $union[1] + $union[2] + $union[3] + $union[4] + $union[5];

// Grabo la tabla de posiciones
$sql = "SELECT * FROM posiciontotales WHERE id_user = '$union[0]' AND anio = $anio;";
    $rs = mysqli_query($link,$sql);
    
    if (mysqli_num_rows($rs) == 1){
        $sql = "UPDATE posiciontotales 
            SET 
            puntosfases = $union[1],
            puntosoctavos = $union[2],
            puntoscuartos = $union[3],
            puntossemis = $union[4],
            puntosfinales = $union[5],
            puntostotales = $puntostotales
            WHERE 
            id_user = '$union[0]' AND anio = $anio;";
        $res = mysqli_query($link,$sql);    
    }else{
        $sql = "INSERT INTO
                posiciontotales(id_user, puntosfases, puntosoctavos, puntoscuartos, puntossemis, puntosfinales, puntostotales, anio) 
                VALUES
                ($union[0],
                $union[1],
                $union[2],
                $union[3],
                $union[4],
                $union[5],
                $puntostotales,
                $anio)";
        $rs = mysqli_query($link, $sql);
    }


?><pre><?php 
print_r($union);
?></pre><?php

};
?>