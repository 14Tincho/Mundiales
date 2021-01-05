<?php

include '../conexion.php';

$sql = "SELECT id_user, SUM(puntos) FROM prode GROUP BY id_user";
$rs = mysqli_query($link, $sql);


while ($puntosXusuario = mysqli_fetch_assoc($rs)) {
    $array1 = array($puntosXusuario['id_user'], $puntosXusuario['SUM(puntos)']);
      
};

?><pre><?php 
print_r($array1);
?></pre><?php




$sql = "SELECT id_user, SUM(puntos) FROM prodeoctavos GROUP BY id_user";
$res = mysqli_query($link, $sql);
while ($puntosXusuarioO = mysqli_fetch_assoc($res)) {

    $array2 = array("iduser" => $puntosXusuarioO['id_user'], $puntosXusuarioO['SUM(puntos)']);
   

};

?><pre><?php 
    print_r($array2);
    ?></pre><?php
    
    

    


   
    $caca = array_merge_recursive ($array1,$array2);


?><pre><?php 
    print_r($caca);
    ?></pre><?php



    die;
?>




