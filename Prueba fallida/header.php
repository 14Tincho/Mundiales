<?php
$anio = '2018';

if (!isset($titulo)) {
    $titulo = 'Mundial Rusia 2018';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <a class="navbar-brand" href="index.php">Mundiales</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_principal"
            aria-controls="navbar_principal" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar_principal">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menu_equipos" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Equipos</a>
                <div class="dropdown-menu" aria-labelledby="menu_equipos">
                    <a class="dropdown-item" href="equipos-listado.php">Listado de Equipos</a>
                    <a class="dropdown-item" href="equipos-alta.php">Alta de Equipos</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menu_equipos" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Fixture</a>
                <div class="dropdown-menu" aria-labelledby="menu_equipos">
                    <a class="dropdown-item" href="fixture-alta.php">Crear/Modificar</a>
                    <a class="dropdown-item" href="resultado-fixture-alta.php">Mis resultados</a>
                </div>
            </li>        
            <li class="nav-item">
                <a class="nav-link" href="salir.php" onclick="return confirm('¿Seguro que quiere cerrar sesión?');">Cerrar Sesión</a>
            </li>
        </ul>

    </div>
</nav>
<!-- <img src="imagenes/background.jpg" class="img-fluid" max-width="100%" height="auto" alt="Responsive image"> -->
<main role="main">
<div class="contenedor-principal container">
