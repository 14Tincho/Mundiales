<form action="user-prode-fase.php" method="get">
    <div class="form-row text-center">
        <h2 class="text-white col-12">Fase de grupos</h2>
        <?php                
            $h = 0;
            for ($j='A'; $j <= 'H' ; $j++) { 
        ?>
            <div class="form-group col-xl-3 col-md-6 resultado-row d-flex justify-content-center">
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

<?php  include 'user-fixture-fase-DB.php'; ?>
    </div>
</form>
