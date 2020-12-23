<div class="text-center">
    <form action="user-prode-octavos.php" method="get">
        <div class="form-row">
            <?php             
            $j = 1;
            while ($octavos = mysqli_fetch_assoc($rs)):
                $nroPartido = $octavos['nropartido'];
                $posicion = $octavos['posicion'];
                $nombre = $octavos['nombre'];
                $grupo = $octavos['grupo'];
                $lv = $octavos['lv'];

            if ($nroPartido <= 52) {?>
                <?php $j++;
                if($j %2 == 0) { ?>
                <div class="form-group  col-xl-3 col-md-6">
                <h6 class="text-white">Partido <?= $nroPartido ?></h6>
                <div class="form-row resultado-wrap ">
                    <div class="col-2 octavos"><span class="fixtureGoles"><?=$grupo . $posicion?></span></div>
                    <div class="col-8 div-bg"><?=$nombre?></div> 
                    <div class="col-2 div-bg"><input type="radio" value="L" name="<?=$nroPartido?>" id="" <?php if($lv === 'L' ) { echo 'checked'; } ?>></div>
                </div>

                <?php
                }else {?>
                <div class="form-row resultado-wrap ">
                    <div class="col-2 octavos"><span class="fixtureGoles"><?=$grupo . $posicion?></span></div>
                    <div class="col-8 div-bg"><?=$nombre?></div>
                    <div class="col-2 div-bg"><input type="radio" value="V" name="<?=$nroPartido?>" id="" <?php if($lv === 'V' ) { echo 'checked'; } ?>></div>
                </div> 
                </div>
                <?php }
            }else {
                $j++;
                if($j %2 == 0) { ?>
                <div class="form-group  col-xl-3 col-md-6">
                    <h6 class="text-white">Partido <?= $nroPartido ?></h6>
                    <div class="form-row resultado-wrap ">
                        <div class="col-2 octavos"><span class="fixtureGoles"><?=$grupo . $posicion?></span></div>
                        <div class="col-8 div-bg"><?=$nombre?></div> 
                        <div class="col-2 div-bg"><input type="radio" value="L" name="<?=$nroPartido?>" id="" <?php if($lv === 'L' ) { echo 'checked'; } ?>></div>
                    </div>

                    <?php
                    }else {?>
                    <div class="form-row resultado-wrap ">
                        <div class="col-2 octavos"><span class="fixtureGoles"><?=$grupo . $posicion?></span></div>
                        <div class="col-8 div-bg"><?=$nombre?></div> 
                        <div class="col-2 div-bg"><input type="radio" value="V" name="<?=$nroPartido?>" id="" <?php if($lv === 'V' ) { echo 'checked'; } ?>></div>
                    </div>
                </div>
                <?php }
            }?> 
            <?php endwhile;?>
        </div>
        <button type="submit" class="btn btn-alta" onclick="return confirm('¿Estás seguro de querer guardar estos resultados?')">Guardar</button>
    </form>
</div>
