<?php

// ---------------Equipo1 y Equipo2--------------
// ----------Busco el id de equipo1 ,equipo2 y grupo---------
include 'conexion.php';
$sql = "SELECT id_equipo, grupo FROM equipos WHERE nombre = '$equipo1'";             
$rs = mysqli_query($link, $sql);
if (mysqli_num_rows($rs) !== 1 ) {
header('Location: nos-partidos-editar.php');
die;
}
$array_equipo = mysqli_fetch_assoc($rs);
$idEquipo1 = $array_equipo['id_equipo'];
$grupo1 = $array_equipo['grupo'];

$sql = "SELECT id_equipo, grupo FROM equipos WHERE nombre = '$equipo2'";             
$rs = mysqli_query($link, $sql);
if (mysqli_num_rows($rs) !== 1 ) {
header('Location: nos-partidos-editar.php');
die;
}
$array_equipo = mysqli_fetch_assoc($rs);
$idEquipo2 = $array_equipo['id_equipo'];
$grupo2 = $array_equipo['grupo'];
mysqli_close($link);


// --------Nombre repetido de equipos------
if ($equipo1 != $equipo1Ant) {
    include 'conexion.php';
    $sql = "SELECT * FROM partidos WHERE id_equipo1 = '$idEquipo1' or id_equipo2 =  '$idEquipo1';";
    $rs = mysqli_query($link,$sql);
    mysqli_close($link);
    if (mysqli_num_rows($rs) >= 3){
    $errores .= "'$equipo1' ya existe 3 veces.<br>";
    }
}
if ($equipo2 != $equipo2Ant) {
    include 'conexion.php';
    $sql = "SELECT * FROM partidos WHERE id_equipo2 = '$idEquipo2' or id_equipo2 =  '$idEquipo2';";
    $rs = mysqli_query($link,$sql);
    mysqli_close($link);
    if (mysqli_num_rows($rs) >= 3){
    $errores .= "'$equipo1' ya existe 3 veces.<br>";
    }
}
if ($equipo1 == $equipo2) {
    $errores .= 'Los equipos no pueden ser iguales.<br>';
}


// -------- Grupo de equipo1 y equipo2------
if ($grupo1 != $grupo2) {
    $errores .= 'Los equipos deben pertenecer al mismo grupo.<br>';
}else{
        if ($nropartido != $nropartidoAnt) {
            include 'conexion.php';
            $sql = "SELECT
                    p.partido,
                    e.grupo
                    FROM 
                    partidos p
                    LEFT JOIN equipos e ON e.id_equipo = p.id_equipo1
                    WHERE p.partido = '$nropartido' AND e.grupo='$grupo1';";
            $rs = mysqli_query($link,$sql);
            mysqli_close($link);
            if (mysqli_num_rows($rs) >= 1){
            $errores .= " Se repite el numero de partido '$nropartido' en el grupo '$grupo1' .<br>";
        }
    }
}


// ---------------Numero de partidos--------------
if ($nropartido > 6 || $nropartido <= 0) {
    $errores .= 'El nro de partido debe ser entre 1 y 6.<br>';
}
// ---------------No se repita mas de 8 veces el nro de partido--------------
if ($nropartido != $nropartidoAnt) {
    include 'conexion.php';
    $sql = "SELECT * FROM partidos WHERE partido = '$nropartido';";
    $rs = mysqli_query($link,$sql);
    mysqli_close($link);
    if (mysqli_num_rows($rs) >= 8){
    $errores .= " El numero de partidos '$nropartido' ya existe 8 veces .<br>";
    }
}



// ---------------Goles--------------
if ($goles1 > 31 || $goles1 < 0) {
    $errores .= 'Los goles del primer equipo debe ser menor o igual a 31 y positivos.<br>';
} 
if ($goles2 > 31 || $goles2 < 0) {
    $errores .= 'Los goles del segundo equipo debe ser menor o igual a 31 y positivos.<br>';
}



// ---------------Penales--------------
if ($goles1 != $goles2) {
    if ($penales1 != 0 || $penales2 != 0) {   
        $errores .= 'No corresponden penales si el partido no termino en empate.<br>';
    }elseif ($penales1 == $penales2) {
        if ($penales1 != 0) {    
            $errores .= 'Los penales no pueden terminar en empate.<br>';
        }    
    }
}
if ($penales1 > 13 || $penales1 < 0) {
    $errores .= 'Los penales del primer equipo debe ser menor o igual a 13 y positivos.<br>';
} 
if ($penales2 > 13 || $penales2 < 0) {
    $errores .= 'Los penales del segundo equipo debe ser menor o igual a 13 y positivos.<br>';
}
