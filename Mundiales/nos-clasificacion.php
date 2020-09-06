<!-- Armado de la tabla de clasificaciones -->
<?php
include 'conexion.php';
$anio = ANO;

$sql = "DELETE FROM clasificacion WHERE anio = $anio";
$rs = mysqli_query($link, $sql);


$sql = "SELECT id_equipo1, id_equipo2, goles1, goles2 FROM partidos WHERE anio = $anio AND fase = 'F';";

$rs = mysqli_query($link, $sql);



while ($partido = mysqli_fetch_assoc($rs)) :
    $idEquipo1 = $partido['id_equipo1'];
    $idEquipo2 = $partido['id_equipo2'];
    $goles1 = $partido['goles1'];
    $goles2 = $partido['goles2'];

    // if (!empty($fixtureFase['goles1']) || $fixtureFase['goles1'] == "0") {
    //     $goles1 = $fixtureFase['goles1'];
    // }

 if ((!empty($goles1) || $goles1 == "0") && (!empty($goles2) || $goles2 == "0")){
// if ($goles2 !== NULL){
    
//------------- empate-----------------
    if ($goles1 == $goles2) {
// ------------Equipo1 empate----------
        $sql = "SELECT * FROM clasificacion WHERE id_equipo = $idEquipo1";
        $res = mysqli_query($link, $sql);
            if (mysqli_num_rows($res) !== 1 ) {
                $sql = "INSERT INTO clasificacion (
                    id_equipo,
                    pj,
                    pg, 
                    pe, 
                    pp, 
                    gf, 
                    gc, 
                    dg, 
                    pts,
                    anio
                    ) VALUES (
                    $idEquipo1,
                    1,
                    0,
                    1,
                    0,
                    $goles1,
                    $goles2,
                    0,
                    1,
                    $anio
                    )";
                $resu = mysqli_query($link, $sql);
            }else {
                $updateclas = mysqli_fetch_assoc($res);
                $pj  = $updateclas['pj'];
                $pe  = $updateclas['pe']; 
                $gf  = $updateclas['gf']; 
                $gc  = $updateclas['gc']; 
                $pts = $updateclas['pts'];

                $pj++;
                $pe++;
                $gf += $goles1;
                $gc += $goles2;
                $pts ++;

                $sql = "UPDATE clasificacion SET 
                pj=$pj,
                pe=$pe,
                gf=$gf,
                gc=$gc,
                pts=$pts
                WHERE id_equipo = $idEquipo1";
                $resu = mysqli_query($link, $sql);
            }

// ------------Equipo2 empate----------
            $sql = "SELECT * FROM clasificacion WHERE id_equipo = $idEquipo2";
            $res = mysqli_query($link, $sql);
            if (mysqli_num_rows($res) !== 1 ) {
            $sql = "INSERT INTO clasificacion (
                id_equipo,
                pj,
                pg, 
                pe, 
                pp, 
                gf, 
                gc, 
                dg, 
                pts,
                anio
                ) VALUES (
                $idEquipo2,
                1,
                0,
                1,
                0,
                $goles2,
                $goles1,
                0,
                1,
                $anio
                )";
            $resu = mysqli_query($link, $sql);
            }else {
                $updateclas = mysqli_fetch_assoc($res);
                $pj  = $updateclas['pj'];
                $pe  = $updateclas['pe']; 
                $gf  = $updateclas['gf']; 
                $gc  = $updateclas['gc']; 
                $pts = $updateclas['pts'];

                $pj++;
                $pe++;
                $gf += $goles2;
                $gc += $goles1;
                $pts ++;

                $sql = "UPDATE clasificacion SET 
                pj=$pj,
                pe=$pe,
                gf=$gf,
                gc=$gc,
                pts=$pts
                WHERE id_equipo = $idEquipo2";
                $resu = mysqli_query($link, $sql);
            }
    }
// -------cuando local gana------------
if ($goles1 > $goles2) {
    // ------------Equipo1 gana----------
            $sql = "SELECT * FROM clasificacion WHERE id_equipo = $idEquipo1";
            $res = mysqli_query($link, $sql);
            $difGoles = $goles1 - $goles2;
                if (mysqli_num_rows($res) !== 1 ) {
                    $sql = "INSERT INTO clasificacion (
                        id_equipo,
                        pj,
                        pg, 
                        pe, 
                        pp, 
                        gf, 
                        gc, 
                        dg, 
                        pts,
                        anio
                        ) VALUES (
                        $idEquipo1,
                        1,
                        1,
                        0,
                        0,
                        $goles1,
                        $goles2,
                        $difGoles,
                        3,
                        $anio
                        )";
                    $resu = mysqli_query($link, $sql);
                }else {
                    $updateclas = mysqli_fetch_assoc($res);
                    $pj  = $updateclas['pj'];
                    $pg  = $updateclas['pg']; 
                    $gf  = $updateclas['gf']; 
                    $gc  = $updateclas['gc']; 
                    $dg  = $updateclas['dg']; 
                    $pts = $updateclas['pts'];
    
                    $pj++;
                    $pg++;
                    $gf += $goles1;
                    $gc += $goles2;
                    $dg += $difGoles;
                    $pts += 3;
    
                    $sql = "UPDATE clasificacion SET 
                    pj=$pj,
                    pg=$pg,
                    gf=$gf,
                    gc=$gc,
                    dg=$dg,
                    pts=$pts
                    WHERE id_equipo = $idEquipo1";
                    $resu = mysqli_query($link, $sql);
                }
    // ------------Equipo2 pierde----------

            $sql = "SELECT * FROM clasificacion WHERE id_equipo = $idEquipo2";
            $res = mysqli_query($link, $sql);
            $difGoles = $goles2 - $goles1;
                    if (mysqli_num_rows($res) !== 1 ) {
                    $sql = "INSERT INTO clasificacion (
                        id_equipo,
                        pj,
                        pg, 
                        pe, 
                        pp, 
                        gf, 
                        gc, 
                        dg, 
                        pts,
                        anio
                        ) VALUES (
                        $idEquipo2,
                        1,
                        0,
                        0,
                        1,
                        $goles2,
                        $goles1,
                        $difGoles,
                        0,
                        $anio
                        )";
                    $resu = mysqli_query($link, $sql);
                }else {
                    $updateclas = mysqli_fetch_assoc($res);
                    $pj  = $updateclas['pj'];
                    $pp  = $updateclas['pp']; 
                    $gf  = $updateclas['gf']; 
                    $gc  = $updateclas['gc']; 
                    $dg  = $updateclas['dg']; 
    
                    $pj++;
                    $pp++;
                    $gf += $goles2;
                    $gc += $goles1;
                    $dg += $difGoles;
    
                    $sql = "UPDATE clasificacion SET 
                    pj=$pj,
                    pp=$pp,
                    gf=$gf,
                    gc=$gc,
                    dg=$dg
                    WHERE id_equipo = $idEquipo2";
                    $resu = mysqli_query($link, $sql);
        }
    }
    // -------cuando visitante gana------------
if ($goles1 < $goles2) {
    // ------------Equipo2 gana----------
            $sql = "SELECT * FROM clasificacion WHERE id_equipo = $idEquipo2";
            $res = mysqli_query($link, $sql);
            $difGoles = $goles2 - $goles1;
                    if (mysqli_num_rows($res) !== 1 ) {

                    $sql = "INSERT INTO clasificacion (
                        id_equipo,
                        pj,
                        pg, 
                        pe, 
                        pp, 
                        gf, 
                        gc, 
                        dg, 
                        pts,
                        anio
                        ) VALUES (
                        $idEquipo2,
                        1,
                        1,
                        0,
                        0,
                        $goles2,
                        $goles1,
                        $difGoles,
                        3,
                        $anio
                        )";
                    $resu = mysqli_query($link, $sql);
                }else {
                    $updateclas = mysqli_fetch_assoc($res);
                    $pj  = $updateclas['pj'];
                    $pg  = $updateclas['pg']; 
                    $gf  = $updateclas['gf']; 
                    $gc  = $updateclas['gc']; 
                    $dg  = $updateclas['dg']; 
                    $pts = $updateclas['pts'];
    
                    $pj++;
                    $pg++;
                    $gf += $goles2;
                    $gc += $goles1;
                    $dg += $difGoles;
                    $pts += 3;
    
                    $sql = "UPDATE clasificacion SET 
                    pj=$pj,
                    pg=$pg,
                    gf=$gf,
                    gc=$gc,
                    dg=$dg,
                    pts=$pts
                    WHERE id_equipo = $idEquipo2";
                    $resu = mysqli_query($link, $sql);
                }
    // ------------Equipo1 pierde----------

            $sql = "SELECT * FROM clasificacion WHERE id_equipo = $idEquipo1";
            $res = mysqli_query($link, $sql);
            $difGoles = $goles1 - $goles2;
                    if (mysqli_num_rows($res) !== 1 ) {
                    $sql = "INSERT INTO clasificacion (
                        id_equipo,
                        pj,
                        pg, 
                        pe, 
                        pp, 
                        gf, 
                        gc, 
                        dg, 
                        pts,
                        anio
                        ) VALUES (
                        $idEquipo1,
                        1,
                        0,
                        0,
                        1,
                        $goles1,
                        $goles2,
                        $difGoles,
                        0,
                        $anio
                        )";
                    $resu = mysqli_query($link, $sql);
                }else {
                    $updateclas = mysqli_fetch_assoc($res);
                    $pj  = $updateclas['pj'];
                    $pp  = $updateclas['pp']; 
                    $gf  = $updateclas['gf']; 
                    $gc  = $updateclas['gc']; 
                    $dg  = $updateclas['dg']; 
                    $pj++;
                    $pp++;
                    $gf += $goles1;
                    $gc += $goles2;
                    $dg += $difGoles;
                    $sql = "UPDATE clasificacion SET 
                    pj=$pj,
                    pp=$pp,
                    gf=$gf,
                    gc=$gc,
                    dg=$dg
                    WHERE id_equipo = $idEquipo1";
                    $resu = mysqli_query($link, $sql);
        }
    }
}


endwhile;


mysqli_close($link);