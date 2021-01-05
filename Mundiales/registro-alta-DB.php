<?php
if(!empty($errores)) {
    include 'errores.php';
}else {
    include 'conexion.php';
    $anio = ANO;
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
            $mensaje_usuario = 'No se pudo dar de alta el usuario. '
                . "(Error: $error_numero)";
            die($mensaje_usuario);
    }else {
        // RESCATO EL ID_USER DE LA TABLA USER
        $sql = "SELECT id_user FROM user WHERE email = '$email'";
        $res = mysqli_query($link, $sql);
        if (!$res) {
            date_default_timezone_set(ZONA_HORARIA);
            $fecha = date('d/m/Y H:i:s');
            $error_detalle = mysqli_error($link);
            $error_numero = mysqli_errno($link);
            $fh = fopen(ARCHIVO_LOG_ERRORES, 'a');
            fwrite($fh, "$fecha:\tError $error_numero\t$error_detalle\r\n");
            fclose($fh);
            $mensaje_usuario = 'No se encontro el usuario ya registrado. '
                . "(Error: $error_numero)";
            die($mensaje_usuario);
        }else {
            $userRegistrado = mysqli_fetch_assoc($res);
            $id_user = $userRegistrado['id_user'];


            // CREO UN REGISTRO EN BLANCO EN LA TABLA PRODE PARA PODER HACER CALCULOS EN EL ARCHIVO GUARDAR-POS-TOT.PHP
            $sql = "INSERT INTO prode (id_user, anio) VALUES ('$id_user', $anio)";
            $resp = mysqli_query($link, $sql);
            if (!$resp) {
                date_default_timezone_set(ZONA_HORARIA);
                $fecha = date('d/m/Y H:i:s');
                $error_detalle = mysqli_error($link);
                $error_numero = mysqli_errno($link);
                $fh = fopen(ARCHIVO_LOG_ERRORES, 'a');
                fwrite($fh, "$fecha:\tError $error_numero\t$error_detalle\r\n");
                fclose($fh);
                $mensaje_usuario = 'No se creo el registro en blanco en la tabla prode. '
                    . "(Error: $error_numero)";
                die($mensaje_usuario);
            }

            // CREO UN REGISTRO EN BLANCO EN LA TABLA PRODEOCTAVOS PARA PODER HACER CALCULOS EN EL ARCHIVO GUARDAR-POS-TOT.PHP
            $sql = "INSERT INTO prodeoctavos (id_user, anio) VALUES ('$id_user', $anio)";
            $resp = mysqli_query($link, $sql);
            if (!$resp) {
                date_default_timezone_set(ZONA_HORARIA);
                $fecha = date('d/m/Y H:i:s');
                $error_detalle = mysqli_error($link);
                $error_numero = mysqli_errno($link);
                $fh = fopen(ARCHIVO_LOG_ERRORES, 'a');
                fwrite($fh, "$fecha:\tError $error_numero\t$error_detalle\r\n");
                fclose($fh);
                $mensaje_usuario = 'No se creo el registro en blanco en la tabla prodeoctavos. '
                    . "(Error: $error_numero)";
                die($mensaje_usuario);
            }
            
            // CREO UN REGISTRO EN BLANCO EN LA TABLA PRODECUARTOS PARA PODER HACER CALCULOS EN EL ARCHIVO GUARDAR-POS-TOT.PHP
            $sql = "INSERT INTO prodecuartos (id_user, anio) VALUES ('$id_user', $anio)";
            $resp = mysqli_query($link, $sql);
            if (!$resp) {
                date_default_timezone_set(ZONA_HORARIA);
                $fecha = date('d/m/Y H:i:s');
                $error_detalle = mysqli_error($link);
                $error_numero = mysqli_errno($link);
                $fh = fopen(ARCHIVO_LOG_ERRORES, 'a');
                fwrite($fh, "$fecha:\tError $error_numero\t$error_detalle\r\n");
                fclose($fh);
                $mensaje_usuario = 'No se creo el registro en blanco en la tabla prodecuartos. '
                    . "(Error: $error_numero)";
                die($mensaje_usuario);
            }

            // CREO UN REGISTRO EN BLANCO EN LA TABLA PRODESEMIS PARA PODER HACER CALCULOS EN EL ARCHIVO GUARDAR-POS-TOT.PHP
            $sql = "INSERT INTO prodesemis (id_user, anio) VALUES ('$id_user', $anio)";
            $resp = mysqli_query($link, $sql);
            if (!$resp) {
                date_default_timezone_set(ZONA_HORARIA);
                $fecha = date('d/m/Y H:i:s');
                $error_detalle = mysqli_error($link);
                $error_numero = mysqli_errno($link);
                $fh = fopen(ARCHIVO_LOG_ERRORES, 'a');
                fwrite($fh, "$fecha:\tError $error_numero\t$error_detalle\r\n");
                fclose($fh);
                $mensaje_usuario = 'No se creo el registro en blanco en la tabla prodesemis. '
                    . "(Error: $error_numero)";
                die($mensaje_usuario);
            }

            // CREO UN REGISTRO EN BLANCO EN LA TABLA PRODEFINALES PARA PODER HACER CALCULOS EN EL ARCHIVO GUARDAR-POS-TOT.PHP
            $sql = "INSERT INTO prodefinales (id_user, anio) VALUES ('$id_user', $anio)";
            $resp = mysqli_query($link, $sql);
            if (!$resp) {
                date_default_timezone_set(ZONA_HORARIA);
                $fecha = date('d/m/Y H:i:s');
                $error_detalle = mysqli_error($link);
                $error_numero = mysqli_errno($link);
                $fh = fopen(ARCHIVO_LOG_ERRORES, 'a');
                fwrite($fh, "$fecha:\tError $error_numero\t$error_detalle\r\n");
                fclose($fh);
                $mensaje_usuario = 'No se creo el registro en blanco en la tabla prodefinales. '
                    . "(Error: $error_numero)";
                die($mensaje_usuario);
            }
            
            header('Location: login-derivar.php');
        }
    }
    mysqli_close($link);
}

