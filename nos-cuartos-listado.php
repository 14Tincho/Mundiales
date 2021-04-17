<?php

require_once 'conexion.php';
$anio = ANO;
$sql = "SELECT
c.id_cuarto,
c.nropartido,
c.posicion,
c.goles,
c.penales,
c.anio,
e.nombre equipo

FROM
cuartos c
LEFT JOIN equipos e ON e.id_equipo = c.id_equipo
WHERE c.anio = $anio
ORDER BY c.nropartido, c.posicion;
";


$rs = mysqli_query($link, $sql);
if (!$rs) {
    header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');
    die;
}

mysqli_close($link);

$cantidad_de_partidos = mysqli_num_rows($rs) / 2;

$titulo = 'Listado de cuartos';
include 'nos-header.php';
?>
    <h1 class="m20"><?= $titulo ?></h1>
<?php
if ($cantidad_de_partidos > 0) {
    include 'nos-cuartos-listado-tabla.php';
}
include 'footer.php';
