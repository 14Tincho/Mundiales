<div class="table-responsive">
<table class="table table-sm table-striped table-hover text-center table-listado ">
    <thead>
        <tr>
            <th>Id</th>
            <th>Grupo</th>
            <th>N° Partido</th>
            <th>Equipo 1</th>
            <th>Goles 1</th>
            <th>Equipo 2</th>
            <th>Goles 2</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php while ($partido = mysqli_fetch_assoc($rs)) :?>
        <tr class="text-white">
            <td><?= $partido['id_partido'] ?></td>
            <td><?= $partido['grupo']?></td>
            <td><?= $partido['partido'] ?></td>
            <td><strong><?= $partido['equipo1'] ?></strong></td>
            <td><?= $partido['goles1'] ?></td>
            <td><strong><?= $partido['equipo2'] ?></strong></td>
            <td><?= $partido['goles2'] ?></td>
            <td>
                <a href="nos-partidos-editar.php?id_editar=<?= $partido['id_partido'] ?>" class="a-listado">Editar</a>
            </td>
            <td>
                <a href="nos-partidos-eliminar.php?id_eliminar=<?= $partido['id_partido']?>" onclick="return confirm('Estás seguro que quieres eliminar el partido entre <?= $partido['equipo1']?> y <?=$partido['equipo2']?> ?');" class="a-listado">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
    <tfoot>
        <tr class="table-tfoot text-center">
            <td colspan="12">Se encontraron <?= $cantidad_de_partidos ?> partidos en total.</td>
        </tr>
    </tfoot>
</table>
</div>