<?php
    include 'user-inicio-sesion.php';
    include 'conexion.php';
    $errores = '';
    $anio = ANO;

            if ( !empty($_GET) ) { 
                $levCambio = $_GET;
                // actulizacion de las modificacion con el boton guardar           

                foreach($levCambio as $levIndice => $resultado) {
                
                //busco si ya existe en la tabla prode
                $sql = "SELECT * FROM prode WHERE id_user = $id_user AND id_partido = $levIndice";
                $rs = mysqli_query($link, $sql);


                if (mysqli_num_rows($rs) == 0 ) {
                //Agrego el registro a la tabla prode en el sql
                $sql = "INSERT INTO prode(id_user, id_partido, lev) 
                        VALUES ('$id_user','$levIndice','$resultado')";                    
                $rs = mysqli_query($link, $sql);

                    if (!$rs) {
                        date_default_timezone_set(ZONA_HORARIA);
                        $fecha = date('d/m/Y H:i:s');
                        $error_detalle = mysqli_error($link);
                        $error_numero = mysqli_errno($link);
                        $fh = fopen(ARCHIVO_LOG_ERRORES, 'a');
                        fwrite($fh, "$fecha:\tError $error_numero\t$error_detalle\r\n");
                        fclose($fh);
                        $mensaje_usuario = 'Se produjo un error al intentar insertar en la tabla prode.'
                            . "(Error: $error_numero)";
                        die($mensaje_usuario);
                    }

//-------------------------------------------------------prueba
else {
    if ($rs < '0') {
        $mensaje = "No se pudo modificar el  Puede ser que el mismo haya sido eliminado.";
        $mensajeCssClass = 'alert-danger';
    } else {
        $mensaje = "Se subieron los resultados.";
        $mensajeCssClass = 'alert-success';
    }
}



                }else {
                    $sql = "UPDATE prode SET lev = '$resultado' 
                    WHERE id_user = $id_user AND id_partido = $levIndice";
                    $rs = mysqli_query($link, $sql);
                    if (!$rs) {
                            date_default_timezone_set(ZONA_HORARIA);
                            $fecha = date('d/m/Y H:i:s');
                            $error_detalle = mysqli_error($link);
                            $error_numero = mysqli_errno($link);
                            $fh = fopen(ARCHIVO_LOG_ERRORES, 'a');
                            fwrite($fh, "$fecha:\tError $error_numero\t$error_detalle\r\n");
                            fclose($fh);
                            $mensaje_usuario = 'Se produjo un error al intentar actualizar la tabla prode.'
                                . "(Error: $error_numero)";
                            die($mensaje_usuario);                          
                            }

//-------------------------------------------------------prueba
else {
    if ($rs == '0') {
        $mensaje = "No se pudo modificar el  Puede ser que el mismo haya sido eliminado.";
        $mensajeCssClass = 'alert-danger';
    } else {
        $mensaje = "Los resultados fueron guardados.";
        $mensajeCssClass = 'alert-success';
    }
}








                        }
                }
                
            }
                // Cuando entra por primera vez al prode 
                $prodeUser = "prode" . $id_user;
        
                $result = mysqli_query($link, "SHOW TABLES LIKE '$prodeUser'");
                if(mysqli_fetch_row($result) == true) {
                    $sql = "DROP VIEW $prodeUser";
                    $rs = mysqli_query($link, $sql);
                } 
                    $sql = "CREATE VIEW $prodeUser AS SELECT * FROM prode WHERE id_user = $id_user";
                    $rs = mysqli_query($link, $sql);
                    
                
                
                $sql = "SELECT
                p.partido,
                p.id_partido,
                e.grupo,
                e.nombre equipo1,
                eq.nombre equipo2,
                pr.lev lev
                
                FROM
                partidos p
                LEFT JOIN equipos e ON e.id_equipo = p.id_equipo1
                LEFT JOIN equipos eq ON eq.id_equipo = p.id_equipo2
                LEFT JOIN $prodeUser pr ON pr.id_partido = p.id_partido
                WHERE p.anio = $anio 
                ORDER BY e.grupo, p.partido";
                
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
             

$titulo = 'Fase de grupos';
include 'user-header.php';


if (isset($mensaje)) {
    ?>
    <div class="alert <?= $mensajeCssClass ?> alert-dismissible fade show" role="alert">
        <?= $mensaje ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
    header('window.location: user-prode-fase.php');
}

?>
    <h1 class="text-center"><?= $titulo ?></h1>
    <?php



include 'user-prode-fase-div.php';
include 'footer.php';

