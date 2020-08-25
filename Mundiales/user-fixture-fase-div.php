<div class="container text-center">
    <form action="user-prode-fase.php" method="get">
        <div class="form-row">
            <h2 class="text-white col-12">Fase de grupos</h2>
            <?php                
                $h = 0;
                for ($j='A'; $j <= 'H' ; $j++) { 
            ?>
                <div class="form-group col-lg-3 resultado-row d-flex justify-content-center">
                    <div class="form-row resultado-wrap">
                    <h5 class="text-white col-12">Grupo <?=$j?></h5>
                        <?php for ($i=1; $i < 7 ; $i++){ ?>

                                <div class="d-flex flex-nowrap resultado-wrap">
                                    <?php
                                    $fixtureFase = mysqli_fetch_assoc($rs);
                                    if (isset($fixtureFase['partido']) && isset($fixtureFase['grupo'])) {
                                        $grupo = $fixtureFase['grupo'];
                                        $nropartido = $fixtureFase['partido'];
                                        $id_partido = $fixtureFase['id_partido'];
                                    }
                                    if (!empty($fixtureFase['equipo1']) && !empty($fixtureFase['equipo2'])) {
                                        $equipo1 = $fixtureFase['equipo1']; 
                                        $equipo2 = $fixtureFase['equipo2'];
                                    }else {
                                        $equipo1 = '-';
                                        $equipo2 = '-';
                                    }
                                    if (!empty($fixtureFase['goles1']) || $fixtureFase['goles1'] == "0") {
                                        $goles1 = $fixtureFase['goles1'];
                                    }else {
                                        $goles1 = '-';
                                    }
                                    if (!empty($fixtureFase['goles2']) || $fixtureFase['goles2'] == "0") {
                                        $goles2 = $fixtureFase['goles2'];
                                    }else{
                                        $goles2 = '-';
                                    }
                                    ?>
                                    <div class="div-bg col-4"><?=$equipo1?></div>
                                    <div class="col-4 form-row d-flex justify-content-center resultado-wrap"> 
                                        <div class="form-row">
                                                <div class="col divFixtureGoles"><span class="fixtureGoles"><?=$goles1?></span></div>
                                                <div class="col divFixtureGoles"><span class="fixtureGoles"><?=$goles2?></span></div>
                                        </div>
                                    </div>
                                    <div class="div-bg col-4"><?=$equipo2?></div>
                                </div>
                        <?php } ?>
                    </div>
                </div>
            <?php }  ?>

           
<!-- -----------------tabla clasificacion de la fase de grupos ------------------ -->
            <div class="separacion"></div>
            <?php for ($j='A'; $j <= 'H' ; $j++) {  ?>
            <div class="col-lg-6 table-responsive-sm">
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
                        <?php for ($i=1; $i < 5 ; $i++){ ?>
                        <tr>
                            <th scope="row">Argentina</th>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td><strong>0</strong></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <?php } ?>
        </div>
    </form>
</div>
