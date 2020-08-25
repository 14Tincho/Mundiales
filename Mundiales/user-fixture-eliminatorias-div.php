<div class="container text-center">
    <form action="user-prode-fase.php" method="get">
        <div class="form-row">
            <h2 class="text-white col-12 titulo-octavos">Octavos</h2>
            <?php
                for ($j='A'; $j <= 'H' ; $j++) {    
            ?>
                <div class="form-group col-lg-3 d-flex justify-content-center">
                    <div class="form-row resultado-wrap">
                        <?php for ($i=1; $i < 3 ; $i++){ ?>
                                <div class="col-2 octavos"><span class="fixtureGoles"><?=$j . $i?></span></div>
                                <div class="col-8 div-bg">Rusia</div> 
                                <div class="col-2 octavos"><span class="fixtureGoles">-</span></div>
                            
                                <?php if ($i == 1) {
                                    $j++;
                                }
                        } ?>
                    </div>
                </div>
            <?php 
            }
            $l = array("B","D", "F", "H");
            $k = array("A","C", "E", "G");
            $values = array_combine($l, $k);
            foreach ($values as $lk => $score)  { ?>
                    <div class="form-group col-lg-3 d-flex justify-content-center">
                    <div class="form-row resultado-wrap">
                        <div class="col-2 octavos"><span class="fixtureGoles"><?=$lk . 1?></span></div>
                        <div class="col-8 div-bg">Rusia</div> 
                        <div class="col-2 octavos"><span class="fixtureGoles">-</span></div>                                          
                        <div class="col-2 octavos"><span class="fixtureGoles"><?=$score . 2?></span></div>
                        <div class="col-8 div-bg">Rusia</div> 
                        <div class="col-2 octavos"><span class="fixtureGoles">-</span></div>                               
                    </div>
                </div>           
               <?php } ?>
    </form>
</div>