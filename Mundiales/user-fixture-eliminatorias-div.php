<div class="form-row text-center">
    <h2 class="text-white col-12 titulo-octavos">Octavos</h2>
    <?php 
        $anio = ANO;
        include 'conexion.php';
        $sql = "SELECT 
        o.nropartido,
        o.posicion,
        o.goles,
        o.penales,
        o.anio,
        e.nombre,
        e.grupo 
        FROM octavos o 
        LEFT JOIN equipos e ON e.id_equipo = o.id_equipo 
        WHERE o.anio = $anio
        ORDER BY o.nropartido , o.posicion";
        
        $rs = mysqli_query($link, $sql);
        if (!$rs) {
            header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');                    
            die;
        }
        mysqli_close($link);
            
        $j = 1;
        while ($octavos = mysqli_fetch_assoc($rs)):
            $nroPartido = $octavos['nropartido'];
            $posicion = $octavos['posicion'];
            $goles = $octavos['goles'];
            $penales = $octavos['penales'];
            $nombre = $octavos['nombre'];
            $grupo = $octavos['grupo'];
        if (empty($goles)) {
            $goles = '-';
        }
        if (empty($penales)) {
            $penales = '-';
        }
        if ($nroPartido <= 52) {?>
            <?php $j++;
            if($j %2 == 0) { ?>
            <div class="form-group col-lg-3">
            <h6 class="text-white">Partido <?= $nroPartido ?></h6>
            <div class="form-row resultado-wrap ">
                <div class="col-2 octavos"><span class="fixtureGoles"><?=$grupo . $posicion?></span></div>
                <div class="col-6 div-bg"><?=$nombre?></div> 
                <div class="col-2 octavos"><span class="fixtureGoles"><?=$goles?></span></div>
                <div class="col-2 octavos"><span class="fixtureGoles">(<?=$penales?>)</span></div>
            </div>

            <?php
            }else {?>
            <div class="form-row resultado-wrap ">
                <div class="col-2 octavos"><span class="fixtureGoles"><?=$grupo . $posicion?></span></div>
                <div class="col-6 div-bg"><?=$nombre?></div> 
                <div class="col-2 octavos"><span class="fixtureGoles"><?=$goles?></span></div>
                <div class="col-2 octavos"><span class="fixtureGoles">(<?=$penales?>)</span></div>
            </div>
            </div>
            <?php }
        }else {
            $j++;
            if($j %2 == 0) { ?>
            <div class="form-group col-lg-3">
            <h6 class="text-white">Partido <?= $nroPartido ?></h6>
            <div class="form-row resultado-wrap ">
                <div class="col-2 octavos"><span class="fixtureGoles"><?=$grupo . $posicion?></span></div>
                <div class="col-6 div-bg"><?=$nombre?></div> 
                <div class="col-2 octavos"><span class="fixtureGoles"><?=$goles?></span></div>
                <div class="col-2 octavos"><span class="fixtureGoles">(<?=$penales?>)</span></div>
            </div>

            <?php
            }else {?>
            <div class="form-row resultado-wrap ">
                <div class="col-2 octavos"><span class="fixtureGoles"><?=$grupo . $posicion?></span></div>
                <div class="col-6 div-bg"><?=$nombre?></div> 
                <div class="col-2 octavos"><span class="fixtureGoles"><?=$goles?></span></div>
                <div class="col-2 octavos"><span class="fixtureGoles">(<?=$penales?>)</span></div>
            </div>
            </div>
            <?php }
        }?>
            
                    
        <?php endwhile;?>