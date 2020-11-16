<?php

require_once 'conexion.php';
$anio = ANO;
$sql = "SELECT
s.id_semi,
s.nropartido,
s.posicion,
s.goles,
s.penales,
s.anio,
e.nombre equipo

FROM
semis s
LEFT JOIN equipos e ON e.id_equipo = s.id_equipo
WHERE s.anio = $anio
ORDER BY s.nropartido, s.posicion;
";


$rs = mysqli_query($link, $sql);
if (!$rs) {
    header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');
    die;
}

mysqli_close($link);

$cantidad_de_partidos = mysqli_num_rows($rs) / 2;

$titulo = 'Listado de semis';
include 'nos-header.php';
?>
    <h1 class="m20"><?= $titulo ?></h1>
<?php
if ($cantidad_de_partidos > 0) {
    include 'nos-semis-listado-tabla.php';
}
include 'footer.php';
