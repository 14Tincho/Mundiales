<?php $title = 'Mundial ' . SEDE . ' ' . ANO;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <a class="navbar-brand" href="nos-index.php"><?= $title ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_principal"
            aria-controls="navbar_principal" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar_principal">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menu_equipos" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Equipos</a>
                <div class="dropdown-menu" aria-labelledby="menu_equipos">
                    <a class="dropdown-item" href="nos-equipos-alta.php">Alta de Equipos</a>
                    <a class="dropdown-item" href="nos-equipos-listado.php">ABM de Equipos</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menu_partidos" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Partidos de fase</a>
                <div class="dropdown-menu" aria-labelledby="menu_partidos">
                    <a class="dropdown-item" href="nos-partidos-alta.php">Alta de partidos</a>
                    <a class="dropdown-item" href="nos-partidos-listado.php">ABM de partidos</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menu_partidos" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Partidos de eliminatorias</a>
                <div class="dropdown-menu" aria-labelledby="menu_partidos">
                    <a class="dropdown-item" href="nos-octavos-listado.php">Octavos</a>
                    <a class="dropdown-item" href="nos-cuartos-listado.php">Cuartos</a>
                    <a class="dropdown-item" href="nos-semis-listado.php">Semifinal</a>
                    <a class="dropdown-item" href="nos-finales-listado.php">Final</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="nos-guardar-pos-tot.php">Guardar Posicion Total</a>                  
            </li>        
            <li class="nav-item">
                <a class="nav-link" href="login-derivar.php" onclick="return confirm('¿Seguro que quiere cerrar sesión?');">Cerrar Sesión</a>
            </li>
        </ul>

    </div>
</nav>
<div class="contenedor-principal container">
