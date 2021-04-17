<?php

// ---------------NOMBRE--------------

// --------existencia y logitud------
if ($nombre === '') {
    $errores .= 'El nombre es obligatorio.<br>';
} elseif(strlen($nombre) < 3) {
    $errores .= 'El nombre debe contener al menos 3 caracteres.<br>';
}
// --------nombre repetido------
include 'conexion.php';
$sql = "SELECT * FROM equipos WHERE nombre = '$nombre';";
$rs = mysqli_query($link,$sql);
mysqli_close($link);

if (mysqli_num_rows($rs) >= 1){
    $errores .= "'$nombre' ya existe.<br>"; 
}



// ---------------GRUPO--------------
// --------existencia y logitud------

if ($grupo === '') {
    $errores .= 'El grupo es obligatorio.<br>';
} 
elseif(strlen($grupo) != 1) {
    $errores .= 'El grupo debe contener 1 caracter.<br>';
}
elseif ($grupo < "A" || $grupo > "H") {
     $errores .= 'El grupo debe contener estos caracteres A, B, C, D, E, F, G, H.<br>';
}

// --------grupo repetido mas de 4------
include 'conexion.php';
$sql = "SELECT * FROM equipos WHERE grupo = '$grupo';";
$rs = mysqli_query($link,$sql);
mysqli_close($link);
if (mysqli_num_rows($rs) >= 4){
    $errores .= "Ya existen 4 equipos en el grupo '$grupo'.<br>"; 
}





// ---------------POSICION--------------
// --------existencia y logitud------
if ($posicion === '') {
    $errores .= 'La posicion es obligatoria.<br>';
} 
elseif(strlen($posicion) != 1) {
    $errores .= 'La posicion debe contener 1 caracter.<br>';
}
elseif ($posicion < 1 || $posicion > 4) {
    $errores .= 'La posicion debe ser de 1 a 4.<br>';
}

// --------existencia de la posicion dentro del grupo------
include 'conexion.php';
$sql = "SELECT * FROM equipos WHERE grupo = '$grupo' AND posicion = $posicion;";
$rs = mysqli_query($link,$sql);
mysqli_close($link);
if (mysqli_num_rows($rs) >= 1){
    $errores .= "La posicion $posicion ya existe en el grupo '$grupo'.<br>"; 
}
