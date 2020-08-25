<?php
if(!empty($errores)) {
    include 'errores.php';
}else {
    include 'conexion.php';
    
    $pass_cifrado = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (username, contrasena, email) VALUES 
    ('$usuario', '$pass_cifrado', '$email')";
    
    $rs = mysqli_query($link, $sql);

    if (!$rs) {
            date_default_timezone_set(ZONA_HORARIA);
            $fecha = date('d/m/Y H:i:s');
            $error_detalle = mysqli_error($link);
            $error_numero = mysqli_errno($link);
            $fh = fopen(ARCHIVO_LOG_ERRORES, 'a');
            fwrite($fh, "$fecha:\tError $error_numero\t$error_detalle\r\n");
            fclose($fh);
            $mensaje_usuario = 'Se produjo un error al intentar ejecutar la consulta en el servidor de bases de datos. '
                . "(Error: $error_numero)";
            die($mensaje_usuario);
    }else {
        header('Location: login-derivar.php');
    }
    mysqli_close($link);
}

