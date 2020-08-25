<?php
    include 'user-inicio-sesion.php';   
    include 'conexion.php';

    $prodeUser = "prode" . $id_user;
    $result = mysqli_query($link, "SHOW TABLES LIKE '$prodeUser'");
    
    if(mysqli_fetch_row($result) == true) {
        $sql = "DROP VIEW $prodeUser";
        $rs = mysqli_query($link, $sql);
    }
    
    mysqli_close($link);

    session_unset();
    session_destroy();

     header('Location: login-derivar.php');

