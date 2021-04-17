<?php
    include 'user-inicio-sesion.php';   
    include 'conexion.php';

    //------------ Borra vista de fase--------------
    $nombreView = "prode" . $id_user;
    $result = mysqli_query($link, "SHOW TABLES LIKE '$nombreView'");
    
    if(mysqli_fetch_row($result) == true) {
        $sql = "DROP VIEW $nombreView";
        $rs = mysqli_query($link, $sql);
    }


    //------------ Borra vista de prode octavos--------------
    $nombreView = "prodeoctavos" . $id_user;
    $result = mysqli_query($link, "SHOW TABLES LIKE '$nombreView'");
    
    if(mysqli_fetch_row($result) == true) {
        $sql = "DROP VIEW $nombreView";
        $rs = mysqli_query($link, $sql);
    }


    //------------ Borra vista de prode cuartos--------------
    $nombreView = "prodecuartos" . $id_user;
    $result = mysqli_query($link, "SHOW TABLES LIKE '$nombreView'");
    
    if(mysqli_fetch_row($result) == true) {
        $sql = "DROP VIEW $nombreView";
        $rs = mysqli_query($link, $sql);
    }


    //------------ Borra vista de prode semis--------------
    $nombreView = "prodesemis" . $id_user;
    $result = mysqli_query($link, "SHOW TABLES LIKE '$nombreView'");
    
    if(mysqli_fetch_row($result) == true) {
        $sql = "DROP VIEW $nombreView";
        $rs = mysqli_query($link, $sql);
    }


    //------------ Borra vista de prode finales--------------
    $nombreView = "prodefinales" . $id_user;
    $result = mysqli_query($link, "SHOW TABLES LIKE '$nombreView'");
    
    if(mysqli_fetch_row($result) == true) {
        $sql = "DROP VIEW $nombreView";
        $rs = mysqli_query($link, $sql);
    }
    

    mysqli_close($link);

    session_unset();
    session_destroy();

     header('Location: login-derivar.php');

