<?php $title = 'Mundial ' . SEDE . ' ' . ANO;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <a class="navbar-brand" href="user-index.php"><?=$title?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_principal"
            aria-controls="navbar_principal" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar_principal">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menu_prode" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Prode</a>
                <div class="dropdown-menu" aria-labelledby="menu_prode">
                    <a class="dropdown-item" href="user-prode-fase.php">Fase de Grupos</a>
                    <a class="dropdown-item" href="user-prode-8.php">Octavos</a>
                    <a class="dropdown-item" href="user-prode-4.php">Cuartos</a>
                    <a class="dropdown-item" href="user-prode-2.php">Semifinal</a>
                    <a class="dropdown-item" href="user-prode-1.php">Final</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menu_prode" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Fixture</a>
                <div class="dropdown-menu" aria-labelledby="menu_prode">
                    <a class="dropdown-item" href="user-fixture-fase.php">Fase de Grupos</a>
                    <a class="dropdown-item" href="user-fixture-eliminatorias.php">Eliminatorias</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="user-tabla-posiciones.php">Tabla de posiciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="user-comojugar.php">Como Jugar</a>
            </li>          
            <li class="nav-item">
                <a class="nav-link" href="user-cerrar-sesion.php" onclick="return confirm('¿Seguro que quiere cerrar sesión?');">Cerrar Sesión</a>
            </li>      
        </ul>

    </div>
</nav>
<main role="main">
<div class="contenedor-principal container">
