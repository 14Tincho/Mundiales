<?php                            
$sql = "SELECT 
p.puntosfases, 
p.puntosoctavos, 
p.puntoscuartos, 
p.puntossemis, 
p.puntosfinales, 
p.puntostotales, 
u.username 
FROM posiciontotales p 
LEFT JOIN user u ON p.id_user = u.id_user 
WHERE p.anio = $anio 
ORDER BY p.puntostotales DESC";

$rs = mysqli_query($link, $sql);
if (!$rs) {
    header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');                    
    die;
}
mysqli_close($link);
if (mysqli_num_rows($rs) == 0 ) {
    header('Location: user-index.php');
    die;
}
?>
<div class="col-xl-12 table-responsive-sm">
<h3 class="text-white text-left col-12">General</h3>
    <table class="table table-danger table-striped">
        <thead>
            <tr>
                <th class="text-center" scope="col">Posicion</th>
                <th class="text-center" scope="col">Usuario</th>
                <th class="text-center" scope="col">Puntos Totales</th>
                <th class="text-center" scope="col">Puntos Fase</th>
                <th class="text-center" scope="col">Puntos Octavos</th>
                <th class="text-center" scope="col">Puntos Cuartos</th>
                <th class="text-center" scope="col">Puntos Semis</th>
                <th class="text-center" scope="col">Puntos Finales</th>
            </tr>
        </thead>

        <tbody>
        <?php 
            if( mysqli_num_rows($rs) > 20 ){
                $j = 20;
            }else {
                $j = mysqli_num_rows($rs);  
            }
            for ($i=1; $i <= $j; $i++) { 
            $posiciones = mysqli_fetch_assoc($rs);
            ?>                          
                <tr>
                    <td class="text-center"><strong><?= $i ?></strong></td>
                    <td class="text-center"><strong><?=$posiciones['username']?></strong></td>
                    <td class="text-center"><strong><?=$posiciones['puntostotales']?></strong></td>
                    <td class="text-center"><?=$posiciones['puntosfases']?></td>
                    <td class="text-center"><?=$posiciones['puntosoctavos']?></td>
                    <td class="text-center"><?=$posiciones['puntoscuartos']?></td>
                    <td class="text-center"><?=$posiciones['puntossemis']?></td>
                    <td class="text-center"><?=$posiciones['puntosfinales']?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>