<?php

// ---------------Goles--------------
if ($goles1 > 31 || $goles1 < 0) {
    $errores .= 'Los goles del primer equipo debe ser menor o igual a 31 y positivos.<br>';
} 
if ($goles2 > 31 || $goles2 < 0) {
    $errores .= 'Los goles del segundo equipo debe ser menor o igual a 31 y positivos.<br>';
}

// ---------------Penales--------------
// ------No deben venir penales si el partido no estuvo empatado------
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