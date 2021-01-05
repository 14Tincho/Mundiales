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

    // ----------------------------------------------------
    // ----------------------------------------------------
    // ------------CALCULO PUNTOS DE LA FASE---------------
    // ----------------------------------------------------
    // ----------------------------------------------------
    $sql = "SELECT * FROM prode WHERE anio = $anio;";
    $rs = mysqli_query($link,$sql);

    
    while ($array_prode = mysqli_fetch_assoc($rs)) {

        $id_prode = $array_prode['id_prode'];
        $id_partido = $array_prode['id_partido'];
        $lev = $array_prode['lev'];

        if ($id_partido == 0) {
            goto abajo1;
        }

        $sql = "SELECT goles1 , goles2 FROM partidos WHERE id_partido = $id_partido;";
        $res = mysqli_query($link,$sql);


        // CALCULO EL RESULTADO DEL PARTIDO
        $array_partidos = mysqli_fetch_assoc($res);

        $goles1 = $array_partidos['goles1'];
        $goles2 = $array_partidos['goles2'];




        if ($goles1 > $goles2) {
            $levP = "L";
        }elseif ($goles1 == $goles2) {
            $levP = "E";            
        }else {
            $levP = "V";
        }
        
        // COMPARO EL RESULTADO REAL CON EL RESULTADO DEL USUARIO
        if ($lev == $levP) {
            $puntosUsuario = $puntajefases;
        }else {
            $puntosUsuario = 0;
        }
        

        // ACTUALIZO TABLA PRODE CON EL RESULTADO DEL USUARIO, SUERTE CHAVAL!!
        $sql = "UPDATE prode SET puntos = $puntosUsuario WHERE id_prode = '$id_prode';";
        $res = mysqli_query($link,$sql);

        abajo1:;
    }
    die;

    // ----------------------------------------------------
    // ----------------------------------------------------
    // ------------CALCULO PUNTOS DE OCTAVOS---------------
    // ----------------------------------------------------
    // ----------------------------------------------------

    $sql = "SELECT * FROM prodeoctavos WHERE anio = $anio;";
    $rs = mysqli_query($link,$sql);

    
    while ($array_prodeoctavos = mysqli_fetch_assoc($rs)) {

        $id_prodeoctavos = $array_prodeoctavos['id_prodeoctavos'];
        $nropartido = $array_prodeoctavos['nropartido'];
        $lv = $array_prodeoctavos['lv'];

        $sql = "SELECT goles, penales, posicion FROM octavos WHERE nropartido = $nropartido;";
        $res = mysqli_query($link,$sql);

        while ($array_octavos = mysqli_fetch_assoc($res)) {
            $posicion = $array_octavos['posicion'];
            if ($posicion == 1) {
                $goles1 = $array_octavos['goles'];
                $penales1 = $array_octavos['penales'];
            }else {
                $goles2 = $array_octavos['goles'];
                $penales2 = $array_octavos['penales'];
            }
        }       

        // CALCULO EL RESULTADO DEL PARTIDO

        if ($goles1 > $goles2) {
            $lvO = "L";
        }elseif ($goles1 == $goles2) {
            if ($penales1 > $penales2) {
                $lvO = "L";
            }else {
                $lvO = "V";
            }        
        }else {
            $lvO = "V";
        }

        // COMPARO EL RESULTADO REAL CON EL RESULTADO DEL USUARIO
        if ($lv == $lvO) {
            $puntosUsuario = $puntajeoctavos;
        }else {
            $puntosUsuario = 0;
        }

        // ACTUALIZO TABLA PRODEOCTAVOS CON EL RESULTADO DEL USUARIO, SUERTE CHAVAL!!
        $sql = "UPDATE prodeoctavos SET puntos = $puntosUsuario WHERE id_prodeoctavos = '$id_prodeoctavos';";

    }


    // ----------------------------------------------------
    // ----------------------------------------------------
    // ------------CALCULO PUNTOS DE CUARTOS---------------
    // ----------------------------------------------------
    // ----------------------------------------------------

    $sql = "SELECT * FROM prodecuartos WHERE anio = $anio;";
    $rs = mysqli_query($link,$sql);

    
    while ($array_prodecuartos = mysqli_fetch_assoc($rs)) {

        $id_prodecuartos = $array_prodecuartos['id_prodecuartos'];
        $nropartido = $array_prodecuartos['nropartido'];
        $lv = $array_prodecuartos['lv'];

        $sql = "SELECT goles, penales, posicion FROM cuartos WHERE nropartido = $nropartido;";
        $res = mysqli_query($link,$sql);

        while ($array_cuartos = mysqli_fetch_assoc($res)) {
            $posicion = $array_cuartos['posicion'];
            if ($posicion == 1) {
                $goles1 = $array_cuartos['goles'];
                $penales1 = $array_cuartos['penales'];
            }else {
                $goles2 = $array_cuartos['goles'];
                $penales2 = $array_cuartos['penales'];
            }
        }       

        // CALCULO EL RESULTADO DEL PARTIDO

        if ($goles1 > $goles2) {
            $lvC = "L";
        }elseif ($goles1 == $goles2) {
            if ($penales1 > $penales2) {
                $lvC = "L";
            }else {
                $lvC = "V";
            }        
        }else {
            $lvC = "V";
        }

        // COMPARO EL RESULTADO REAL CON EL RESULTADO DEL USUARIO
        if ($lv == $lvC) {
            $puntosUsuario = $puntajecuartos;
        }else {
            $puntosUsuario = 0;
        }

        // ACTUALIZO TABLA PRODECUARTOS CON EL RESULTADO DEL USUARIO, SUERTE CHAVAL!!
        $sql = "UPDATE prodecuartos SET puntos = $puntosUsuario WHERE id_prodecuartos = '$id_prodecuartos';";

    }




    // ----------------------------------------------------
    // ----------------------------------------------------
    // ------------CALCULO PUNTOS DE SEMIS---------------
    // ----------------------------------------------------
    // ----------------------------------------------------

    $sql = "SELECT * FROM prodesemis WHERE anio = $anio;";
    $rs = mysqli_query($link,$sql);

    
    while ($array_prodesemis = mysqli_fetch_assoc($rs)) {

        $id_prodesemis = $array_prodesemis['id_prodesemis'];
        $nropartido = $array_prodesemis['nropartido'];
        $lv = $array_prodesemis['lv'];

        $sql = "SELECT goles, penales, posicion FROM semis WHERE nropartido = $nropartido;";
        $res = mysqli_query($link,$sql);

        while ($array_semis = mysqli_fetch_assoc($res)) {
            $posicion = $array_semis['posicion'];
            if ($posicion == 1) {
                $goles1 = $array_semis['goles'];
                $penales1 = $array_semis['penales'];
            }else {
                $goles2 = $array_semis['goles'];
                $penales2 = $array_semis['penales'];
            }
        }       

        // CALCULO EL RESULTADO DEL PARTIDO

        if ($goles1 > $goles2) {
            $lvS = "L";
        }elseif ($goles1 == $goles2) {
            if ($penales1 > $penales2) {
                $lvS = "L";
            }else {
                $lvS = "V";
            }        
        }else {
            $lvS = "V";
        }

        // COMPARO EL RESULTADO REAL CON EL RESULTADO DEL USUARIO
        if ($lv == $lvS) {
            $puntosUsuario = $puntajesemis;
        }else {
            $puntosUsuario = 0;
        }

        // ACTUALIZO TABLA PRODESEMIS CON EL RESULTADO DEL USUARIO, SUERTE CHAVAL!!
        $sql = "UPDATE prodesemis SET puntos = $puntosUsuario WHERE id_prodesemis = '$id_prodesemis';";

    }


    // ----------------------------------------------------
    // ----------------------------------------------------
    // ------------CALCULO PUNTOS DE FINALES---------------
    // ----------------------------------------------------
    // ----------------------------------------------------

    $sql = "SELECT * FROM prodefinales WHERE anio = $anio;";
    $rs = mysqli_query($link,$sql);

    $fi = 0;
    while ($array_prodefinales = mysqli_fetch_assoc($rs)) {
        $fi++;
        $id_prodefinales = $array_prodefinales['id_prodefinales'];
        $nropartido = $array_prodefinales['nropartido'];
        $lv = $array_prodefinales['lv'];

        $sql = "SELECT goles, penales, posicion FROM finales WHERE nropartido = $nropartido;";
        $res = mysqli_query($link,$sql);

        while ($array_finales = mysqli_fetch_assoc($res)) {
            $posicion = $array_finales['posicion'];
            if ($posicion == 1) {
                $goles1 = $array_finales['goles'];
                $penales1 = $array_finales['penales'];
            }else {
                $goles2 = $array_finales['goles'];
                $penales2 = $array_finales['penales'];
            }
        }       

        // CALCULO EL RESULTADO DEL PARTIDO

        if ($goles1 > $goles2) {
            $lvFi = "L";
        }elseif ($goles1 == $goles2) {
            if ($penales1 > $penales2) {
                $lvFi = "L";
            }else {
                $lvFi = "V";
            }        
        }else {
            $lvFi = "V";
        }

        // COMPARO EL RESULTADO REAL CON EL RESULTADO DEL USUARIO

        if ($lv == $lvFi) {
            if ($i == 1) {
                $puntosUsuario = $puntajetercer;
            }else {
                $puntosUsuario = $puntajefinal;
            }
        }else {
            $puntosUsuario = 0;
        }

        

        // ACTUALIZO TABLA PRODEFINALES CON EL RESULTADO DEL USUARIO, SUERTE CHAVAL!!
        $sql = "UPDATE prodefinales SET puntos = $puntosUsuario WHERE id_prodefinales = '$id_prodefinales';";

    }

    // ----------------------------------------------------
    // ----------------------------------------------------
    // -----LLENO LA TABLA POSICION TOTAL POR USUARIO------
    // ----------------------------------------------------
    // ----------------------------------------------------



// Sumo los puntos de todas las tablas que contengan prode
$sql = "SELECT id_user, SUM(puntos) FROM prode WHERE anio = $anio GROUP BY id_user";
$rsfa = mysqli_query($link, $sql);

$sql = "SELECT id_user, SUM(puntos) FROM prodeoctavos WHERE anio = $anio GROUP BY id_user";
$rsoc = mysqli_query($link, $sql);

$sql = "SELECT id_user, SUM(puntos) FROM prodecuartos WHERE anio = $anio GROUP BY id_user";
$rscu = mysqli_query($link, $sql);

$sql = "SELECT id_user, SUM(puntos) FROM prodesemis WHERE anio = $anio GROUP BY id_user";
$rsse = mysqli_query($link, $sql);

$sql = "SELECT id_user, SUM(puntos) FROM prodefinales WHERE anio = $anio GROUP BY id_user";
$rsfi = mysqli_query($link, $sql);


// Uniendo los resultados en un array por usuario
while ($userFase = mysqli_fetch_assoc($rsfa)
AND $userOctavos = mysqli_fetch_assoc($rsoc)
AND $userCuartos = mysqli_fetch_assoc($rscu)
AND $userSemis = mysqli_fetch_assoc($rsse)
AND $userFinales = mysqli_fetch_assoc($rsfi) 
){
$id_userFa = $userFase['id_user'];
$fase = $userFase['SUM(puntos)'];
$union = array($id_userFa,$fase);

$id_usuarioOct = $userOctavos['id_user'];
$octavos = $userOctavos['SUM(puntos)'];

$id_usuarioCua = $userCuartos['id_user'];
$cuartos = $userCuartos['SUM(puntos)'];

$id_usuarioSem = $userSemis['id_user'];
$semis = $userSemis['SUM(puntos)'];

$id_usuarioFin = $userFinales['id_user'];
$finales = $userFinales['SUM(puntos)'];


if($union[0] == $id_usuarioOct){
    array_push($union, $octavos);
}

if($union[0] == $id_usuarioCua){
    array_push($union, $cuartos);
}

if($union[0] == $id_usuarioSem){
    array_push($union, $semis);
}

if($union[0] == $id_usuarioFin){
    array_push($union, $finales);
}


// Calculo los puntos totales
$puntostotales = $union[1] + $union[2] + $union[3] + $union[4] + $union[5];

// Grabo la tabla de posiciones
$sql = "SELECT * FROM posiciontotales WHERE id_user = '$union[0]' AND anio = $anio;";
    $rs = mysqli_query($link,$sql);
    
    if (mysqli_num_rows($rs) == 1){
        $sql = "UPDATE posiciontotales 
            SET 
            puntosfases = $union[1],
            puntosoctavos = $union[2],
            puntoscuartos = $union[3],
            puntossemis = $union[4],
            puntosfinales = $union[5],
            puntostotales = $puntostotales
            WHERE 
            id_user = '$union[0]' AND anio = $anio;";
        $res = mysqli_query($link,$sql);    
    }else{
        $sql = "INSERT INTO
                posiciontotales(id_user, puntosfases, puntosoctavos, puntoscuartos, puntossemis, puntosfinales, puntostotales, anio) 
                VALUES
                ($union[0],
                $union[1],
                $union[2],
                $union[3],
                $union[4],
                $union[5],
                $puntostotales,
                $anio)";
        $res = mysqli_query($link, $sql);
    }
};
    mysqli_close($link);
    
?>