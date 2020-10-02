<div class="col-md-3"></div>
<div class="container text-center col-sm-6">
    <form action="" method="post">
            <div class="form-group col-sm-12">
                <label for="nropartido" class="label-alta">N° de partido</label>
                <input type="text" class="form-control" id="nropartido" name="nropartido" value="<?= $nropartido ?>" autofocus>
            </div>
            
            <div class="form-group col-sm-12">
                <label for="equipo1" class="label-alta">Equipo 1</label>
                <select name="equipo1" id="equipo1" class="form-control select-partidos">
                <?php if (isset($equipo1)) {?>
                        <option> <?=$equipo1?> </option>
                <?php }else { ?>
                        <option value="">- Seleccionar -</option>
                <?php }?> 
                    <?php foreach ($equipos as $equipo) { ?>            
                        <option> <?=$equipo['nombre']?> </option>
                    <?php }?>
                </select>
            </div>

            <div class="form-group col-sm-12">
                <label for="equipo2" class="label-alta">Equipo 2</label>
                <select name="equipo2" id="equipo2" class="form-control select-partidos">
                <?php if (isset($equipo2)) {?>
                        <option> <?=$equipo2?> </option>
                <?php }else { ?>
                    <option value="">- Seleccionar -</option>
                <?php }?>
                    <?php foreach ($equipos as $equipo) { ?>                                            
                        <option> <?=$equipo['nombre']?> </option> 
                    <?php }?>
                </select>
            </div>
            
            <div class="form-group col-sm-12">
                <label for="goles1" class="label-alta">Goles del equipo 1</label>
                <input type="text" class="form-control" id="goles1" name="goles1" value="<?= $goles1 ?>">
            </div>
            <div class="form-group col-sm-12">
                <label for="goles2" class="label-alta">Goles del equipo 2</label>
                <input type="text" class="form-control" id="goles2" name="goles2" value="<?= $goles2 ?>">
            </div>
        <button type="submit" class="btn btn-alta">Modificar</button>
    </form>
</div>