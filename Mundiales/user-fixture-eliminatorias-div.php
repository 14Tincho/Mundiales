<div class="container text-center">
    <form action="user-prode-fase.php" method="get">
        <div class="form-row">
            <h2 class="text-white col-12 titulo-octavos">Octavos</h2>
            <?php
            $m = 48;
                for ($j='A'; $j <= 'H' ; $j++) {    
                    $m++;?>
                <div class="form-group col-lg-3 d-block">
                <div>
                    <h6 class="text-white">Partido <?= $m; ?></h6>
                </div>
                    <div class="form-row resultado-wrap ">
                        <?php $i=1; ?>
                                <div class="col-2 octavos"><span class="fixtureGoles"><?=$j . $i?></span></div>
                                <div class="col-6 div-bg">Arabia S.</div> 
                                <div class="col-2 octavos"><span class="fixtureGoles">-</span></div>
                                <div class="col-2 octavos"><span class="fixtureGoles">(-)</span></div>
                                <?php 
                                $j++;
                                $i++;                                
                                ?>
                                <div class="col-2 octavos"><span class="fixtureGoles"><?=$j . $i?></span></div>
                                <div class="col-6 div-bg">Uruguay</div> 
                                <div class="col-2 octavos"><span class="fixtureGoles">-</span></div>
                                <div class="col-2 octavos"><span class="fixtureGoles">(-)</span></div>
                        </div>
                </div>
            <?php 
            }
            $l = array("B","D", "F", "H");
            $k = array("A","C", "E", "G");
            $values = array_combine($l, $k);
            foreach ($values as $lk => $score)  { 
                $m++;?>
                    
                    <div class="form-group col-lg-3 d-block">
                    <h6 class="text-white">Partido <?= $m; ?></h6>  
                    <div class="form-row resultado-wrap">
                        <div class="col-2 octavos"><span class="fixtureGoles"><?=$lk . 1?></span></div>
                        <div class="col-6 div-bg">Rusia</div> 
                        <div class="col-2 octavos"><span class="fixtureGoles">-</span></div>                                          
                        <div class="col-2 octavos"><span class="fixtureGoles">(-)</span></div>                                          
                        <div class="col-2 octavos"><span class="fixtureGoles"><?=$score . 2?></span></div>
                        <div class="col-6 div-bg">Egipto</div> 
                        <div class="col-2 octavos"><span class="fixtureGoles">-</span></div>                               
                        <div class="col-2 octavos"><span class="fixtureGoles">(15)</span></div>                               
                    </div>
                </div>           
               <?php } ?>
    </form>
</div>