<div class="col-md-3"></div>
<div class="container text-center col-sm-6">
    <form action="" method="post">
        <?php include 'nos-partidos-alta-form-DB.php';?>
            <div class="form-group col-sm-12">
                <label for="nropartido" class="label-alta">N° de partido</label>
                <input type="text" class="form-control" id="nropartido" name="nropartido" value="<?= $nropartido ?>" autofocus>
            </div>
            <div class="form-group col-sm-12">
                <label for="equipo1" class="label-alta">Equipo 1</label>
                <select name="equipo1" id="equipo1 exampleFormControlSelect1" class="form-control">
                    <option value="">- Seleccionar -</option>
                    <?php foreach ($equipos as $equipo) { ?>                                            
                        <option> <?=$equipo['nombre']?> </option> 
                    <?php }?>
                </select>
            </div>
            <div class="form-group col-sm-12">
                <label for="equipo2" class="label-alta">Equipo 2</label>
                <select name="equipo2" id="equipo2 exampleFormControlSelect1" class="form-control">
                    <option value="">- Seleccionar -</option>
                    <?php foreach ($equipos as $equipo) { ?>                                            
                        <option> <?=$equipo['nombre']?> </option> 
                    <?php }?>
                </select>
            </div>
        <button type="submit" class="btn btn-alta">Dar de alta</button>
    </form>
</div>