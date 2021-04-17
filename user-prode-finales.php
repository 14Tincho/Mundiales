<?php
    include 'user-inicio-sesion.php';
    include 'conexion.php';
    $errores = '';
    $anio = ANO;

            if ( !empty($_GET) ) { 
                $lvCambio = $_GET;
                // actulizacion de las modificacion con el boton guardar           

                foreach($lvCambio as $lvIndice => $resultado) {
                
                //busco si ya existe en la tabla prode finales
                $sql = "SELECT * FROM prodefinales WHERE id_user = $id_user AND nropartido = $lvIndice AND anio = '$anio'";
                $rs = mysqli_query($link, $sql);


                if (mysqli_num_rows($rs) == 0 ) {
                //Agrego el registro a la tabla prode en el sql
                $sql = "INSERT INTO prodefinales(id_user, nropartido, lv, anio) 
                        VALUES ('$id_user','$lvIndice','$resultado','$anio')";                    
                $rs = mysqli_query($link, $sql);

                    if (!$rs) {
                        date_default_timezone_set(ZONA_HORARIA);
                        $fecha = date('d/m/Y H:i:s');
                        $error_detalle = mysqli_error($link);
                        $error_numero = mysqli_errno($link);
                        $fh = fopen(ARCHIVO_LOG_ERRORES, 'a');
                        fwrite($fh, "$fecha:\tError $error_numero\t$error_detalle\r\n");
                        fclose($fh);
                        $mensaje_usuario = 'Se produjo un error al intentar insertar en la tabla prode finales.'
                            . "(Error: $error_numero)";
                        die($mensaje_usuario);
                    }

//-------------------------------------------------------prueba
else {
    if ($rs < '0') {
        $mensaje = "No se pudo modificar el resultado. Puede ser que el mismo haya sido eliminado.";
        $mensajeCssClass = 'alert-danger';
    } else {
        $mensaje = "Se subieron los resultados.";
        $mensajeCssClass = 'alert-success';
    }
}



                }else {
                    $sql = "UPDATE prodefinales SET lv = '$resultado' 
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
                            $mensaje_usuario = 'Se produjo un error al intentar actualizar la tabla prode finales.'
                                . "(Error: $error_numero)";
                            die($mensaje_usuario);                          
                            }

//-------------------------------------------------------prueba
else {
    if ($rs == '0') {
        $mensaje = "No se pudo modificar el resultado.Puede ser que el mismo haya sido eliminado.";
        $mensajeCssClass = 'alert-danger';
    } else {
        $mensaje = "Los resultados fueron guardados.";
        $mensajeCssClass = 'alert-success';
    }
}








                        }
                }
                
            }
                // Cuando entra por primera vez al prode finales
                $prodefinalesUser = "prodefinales" . $id_user;
        
                $result = mysqli_query($link, "SHOW TABLES LIKE '$prodefinalesUser'");
                if(mysqli_fetch_row($result) == true) {
                    $sql = "DROP VIEW $prodefinalesUser";
                    $rs = mysqli_query($link, $sql);
                } 
                    $sql = "CREATE VIEW $prodefinalesUser AS SELECT * FROM prodefinales WHERE id_user = $id_user AND anio = $anio";
                    $rs = mysqli_query($link, $sql);
                
                
                $sql = "SELECT 
                s.nropartido,
                s.nropartidosemi,
                s.posicion,
                e.nombre,
                ps.lv 
                FROM finales s
                LEFT JOIN equipos e ON e.id_equipo = s.id_equipo 
                LEFT JOIN $prodefinalesUser ps ON ps.nropartido = s.nropartido
                WHERE s.anio = $anio
                ORDER BY s.nropartido , s.posicion";
                
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
             

$titulo = 'Finales';
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
    header('window.location: user-prode-finales.php');
}

?>
    <h1 class="text-center marginBottom40"><?= $titulo ?></h1>
    <?php



include 'user-prode-finales-div.php';
include 'footer.php';

