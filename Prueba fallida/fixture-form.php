<div class="container text-center">
    <form action="" method="post">
        <div class="form-row">
            <?php for ($j='A'; $j <= 'H' ; $j++) { 
                include 'fixture-DB.php';
                ?>
                <div class="form-group col-md-3">
                    <label for="id_equipo" class="label-fixture">Grupo <?=$j?> </label><br>
                    <?php for ($i=1; $i < 5 ; $i++) : ?>
                            <div class="d-flex flex-nowrap text-white">
                                <div class="div-form-alta"><?=$i?>°  </div>
                                <select id="id_equipo" name="id_equipo<?=$j . $i?>" class="form-control">
                                    <option value=" ">- Seleccionar -</option>
                                        <?php foreach ($equipos as $equipo) { ?>                                            
                                                <option> <?=$equipo['nombre']?> </option> 
                                        <?php }?>
                                </select>
                            </div>
                    <?php endfor; ?>
                </div>
            <?php } ?>
        </div>
        <br>
        <button type="submit" class="btn btn-fixture">Dar de alta</button>
    </form>
</div>
<?php
     include 'footer.php';