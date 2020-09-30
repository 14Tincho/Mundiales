<div class="table-responsive">
<table class="table table-sm table-striped table-hover text-center table-listado ">
    <thead>
        <tr>
            <th>N° Partido</th>
            <th>Id 1</th>
            <th>Equipo 1</th>
            <th>Goles 1</th>
            <th>Penales 1</th>
            <th>Id 2</th>
            <th>Equipo 2</th>
            <th>Goles 2</th>
            <th>Penales 2</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $i = 0;
        while ($octavos = mysqli_fetch_assoc($rs)) :
        if ($i==2) {
            $i=0;
        }    
        $i++;?>
        <?php if ($i==1) {?>
        <tr class="text-white">
            <td><?= $octavos['nropartido'] ?></td>
            <td><?= $octavos['id_octavo'] ?></td>
            <td><strong><?= $octavos['equipo'] ?></strong></td>
            <td><?= $octavos['goles'] ?></td>
            <td><?= $octavos['penales'] ?></td>
        <?php } ?>
        <?php if ($i==2) {?>
            <td><?= $octavos['id_octavo'] ?></td>
            <td><strong><?= $octavos['equipo'] ?></strong></td>
            <td><?= $octavos['goles'] ?></td>
            <td><?= $octavos['penales'] ?></td>
            <td>
                <a href="nos-octavos-editar.php?id_editar=<?= $octavos['nropartido'] ?>" class="a-listado">Editar</a>
            </td>
        </tr>
        <?php } ?>
        <?php endwhile; ?>
    </tbody>
    <tfoot>
        <tr class="table-tfoot text-center">
            <td colspan="12">Se encontraron <?= $cantidad_de_partidos ?> partidos en total.</td>
        </tr>
    </tfoot>
</table>
</div>