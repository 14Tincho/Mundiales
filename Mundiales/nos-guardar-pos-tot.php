<?php
    include 'conexion.php';
    $anio = ANO;

    // AVERIGUANDO PUNTAJE SEGUN LA INSTANCIA
    $sql = "SELECT * FROM puntaje WHERE anio = $anio;";
    $rs = mysqli_query($link,$sql);

    if (mysqli_num_rows($rs) != 1){
        header('Location: pagina-error.php?error=2 & detalle=No se encontraron los puntajes');
        die;
    }

    $array_puntaje = mysqli_fetch_assoc($rs);
    $puntajefases = $array_puntaje['puntajefases'];
    $puntajeoctavos = $array_puntaje['puntajeoctavos'];
    $puntajecuartos = $array_puntaje['puntajecuartos'];
    $puntajesemis = $array_puntaje['puntajesemis'];
    $puntajetercer = $array_puntaje['puntajetercer'];
    $puntajefinal = $array_puntaje['puntajefinal'];

    
    // CALCULO PUNTO DE LA FASE
    $sql = "SELECT * FROM prode WHERE anio = $anio;";
    $rs = mysqli_query($link,$sql);










    // ACTUALIZO O INSERTO EN TABLA DE POSICIONES
    $sql = "SELECT * FROM posiciontotales WHERE id_user = '$usuario' AND anio = $anio;";
    $rs = mysqli_query($link,$sql);
    
    if (mysqli_num_rows($rs) == 1){
        $sql = "UPDATE posiciontotales 
            SET 
            puntosfases = $puntosfases,
            puntosoctavos = $puntosoctavos,
            puntoscuartos = $puntoscuartos,
            puntossemis = $puntossemis,
            puntosfinales = $puntosfinales,
            puntostotales = $puntostotales
            WHERE 
            id_user = '$usuario' AND anio = $anio;";
        $rs = mysqli_query($link,$sql);    
    }else{
        $sql = "INSERT INTO
                posiciontotales(id_user, puntosfases, puntosoctavos, puntoscuartos, puntossemis, puntosfinales, puntostotales, anio) 
                VALUES
                ($usuario,
                $puntosfases,
                $puntosoctavos,
                $puntoscuartos,
                $puntossemis,
                $puntosfinales,
                $puntostotales,
                $anio)";
        $rs = mysqli_query($link, $sql);
    }

    mysqli_close($link);
    
?>