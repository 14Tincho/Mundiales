<?php
require_once 'config.php';
    @ $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE_NAME);
    mysqli_set_charset($link, DB_CHARSET);
    
    if(!$link) {
        header('Location: ' . PAGINA_ERROR . '?error=1&detalle=Error en la conexión');
        die;
    }