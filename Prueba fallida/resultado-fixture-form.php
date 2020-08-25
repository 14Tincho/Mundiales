<div class="container text-center">
    <form action="" method="post">
        <div class="form-row">
            <?php for ($j='A'; $j <= 'H' ; $j++) { 
                include 'fixture-DB.php';
                ?>
                <div class="form-group col-lg-3 resultado-row">
                    <label for="id_equipo" class="label-fixture">Grupo <?=$j?> </label><br>
                    <div class="form-row">
                        <?php for ($i=1; $i < 5 ; $i++) : ?>   
                                <div class="d-flex flex-nowrap resultado-wrap">
                                    <div class="div-bg col-2"><?=$i?>° </div>
                                    <div class="div-bg col-8"><spam>Arabia Saudita</spam></div>
                                    <div class="div-bg col-2">A</div>
                                </div>
                        <?php endfor; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </form>
</div>
<?php
     include 'footer.php';