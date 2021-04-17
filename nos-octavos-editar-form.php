<div class="col-md-3"></div>
<div class="container text-center col-sm-6">
    <form action="" method="post">
            <div class="form-group col-sm-12">
                <label for="nropartido" class="label-alta">N° de partido</label>
                <input type="text" class="form-control" id="nropartido" name="nropartido" value="<?= $nropartido ?>" readonly>
            </div>
            
            <div class="form-group col-sm-12">
                <label for="equipo1" class="label-alta">Equipo 1</label>
                <input type="text" class="form-control" id="equipo1" name="equipo1" value="<?= $equipo1 ?>" readonly>
            </div>

            <div class="form-group col-sm-12">
                <label for="equipo2" class="label-alta">Equipo 2</label>
                <input type="text" class="form-control" id="equipo2" name="equipo2" value="<?= $equipo2 ?>" readonly>
            </div>    
            <div class="form-group col-sm-12">
                <label for="goles1" class="label-alta">Goles del equipo 1</label>
                <input type="text" class="form-control" id="goles1" name="goles1" value="<?= $goles1 ?>" autofocus>
            </div>
            <div class="form-group col-sm-12">
                <label for="goles2" class="label-alta">Goles del equipo 2</label>
                <input type="text" class="form-control" id="goles2" name="goles2" value="<?= $goles2 ?>">
            </div>
            <div class="form-group col-sm-12">
                <label for="penales1" class="label-alta">Penales del equipo 1</label>
                <input type="text" class="form-control" id="penales1" name="penales1" value="<?= $penales1 ?>">
            </div>
            <div class="form-group col-sm-12">
                <label for="penales2" class="label-alta">Penales del equipo 2</label>
                <input type="text" class="form-control" id="penales2" name="penales2" value="<?= $penales2 ?>">
            </div>
        <button type="submit" class="btn btn-alta">Modificar</button>
    </form>
</div>