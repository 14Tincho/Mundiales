<table class="table table-sm table-striped table-hover text-center table-listado">
    <thead>
        <tr>
            <th>Id</th>
            <th class="text-left">Nombre</th>
            <th>Grupo</th>
            <th>Posicion</th>
            <th>Año</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($equipo = mysqli_fetch_assoc($rs)) : 
           
        ?>
        <tr class="text-white">
            <td><?= $equipo['id_equipo'] ?></td>
            <td class="text-left"><?= $equipo['nombre'] ?></td>
            <td><?= $equipo['grupo'] ?></td>
            <td><?= $equipo['posicion'] ?></td>
            <td><?= $equipo['anio'] ?></td>
            <td>
                <a href="equipos-editar.php?id_editar=<?= $equipo['id_equipo'] ?>" class="a-listado">Editar</a>
            </td>
            <td>
                <a href="equipos-eliminar.php?id=<?= $equipo['id_equipo']?>" onclick="return confirm('Estás seguro de querer el equipo <?= $equipo['nombre']; ?>?');" class="a-listado">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
    <tfoot>
        <tr class="table-tfoot text-center">
            <td colspan="10">Se encontraron <?= $cantidad_de_equipos ?> equipos en total.</td>
        </tr>
    </tfoot>
</table>