<?php

include '../conexion.php';

$sql = "SELECT
fa.id_user,
SUM(fa.puntos),
SUM(o.puntos),
SUM(c.puntos),
SUM(s.puntos),
SUM(fi.puntos)
FROM 
prode fa
LEFT JOIN prodeoctavos o ON fa.id_user = o.id_user
LEFT JOIN prodecuartos c ON fa.id_user = c.id_user
LEFT JOIN prodesemis s ON fa.id_user = s.id_user
LEFT JOIN prodefinales fi ON fa.id_user = fi.id_user
GROUP BY fa.id_user;";
$rs = mysqli_query($link, $sql);


while ($puntosXusuario = mysqli_fetch_assoc($rs)) {
    $id_userFa = $puntosXusuario['id_user'];
    $fase = $puntosXusuario['SUM(fa.puntos)'];
};
$sql = "SELECT id_user, SUM(puntos) FROM prodeoctavos GROUP BY id_user";
$res = mysqli_query($link, $sql);

    while($userOctavos = mysqli_fetch_assoc($res)){
        $octavos = $userOctavos['SUM(puntos)'];
        $id_usuarioOct = $userOctavos['id_user'];
    // array_push($caca, $octavos);
};
$caca = array("keyUsr" => $id_userFa,$fase,$octavos);

    // $id_usuarioOct = $userOctavos['id_user'];
    // $octavos = $userOctavos['SUM(puntos)'];
    // foreach ($userOctavos as $octavos) {
        
        // array_push($caca, $octavos);
    // }
    ?><pre><?php 
    print_r($caca);
    ?></pre><?php

    
    // $sql = "SELECT
    // c.id_cuarto,
    // c.nropartido,
    // c.posicion,
    // c.goles,
    // c.penales,
    // c.anio,
    // e.nombre equipo
    
    // FROM
    // cuartos c
    // LEFT JOIN equipos e ON e.id_equipo = c.id_equipo
    // WHERE c.anio = $anio
    // ORDER BY c.nropartido, c.posicion;
    // ";
    


?>