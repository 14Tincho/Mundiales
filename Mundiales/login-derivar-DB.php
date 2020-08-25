<?php
if(!empty($errores)) {
    include 'errores.php';
}else {
    include 'conexion.php';
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $rs = mysqli_query($link, $sql);
    $sesionUsuario = mysqli_fetch_assoc($rs);
    $id_user = $sesionUsuario['id_user'];
    mysqli_close($link);
    session_start();

    $email = '';
    $password = '';
    if ($nivel == 1) {
    header('Location: nos-index.php');
   }else if (mysqli_num_rows($rs) === 1) {
    $_SESSION['id_user'] = $id_user;
    header('Location: user-index.php');
    } 
}

    
