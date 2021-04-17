<div class="text-center">
    <form action="user-prode-semis.php" method="get">
        <div class="form-row">
            <div class="form-group col-xl-3"></div>
            <?php             
            $j = 1;
            while ($semis = mysqli_fetch_assoc($rs)):
                $nroPartido = $semis['nropartido'];
                $posicion = $semis['posicion'];
                $nombre = $semis['nombre'];
                $nropartidocuarto = $semis['nropartidocuarto'];
                $lv = $semis['lv'];
                $j++;

                if($j %2 == 0) { ?>
                <div class="form-group col-xl-3 col-md-6">
                    <h6 class="text-white">Partido <?= $nroPartido ?></h6>
                    <div class="form-row resultado-wrap ">
                        <div class="col-2 octavos"><span class="fixtureGoles">G<?=$nropartidocuarto?></span></div>
                        <div class="col-8 div-bg"><?=$nombre?></div> 
                        <div class="col-2 div-bg"><input type="radio" value="L" name="<?=$nroPartido?>" id="" <?php if($lv === 'L' ) { echo 'checked'; } ?>></div>
                    </div>

                <?php
                } else {?>
                    <div class="form-row resultado-wrap ">
                        <div class="col-2 octavos"><span class="fixtureGoles">G<?=$nropartidocuarto?></span></div>
                        <div class="col-8 div-bg"><?=$nombre?></div>
                        <div class="col-2 div-bg"><input type="radio" value="V" name="<?=$nroPartido?>" id="" <?php if($lv === 'V' ) { echo 'checked'; } ?>></div>
                    </div> 
                </div>
                
                <?php }
                
            endwhile;?>
        </div>
        <button type="submit" class="btn btn-alta" onclick="return confirm('¿Estás seguro de querer guardar estos resultados?')">Guardar</button>
    </form>
</div>

