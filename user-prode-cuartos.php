<?php
    include 'user-inicio-sesion.php';
    include 'conexion.php';
    $errores = '';
    $anio = ANO;

            if ( !empty($_GET) ) { 
                $lvCambio = $_GET;
                // actulizacion de las modificacion con el boton guardar           

                foreach($lvCambio as $lvIndice => $resultado) {
                
                //busco si ya existe en la tabla prode cuartos
                $sql = "SELECT * FROM prodecuartos WHERE id_user = $id_user AND nropartido = $lvIndice AND anio = '$anio'";
                $rs = mysqli_query($link, $sql);


                if (mysqli_num_rows($rs) == 0 ) {
                //Agrego el registro a la tabla prode en el sql
                $sql = "INSERT INTO prodecuartos(id_user, nropartido, lv, anio) 
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
                        $mensaje_usuario = 'Se produjo un error al intentar insertar en la tabla prode cuartos.'
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
                    $sql = "UPDATE prodecuartos SET lv = '$resultado' 
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
                            $mensaje_usuario = 'Se produjo un error al intentar actualizar la tabla prode cuartos.'
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
                // Cuando entra por primera vez al prode cuartos
                $prodeCuartosUser = "prodecuartos" . $id_user;
        
                $result = mysqli_query($link, "SHOW TABLES LIKE '$prodeCuartosUser'");
                if(mysqli_fetch_row($result) == true) {
                    $sql = "DROP VIEW $prodeCuartosUser";
                    $rs = mysqli_query($link, $sql);
                } 
                    $sql = "CREATE VIEW $prodeCuartosUser AS SELECT * FROM prodecuartos WHERE id_user = $id_user AND anio = $anio";
                    $rs = mysqli_query($link, $sql);
                
                
                $sql = "SELECT 
                c.nropartido,
                c.nropartidooctavo,
                c.posicion,
                e.nombre,
                pc.lv 
                FROM cuartos c 
                LEFT JOIN equipos e ON e.id_equipo = c.id_equipo 
                LEFT JOIN $prodeCuartosUser pc ON pc.nropartido = c.nropartido
                WHERE c.anio = $anio
                ORDER BY c.nropartido , c.posicion";
                
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
             

$titulo = 'Cuartos';
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
    header('window.location: user-prode-cuartos.php');
}

?>
    <h1 class="text-center marginBottom40"><?= $titulo ?></h1>
    <?php



include 'user-prode-cuartos-div.php';
include 'footer.php';

