<?php

require 'conexion.php';

$sql = 'SELECT
c.id_equipo,
c.gf,
c.dg,
c.pts,
e.grupo,
e.nombre equipo

FROM
clasificacion c
LEFT JOIN equipos e ON e.id_equipo = c.id_equipo
ORDER BY e.grupo , c.pts DESC , c.dg DESC, c.gf DESC;';


$rs = mysqli_query($link, $sql);
if (!$rs) {
    header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');
    die;
}







mysqli_close($link);