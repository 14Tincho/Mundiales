<?php

// ---------------EQUIPOS--------------

// --------no repeticion de equipos------

if(count($arrayEquipos) > count(array_unique($arrayEquipos))){
  echo "¡Hay repetidos!";
}else{
  echo "No hay repetidos";
}



