<?php
    include 'user-inicio-sesion.php';
    include 'conexion.php';
    $errores = '';
    $anio = ANO;          

        $sql = "SELECT
        p.partido,
        p.id_partido,
        p.goles1,
        p.goles2,
        e.grupo,
        e.nombre equipo1,
        eq.nombre equipo2
        
        FROM
        partidos p
        LEFT JOIN equipos e ON e.id_equipo = p.id_equipo1
        LEFT JOIN equipos eq ON eq.id_equipo = p.id_equipo2
        WHERE p.fase ='F' AND p.anio = $anio 
        ORDER BY e.grupo, p.partido";
        
        $rs = mysqli_query($link, $sql);
        if (!$rs) {
            header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');
            die;
        }
        mysqli_close($link);
        if (mysqli_num_rows($rs) == 0 ) {
            header('Location: user-index.php');
            die;
        }
 

$titulo = 'Fixture eliminatorias';
include 'user-header.php';
 ?>
     <h1 class="text-center"><?= $titulo ?></h1> 
      <?php


include 'user-fixture-eliminatorias-div.php';
include 'footer.php';
