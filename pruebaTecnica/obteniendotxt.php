<?php
require('config.php');
$tipo       = $_FILES['dataCliente']['type'];
$tamanio    = $_FILES['dataCliente']['size'];
$archivotmp = $_FILES['dataCliente']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(",", $linea);

        $email                = !empty($datos[0])  ? ($datos[0]) : '';
        $nombre                = !empty($datos[1])  ? ($datos[1]) : '';
        $codigo               = !empty($datos[2])  ? ($datos[2]) : '';

        // if (!empty($codigo)) {
        //     $checkemail_duplicidad = ("SELECT codigo FROM clientes WHERE codigo='" . ($codigo) . "' ");
        //     $ca_dupli = mysqli_query($con, $checkemail_duplicidad);
        //     $cant_duplicidad = mysqli_num_rows($ca_dupli);
        // }
        $cant_duplicidad = 0;
        //No existe Registros Duplicados
        if ($cant_duplicidad == 0) {

            $insertarData = "INSERT INTO clientes( 
    email,
    nombre,
    codigo
) VALUES(
    '$email',
    '$nombre',
    '$codigo'
)";
            mysqli_query($con, $insertarData);
        }
        /**Caso Contrario actualizo el o los Registros ya existentes*/
        else {
            $updateData =  ("UPDATE clientes SET 
        email='" . $email . "',
		nombre='" . $nombre . "',
        codigo='" . $codigo . "'  
        WHERE codigo='" . $codigo . "'
    ");
            $result_update = mysqli_query($con, $updateData);
        }
    }

    $i++;
}
header("location:index.php");
?>

<a href="index.php">Atras</a>