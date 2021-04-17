<?php

require 'conexion.php';

$sql = 'SELECT
c.id_equipo,
c.pj,
c.pg,
c.pe,
c.pp,
c.gf,
c.gc,
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


        for ($j='A'; $j <= 'H' ; $j++) {  ?>
        <div class="col-xl-6 table-responsive-sm">
        <h5 class="text-white text-left col-12">Grupo <?=$j?></h5>
            <table class="table table-danger table-striped">
                <thead>
                    <tr>
                        <th scope="col">Equipo</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PE</th>
                        <th scope="col">PP</th>
                        <th scope="col">GF</th>
                        <th scope="col">GC</th>
                        <th scope="col">DF</th>
                        <th scope="col">PTS</th>
                    </tr>
                </thead>

                <tbody>
                    <?php for ($i=1; $i < 5 ; $i++){ 
                    $clasificacion = mysqli_fetch_assoc($rs);
                    ?>
                            
                        <tr>
                            <td><?=$clasificacion['equipo'] ?></td>
                            <td><?=$clasificacion['pj']?></td>
                            <td><?=$clasificacion['pg']?></td>
                            <td><?=$clasificacion['pe']?></td>
                            <td><?=$clasificacion['pp']?></td>
                            <td><?=$clasificacion['gf']?></td>
                            <td><?=$clasificacion['gc']?></td>
                            <td><?=$clasificacion['dg']?></td>
                            <td><?=$clasificacion['pts']?></td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
        <?php } 