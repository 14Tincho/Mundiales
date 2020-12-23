<?php
include "conexion.php";
$sql = "SELECT SUM(puntos), id_user FROM prode GROUP BY id_user;";
$res = mysqli_query($link,$sql);

    $array_prode = mysqli_fetch_assoc($res);
    $id_user = $array_prode['id_user'];
    $puntos = $array_prode['SUM(puntos)'];

?><pre><?php
var_dump($id_user);
var_dump($puntos);
die;
?></pre><?php
