<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php

require_once 'conexion.php';

$sql = "SELECT * FROM clasificacion";

$rs = mysqli_query($link, $sql);

mysqli_close($link);
        for ($j='A'; $j <= 'H' ; $j++) {  ?>
        <div class="col-lg-6 table-responsive-sm">
        <h5 class="text-white text-left col-12">Grupo <?=$j?></h5>
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">Equipo</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PE</th>
                        <th scope="col">PP</th>
                        <th scope="col">GF</th>
                        <th scope="col">GC</th>
                        <th scope="col">DF</th>
                        <th scope="col">PTS</th>
                    </tr>
                </thead>
                <tbody>
                        <?php while ($clasificacion = mysqli_fetch_assoc($rs)) :?>
                        <tr>
                            <td><?= $clasificacion['id_equipo'] ?></td>
                            <td><?=$clasificacion['pj']?></td>
                            <td><?=$clasificacion['pg']?></td>
                            <td><?=$clasificacion['pe']?></td>
                            <td><?=$clasificacion['pp']?></td>
                            <td><?=$clasificacion['gf']?></td>
                            <td><?=$clasificacion['gc']?></td>
                            <td><?=$clasificacion['dg']?></td>
                            <td><?=$clasificacion['dg']?></td>
                            <td><?=$clasificacion['pts']?></td>
                        </tr>
                        <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <?php } ?>
</body>
</html>
