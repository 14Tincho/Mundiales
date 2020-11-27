<div class="container text-center">
    <form action="user-prode-octavos.php" method="get">
        <div class="form-row">
            <?php                
                $h = 0;
                for ($j='A'; $j <= 'H' ; $j++) { 
            ?>
                <div class="form-group col-lg-3 resultado-row d-flex justify-content-center">
                    <div class="form-row resultado-wrap">
                    <h5 class="text-white col-12">Grupo <?=$j?></h5>
                    <div class="text-white col-4"></div>
                    <div class="text-white col-4">
                        <div class="form-row">
                            <div class="col-4" style="padding-left: 12px;">L</div>
                            <div class="col-4">E</div>
                            <div class="col-4" style="padding-right: 12px;">V</div>
                        </div>
                    </div>
                    <div class="text-white col-4"></div>
                        <?php for ($i=1; $i < 7 ; $i++){ ?>

                                <div class="d-flex flex-nowrap resultado-wrap">
                                    <?php
                                    $prodeEditar = mysqli_fetch_assoc($rs);
                                    if (isset($prodeEditar['partido']) && isset($prodeEditar['grupo'])) {
                                        $grupo = $prodeEditar['grupo'];
                                        $nropartido = $prodeEditar['partido'];
                                        $lev  = $prodeEditar['lev'];
                                        $id_partido = $prodeEditar['id_partido'];
                                    }

                                    if (!empty($prodeEditar['equipo1']) && !empty($prodeEditar['equipo2'])) {
                                        $equipo1 = $prodeEditar['equipo1']; 
                                        $equipo2 = $prodeEditar['equipo2'];
                                    }else {
                                        $equipo1 = '-';
                                        $equipo2 = '-';
                                    }
                                    ?>
                                    <div class="div-bg col-4"><?=$equipo1?></div>
                                    <div class="col-4 form-row d-flex justify-content-center resultado-wrap"> 
                                        <div class="form-row radio">
                                            <div class="col-4"><input type="radio" value="L" name="<?=$id_partido;?>" id="" <?php if($lev === 'L' ) { echo 'checked'; } ?>></div>
                                            <div class="col-4"><input type="radio" value="E" name="<?=$id_partido;?>" id="" <?php if($lev === 'E' ) { echo 'checked'; } ?>></div>
                                            <div class="col-4"><input type="radio" value="V" name="<?=$id_partido;?>" id="" <?php if($lev === 'V' ) { echo 'checked'; } ?>></div>
                                        </div>
                                    </div>
                                    <div class="div-bg col-4"><?=$equipo2?></div>
                                </div>

                        
                      
                        <?php } ?>
                        
                    </div>
                </div>
                
            <?php } ?>
        </div>
        <!-- <a href="user-prode-fase.php?getProde=       " onclick="return confirm('¿Estás seguro de querer guardar estos resultados?')" class="a-listado">Guardar</a> -->
        <button type="submit" class="btn btn-alta" onclick="return confirm('¿Estás seguro de querer guardar estos resultados?')">Guardar</button>
    </form>
</div>
