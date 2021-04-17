<?php

// ---------------USUARIO-------------
// --------existencia y logitud------
if ($usuario === '') {
    $errores .= 'El usuario es obligatorio.<br>';
} elseif(strlen($usuario) < 3) {
    $errores .= 'El usuario debe contener al menos 3 caracteres.<br>';
}
// --------usuario repetido------
include 'conexion.php';
$sql = "SELECT * FROM user WHERE username = '$usuario';";
$rs = mysqli_query($link,$sql);
mysqli_close($link);

if (mysqli_num_rows($rs) >= 1){
    $errores .= "El nombre de usuario '$usuario' ya existe.<br>"; 
}

// ---------------PASSWORD--------------
// --------existencia y logitud------

if ($password === '') {
    $errores .= 'El password es obligatorio.<br>';
} 
elseif(strlen($password) < 8) {
    $errores .= 'El password debe contener al menos 8 caracter.<br>';
}

// --------PASSWORD 2 DEBE SER IGUAL AL PASSWORD------
if ($password2 != $password) {
    $errores .= 'Los passwords deben coincidir.<br>';
} 

// ---------------EMAIL--------------
// --------existencia y logitud------

if ($email === '') {
    $errores .= 'El email es obligatorio.<br>';
} 
elseif(strlen($email) < 6) {
    $errores .= 'El email debe contener al menos 6 caracter.<br>';
}
// --------email repetido------
include 'conexion.php';
$sql = "SELECT * FROM user WHERE email = '$email';";
$rs = mysqli_query($link,$sql);
mysqli_close($link);

if (mysqli_num_rows($rs) >= 1){
    $errores .= "El email '$email' ya existe.<br>"; 
}
