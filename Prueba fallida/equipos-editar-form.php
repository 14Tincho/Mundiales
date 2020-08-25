<div class="col-md-3"></div>
<div class="container text-center col-sm-6">
    <form action="" method="post">
        <div class="form-group col-sm-12">
            <label class="label-editar" for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $nombre ?>" autofocus required>
        </div>
        <div class="form-group col-sm-12">
            <label class="label-editar" for="grupo">Grupo</label>
            <input type="text" class="form-control text-uppercase" id="grupo" name="grupo" value="<?= $grupo ?>" required>
                                    <!--  -->
        </div>
        <div class="form-group col-sm-12">
            <label class="label-editar" for="posicion">Posicion</label>
            <input type="text" class="form-control" id="posicion" name="posicion" value="<?= $posicion ?>" required>
        </div>
        <button type="submit" class="btn btn-editar">Modificar</button>
    </form>
</div>
<?php  
   include 'footer.php';
 