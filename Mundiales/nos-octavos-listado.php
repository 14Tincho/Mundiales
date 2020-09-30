<?php

require_once 'conexion.php';
$anio = ANO;
$sql = "SELECT
o.id_octavo,
o.nropartido,
o.posicion,
o.goles,
o.penales,
o.anio,
e.nombre equipo

FROM
octavos o
LEFT JOIN equipos e ON e.id_equipo = o.id_equipo
WHERE o.anio = $anio
ORDER BY o.nropartido, o.posicion;
";


$rs = mysqli_query($link, $sql);
if (!$rs) {
    header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');
    die;
}

mysqli_close($link);

$cantidad_de_partidos = mysqli_num_rows($rs) / 2;

$titulo = 'Listado de octavos';
include 'nos-header.php';
?>
    <h1 class="text-center"><?= $titulo ?></h1>
<?php
if ($cantidad_de_partidos > 0) {
    include 'nos-octavos-listado-tabla.php';
}
include 'footer.php';
