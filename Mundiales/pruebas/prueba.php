<?php

include '../conexion.php';

$sql = "SELECT 
fa.id_user,
SUM(fa.puntos),
SUM(o.puntos)
FROM
prode fa
LEFT JOIN prodeoctavos o ON o.id_user = fa.id_user
GROUP BY fa.id_user";


$rs = mysqli_query($link, $sql);

while ($puntosXusuario = mysqli_fetch_assoc($rs)) {

?><pre><?php 
print_r($puntosXusuario);
?></pre><?php 
};

?>