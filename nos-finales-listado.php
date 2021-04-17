<?php

require_once 'conexion.php';
$anio = ANO;
$sql = "SELECT
f.id_final,
f.nropartido,
f.posicion,
f.goles,
f.penales,
f.anio,
e.nombre equipo

FROM
finales f
LEFT JOIN equipos e ON e.id_equipo = f.id_equipo
WHERE f.anio = $anio
ORDER BY f.nropartido, f.posicion;
";


$rs = mysqli_query($link, $sql);
if (!$rs) {
    header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');
    die;
}

mysqli_close($link);

$cantidad_de_partidos = mysqli_num_rows($rs) / 2;

$titulo = 'Listado de finales';
include 'nos-header.php';
?>
    <h1 class="m20"><?= $titulo ?></h1>
<?php
if ($cantidad_de_partidos > 0) {
    include 'nos-finales-listado-tabla.php';
}
include 'footer.php';
