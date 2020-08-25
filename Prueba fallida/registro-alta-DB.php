<?php
if (!empty($errores)) {?>
    <div class="container text-center">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $errores;?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php
}else {
    include 'conexion.php';
    

    $sql = "INSERT INTO user (username, contrasena, email) VALUES 
    ('$usuario', '$password', '$email')";
    
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
        $usuario = '';
        $password = '';
        $password2 = '';
        $email = '';
    }
    mysqli_close($link);
}

