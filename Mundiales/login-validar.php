<?php

/* --------login incorrecto--------*/
include 'conexion.php';

// $pass_cifrado = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM user WHERE email = '$email';";

$rs = mysqli_query($link,$sql);
mysqli_close($link);

if (mysqli_num_rows($rs) !== 1){
    $errores .= "El email no existe. Si aun no estas registrado puedes hacerlo.<br>";
} 
else {
    $loginDerivar = mysqli_fetch_assoc($rs);
    $hash = $loginDerivar['contrasena'];
        if (password_verify($password, $hash)) {
            $nivel = $loginDerivar['nivel'];   
        } else {
            $errores .= "Contraseña incorrecta.<br>";
        }      
}

