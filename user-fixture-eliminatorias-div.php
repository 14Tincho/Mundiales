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
            <div class="form-group col-xl-3 col-md-6">
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
            <div class="form-group col-xl-3 col-md-6">
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
        $fila = mysqli_num_rows($rs);
        if ($fila != 0) {
            ?><h2 class="text-white col-12 titulo-octavos">Cuartos</h2><?php
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
            <div class="form-group col-xl-3 col-md-6">
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

    <!-- *****************************SEMIS***************************** -->
    <?php 
        $anio = ANO;
        include 'conexion.php';
        $sql = "SELECT 
        s.nropartido,
        s.posicion,
        s.goles,
        s.penales,
        s.anio,
        e.nombre
        FROM semis s 
        LEFT JOIN equipos e ON e.id_equipo = s.id_equipo 
        WHERE s.anio = $anio
        ORDER BY s.nropartido , s.posicion";
        
        $rs = mysqli_query($link, $sql);
        if (!$rs) {
            header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');                    
            die;
        }
        $fila = mysqli_num_rows($rs);
        if ($fila != 0) {
            ?><h2 class="text-white col-12 titulo-octavos">Semifinales</h2><?php
        }
        mysqli_close($link);
            
            $h = 56;
            $j = 1;

        ?><div class="col-xl-3"></div><?php

        while ($semis = mysqli_fetch_assoc($rs)):
            $nroPartido = $semis['nropartido'];
            $goles = $semis['goles'];
            $penales = $semis['penales'];
            $nombre = $semis['nombre'];    

        // ponemos el numero 0 o la - a los goles o a lo penales dependiendo de si el resultado es nulo o cero
        if (!empty($semis['goles']) || $semis['goles'] == "0") {
            $goles = $semis['goles'];
        }else {
            $goles = '-';
        }
        if (!empty($semis['penales']) || $semis['penales'] == "0") {
            $penales = $semis['penales'];
        }else {
            $penales = '-';
        }
        
            $j++;
            if($j %2 == 0) { 
            $h++; ?>
            <div class="form-group col-xl-3 col-md-6">
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

    <!-- *****************************FINALES***************************** -->
    <?php 
        $anio = ANO;
        include 'conexion.php';
        $sql = "SELECT 
        f.nropartido,
        f.posicion,
        f.goles,
        f.penales,
        f.anio,
        e.nombre
        FROM finales f 
        LEFT JOIN equipos e ON e.id_equipo = f.id_equipo 
        WHERE f.anio = $anio
        ORDER BY f.nropartido , f.posicion";
        
        $rs = mysqli_query($link, $sql);
        if (!$rs) {
            header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');                    
            die;
        }
        mysqli_close($link);
            
            $h = 60;
            $j = 1;
        
        while ($finales = mysqli_fetch_assoc($rs)):
            $nroPartido = $finales['nropartido'];
            $goles = $finales['goles'];
            $penales = $finales['penales'];
            $nombre = $finales['nombre'];    

        // ponemos el numero 0 o la - a los goles o a lo penales dependiendo de si el resultado es nulo o cero
        if (!empty($finales['goles']) || $finales['goles'] == "0") {
            $goles = $finales['goles'];
        }else {
            $goles = '-';
        }
        if (!empty($finales['penales']) || $finales['penales'] == "0") {
            $penales = $finales['penales'];
        }else {
            $penales = '-';
        }
            if($nroPartido == 63){
                $t = 'Tercer Puesto';
                $k =  'P';
            }else{
                $t = 'Final';
                $k = 'G';
            }
            $j++;
            if($j %2 == 0) { 
            $h++; ?>
            <h2 class="text-white col-12 titulo-octavos"><?= $t ?></h2>
            <div class="col"></div>
            <div class="form-group col-xl-3 col-md-6">
            <div class="form-row resultado-wrap ">
                <div class="col-2 octavos"><span class="fixtureGoles"><?=$k.$h?></span></div>
                <div class="col-6 div-bg"><?=$nombre?></div> 
                <div class="col-2 octavos"><span class="fixtureGoles"><?=$goles?></span></div>
                <div class="col-2 octavos"><span class="fixtureGoles">(<?=$penales?>)</span></div>
            </div>

            <?php
            }else {
            $h++; ?>
            <div class="form-row resultado-wrap ">
                <div class="col-2 octavos"><span class="fixtureGoles"><?=$k.$h?></span></div>
                <div class="col-6 div-bg"><?=$nombre?></div> 
                <div class="col-2 octavos"><span class="fixtureGoles"><?=$goles?></span></div>
                <div class="col-2 octavos"><span class="fixtureGoles">(<?=$penales?>)</span></div>
            </div>
            </div>
            <div class="col"></div>
            <?php 
            $h = 60; }?>
            
                    
        <?php endwhile;?>

</div>
