<?php
    include 'user-inicio-sesion.php';
    include 'conexion.php';
    $errores = '';
    $anio = ANO;

            if ( !empty($_GET) ) { 
                $lvCambio = $_GET;
                // actulizacion de las modificacion con el boton guardar           

                foreach($lvCambio as $lvIndice => $resultado) {
                
                //busco si ya existe en la tabla prode octavos
                $sql = "SELECT * FROM prodeoctavos WHERE id_user = $id_user AND nropartido = $lvIndice AND anio = '$anio' ";
                $rs = mysqli_query($link, $sql);


                if (mysqli_num_rows($rs) == 0 ) {
                //Agrego el registro a la tabla prode en el sql
                $sql = "INSERT INTO prodeoctavos(id_user, nropartido, lv, anio) 
                        VALUES ('$id_user','$lvIndice','$resultado', '$anio')";                    
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
                    $sql = "UPDATE prodeoctavos SET lv = '$resultado' 
                    WHERE id_user = $id_user AND nropartido = $lvIndice";
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
                // Cuando entra por primera vez al prode octavos
                $prodeOctavosUser = "prodeoctavos" . $id_user;
        
                $result = mysqli_query($link, "SHOW TABLES LIKE '$prodeOctavosUser'");
                if(mysqli_fetch_row($result) == true) {
                    $sql = "DROP VIEW $prodeOctavosUser";
                    $rs = mysqli_query($link, $sql);
                } 
                    $sql = "CREATE VIEW $prodeOctavosUser AS SELECT * FROM prodeoctavos WHERE id_user = $id_user AND anio = $anio";
                    $rs = mysqli_query($link, $sql);
                    
                
                $sql = "SELECT 
                o.nropartido,
                o.posicion,
                e.nombre,
                e.grupo,
                po.lv 
                FROM octavos o 
                LEFT JOIN equipos e ON e.id_equipo = o.id_equipo 
                LEFT JOIN $prodeOctavosUser po ON po.nropartido = o.nropartido
                WHERE o.anio = $anio
                ORDER BY o.nropartido , o.posicion";
                
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
             

$titulo = 'Octavos';
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
    header('window.location: user-prode-octavos.php');
}

?>
    <h1 class="text-center marginBottom40"><?= $titulo ?></h1>
    <?php



include 'user-prode-octavos-div.php';
include 'footer.php';

