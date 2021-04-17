<div class="text-center">
    <form action="user-prode-finales.php" method="get">
        <div class="form-row">
            <div class="form-group col-xl-3"></div>
            <?php             
            $j = 1;                
            $m = 1;
            while ($finales = mysqli_fetch_assoc($rs)):
                $nroPartido = $finales['nropartido'];
                $posicion = $finales['posicion'];
                $nombre = $finales['nombre'];
                $nropartidosemi = $finales['nropartidosemi'];
                $lv = $finales['lv'];
                $j++;


                if($m === 1){
                    $nombreFinales = "Tercer Puesto";
                    $t = "P";
                }else{
                    $nombreFinales = "Final";
                    $t = "G";
                }
                if($j %2 == 0) { 
                    ?>
                <div class="form-group col-xl-3 col-md-6">
                    <h6 class="text-white"><?= $nombreFinales ?></h6>
                    <div class="form-row resultado-wrap ">
                        <div class="col-2 octavos"><span class="fixtureGoles"><?=$t . $nropartidosemi?></span></div>
                        <div class="col-8 div-bg"><?=$nombre?></div> 
                        <div class="col-2 div-bg"><input type="radio" value="L" name="<?=$nroPartido?>" id="" <?php if($lv === 'L' ) { echo 'checked'; } ?>></div>
                    </div>
                <?php
                } else {?>
                    <div class="form-row resultado-wrap ">
                        <div class="col-2 octavos"><span class="fixtureGoles"><?=$t . $nropartidosemi?></span></div>
                        <div class="col-8 div-bg"><?=$nombre?></div>
                        <div class="col-2 div-bg"><input type="radio" value="V" name="<?=$nroPartido?>" id="" <?php if($lv === 'V' ) { echo 'checked'; } ?>></div>
                    </div> 
                </div>
                 
                <?php 
                $m ++; }
                
            endwhile;?>
        </div>
        <button type="submit" class="btn btn-alta" onclick="return confirm('¿Estás seguro de querer guardar estos resultados?')">Guardar</button>
    </form>
</div>

