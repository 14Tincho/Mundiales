<?php

require_once 'conexion.php';

$sql = 'SELECT
p.id_partido,
p.fase,
p.partido,
p.goles1,
p.goles2,
p.penales1,
p.penales2,
e.grupo,
e.nombre equipo1,
eq.nombre equipo2

FROM
partidos p
LEFT JOIN equipos e ON e.id_equipo = p.id_equipo1
LEFT JOIN equipos eq ON eq.id_equipo = p.id_equipo2
';


$rs = mysqli_query($link, $sql);
if (!$rs) {
    header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');
    die;
}

mysqli_close($link);

$cantidad_de_partidos = mysqli_num_rows($rs);

$titulo = 'Listado de partidos';
include 'nos-header.php';
?>
    <h1 class="text-center"><?= $titulo ?></h1>
<?php
if ($cantidad_de_partidos > 0) {
    include 'nos-partidos-listado-tabla.php';
}
include 'footer.php';
