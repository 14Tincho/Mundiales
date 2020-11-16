<div class="form-row text-center">
<!-- *****************************OCTAVOS***************************** -->
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
        
        // ponemos el numero 0 o la - a los goles o a lo penales dependiendo de si el resultado es nulo o cero
        if (!empty($octavos['goles']) || $octavos['goles'] == "0") {
            $goles = $octavos['goles'];
        }else {
            $goles = '-';
        }
        if (!empty($octavos['penales']) || $octavos['penales'] == "0") {
            $penales = $octavos['penales'];
        }else {
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





<!-- *****************************CUARTOS***************************** -->
        <h2 class="text-white col-12 titulo-octavos">Cuartos</h2>
    <?php 
        $anio = ANO;
        include 'conexion.php';
        $sql = "SELECT 
        c.nropartido,
        c.posicion,
        c.goles,
        c.penales,
        c.anio,
        e.nombre
        FROM cuartos c 
        LEFT JOIN equipos e ON e.id_equipo = c.id_equipo 
        WHERE c.anio = $anio
        ORDER BY c.nropartido , c.posicion";
        
        $rs = mysqli_query($link, $sql);
        if (!$rs) {
            header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');                    
            die;
        }
        mysqli_close($link);
            
            $h = 48;
            $j = 1;
        while ($cuartos = mysqli_fetch_assoc($rs)):
            $nroPartido = $cuartos['nropartido'];
            $goles = $cuartos['goles'];
            $penales = $cuartos['penales'];
            $nombre = $cuartos['nombre'];    

        // ponemos el numero 0 o la - a los goles o a lo penales dependiendo de si el resultado es nulo o cero
        if (!empty($cuartos['goles']) || $cuartos['goles'] == "0") {
            $goles = $cuartos['goles'];
        }else {
            $goles = '-';
        }
        if (!empty($cuartos['penales']) || $cuartos['penales'] == "0") {
            $penales = $cuartos['penales'];
        }else {
            $penales = '-';
        }
        
            $j++;
            if($j %2 == 0) { 
            $h++; ?>
            <div class="form-group col-lg-3">
            <h6 class="text-white">Partido <?= $nroPartido ?></h6>
            <div class="form-row resultado-wrap ">
                <div class="col-2 octavos"><span class="fixtureGoles">G<?=$h?></span></div>
                <div class="col-6 div-bg"><?=$nombre?></div> 
                <div class="col-2 octavos"><span class="fixtureGoles"><?=$goles?></span></div>
                <div class="col-2 octavos"><span class="fixtureGoles">(<?=$penales?>)</span></div>
            </div>

            <?php
            }else {
            $h++; ?>
            <div class="form-row resultado-wrap ">
                <div class="col-2 octavos"><span class="fixtureGoles">G<?=$h?></span></div>
                <div class="col-6 div-bg"><?=$nombre?></div> 
                <div class="col-2 octavos"><span class="fixtureGoles"><?=$goles?></span></div>
                <div class="col-2 octavos"><span class="fixtureGoles">(<?=$penales?>)</span></div>
            </div>
            </div>
            <?php }?>
            
                    
        <?php endwhile;?>
</div>
