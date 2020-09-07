<?php

// require 'config.php';
require 'conexion.php';
$anio = ANO;

$sql = "SELECT
c.id_equipo,
c.gf,
c.dg,
c.pts,
c.anio,
e.grupo,
e.nombre equipo

FROM
clasificacion c
LEFT JOIN equipos e ON e.id_equipo = c.id_equipo
WHERE c.anio = $anio
ORDER BY e.grupo , c.pts DESC , c.dg DESC, c.gf DESC;";

$rs = mysqli_query($link, $sql);

if (!$rs) {
    header('Location: pagina-error.php?error=2 & detalle=Error en la consulta');
    die;
}

$i = 0;
while ($clasificacion = mysqli_fetch_assoc($rs)):
$grupo = $clasificacion['grupo'];
$idEquipo = $clasificacion['id_equipo'];



if ($i == 4) {
    $i=0;
}
    $i++;
    var_dump($i);
//for ($j='A'; $j <= 'H'; $j++) { 
  //for ($i=1; $i <=4 ; $i++) {     
    if ($i > 2)  {
        goto abajo1;
    }
    

    if ($grupo == 'A' && $i == 1 ) {    
        $nroPartido = 49;
   }  
   
    if ($grupo == 'B' && $i == 2 ) {    
        $nroPartido = 49;
   } 
   
   
   if ($grupo == 'C' && $i == 1 ) {    
        $nroPartido = 50;
    } 
    
    if ($grupo == 'D' && $i == 2 ) {    
        $nroPartido = 50;
    }  

    if ($grupo == 'E' && $i == 1 ) {    
        $nroPartido = 51;
    }  
    if ($grupo == 'F' && $i == 2 ) {    
        $nroPartido = 51;
    }  

    if ($grupo == 'G' && $i == 1 ) {    
        $nroPartido = 52;
    }  
    if ($grupo == 'H' && $i == 2 ) {    
        $nroPartido = 52;
    }  

   
    if ($grupo == 'B' && $i == 1 ) {    
        $nroPartido = 53;
    }  
    
    if ($grupo == 'A' && $i == 2 ) {    
        $nroPartido = 53;
    }  
    
    if ($grupo == 'D' && $i == 1 ) {    
        $nroPartido = 54;
    }  
    if ($grupo == 'C' && $i == 2 ) {    
        $nroPartido = 54;
    }  
    
    if ($grupo == 'F' && $i == 1 ) {    
        $nroPartido = 55;
    }  
    if ($grupo == 'E' && $i == 2 ) {    
        $nroPartido = 55;
    }  

    if ($grupo == 'H' && $i == 1 ) {    
        $nroPartido = 56;
        
    }  
    if ($grupo == 'G' && $i == 2 ) {    
        $nroPartido = 56;       
    } 
    
   
    
    $sql = "INSERT INTO octavos (
        nropartido,
        posicion,
        id_equipo, 
        anio 
        ) VALUES (
        $nroPartido,
        $i,
        $idEquipo,
        $anio        
        )";
    $res = mysqli_query($link, $sql);


  //}
  abajo1:;
//}
endwhile;
mysqli_close($link);