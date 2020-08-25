<!-- Armado de la tabla de clasificaciones -->
<?php
include 'conexion.php';
$anio = ANO;


$sql = "SELECT id_equipo1, id_equipo2, goles1, goles2 FROM partidos WHERE anio = $anio AND fase = 'F';";

$rs = mysqli_query($link, $sql);



while ($partido = mysqli_fetch_assoc($rs)) :
    $idEquipo1 = $partido['id_equipo1'];
    $idEquipo2 = $partido['id_equipo2'];
    $goles1 = $partido['goles1'];
    $goles2 = $partido['goles2'];
    
//------------- empate-----------------
    if ($goles1 == $goles2 ) {
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
                    pts
                    ) VALUES (
                    $idEquipo1,
                    1,
                    0,
                    1,
                    0,
                    $goles1,
                    $goles2,
                    0,
                    1
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
    }

    endwhile;


mysqli_close($link);




