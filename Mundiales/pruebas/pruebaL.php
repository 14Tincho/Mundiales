<?php

include '../conexion.php';

$sql = "SELECT id_user, SUM(puntos) FROM prode GROUP BY id_user";
$rs = mysqli_query($link, $sql);

$sql = "SELECT id_user, SUM(puntos) FROM prodeoctavos GROUP BY id_user";
$res = mysqli_query($link, $sql);

while ($userFase = mysqli_fetch_assoc($rs) AND ($userOctavos = mysqli_fetch_assoc($res))) {
$id_userFa = $userFase['id_user'];
$fase = $userFase['SUM(puntos)'];
$caca = array($id_userFa,$fase);

    $id_usuarioOct = $userOctavos['id_user'];
    $octavos = $userOctavos['SUM(puntos)'];

    // if (isset($caca[0])) {
    //     $id_userFa = $id_usuarioOct;
    //     $octavos === 0;
    //     var_dump("caca");
    // }

    if($caca[0] == $id_usuarioOct){
        array_push($caca, $octavos);
    }
    
    ?><pre><?php 
    print_r($caca);
    ?></pre><?php

};
?>