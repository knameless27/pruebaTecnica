<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href="img/cypher.jpg"/>
  <title>Importando Txt a MYSQL</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/cargando.css">
  <link rel="stylesheet" type="text/css" href="css/cssGenerales.css">
</head>
<body>
<h1>AGREGANDO CLIENTE</h1>
<div>
    <form>
        
        <div class="col-md-6 form-group">
        <label>
            Correo:
        </label> 
        <input  type="text" name="email" id="email" require>
        </div>
        
        <div class="col-md-6 form-group">
        <label>
            Nombre:
        </label> 
        <input type="text" name="nombre" id="nombre" require>
        </div>

        <div class="col-md-6 form-group">
        <label>
            Codigo:
        </label> 
        <select name="codigo" id="codigo" require>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
            <option value="3">En Espera</option>
        </select>
        </div>
        <input class="btn btn-success" type="submit" value="Agregar Cliente"><br><br>
        <a class="btn btn-warning" href="index.php">Regresar</a>
    </form>
</div>
<?php

include('config.php');
error_reporting(0);
$email = $_GET['email'];
$nombre = $_GET['nombre'];
$codigo = $_GET['codigo'];

if ($email != null || $nombre != null || $codigo != null) {
    $sql ="INSERT INTO `clientes`(`id`, `email`, `nombre`, `codigo`) VALUES (null,'".$email."','".$nombre."','".$codigo."')";
    mysqli_query($con, $sql);
    if ($nombre = 1) {
        header("location:index.php");
    }
}

?>
<script src="js/jquery.min.js"></script>
<script src="'js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });      
});
</script>

</body>
</html>