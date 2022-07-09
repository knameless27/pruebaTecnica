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
    <h1>ACTUALIZANDO CLIENTE</h1>
        <?php

                include('config.php');
                error_reporting(0);
                $id = $_GET['id'];
                $sql = "SELECT * FROM clientes WHERE id='".$id."'";
                $result = mysqli_query($con, $sql);
                while ($data=mysqli_fetch_assoc($result)){
                ?>
    <div>    
        <form class="col-md-6 form-group">
            <label >
                ID:
            </label><br>
            <input name="id" value="<?php echo $data['id']; ?>" readonly>
            <br>
            <label>
                Correo:
            </label> <br>
            <input type="text" name="email" id="email" value="<?php echo $data['email']; ?>" require">
            <br>
            <label>
                Nombre:
            </label> <br>
            <input type="text" name="nombre" id="nombre" value="<?php echo $data['nombre']; ?>" require">
            <br>
            <label>
                Codigo:
            </label> <br>
            <select name="codigo" id="codigo" require">
                <option value="1">Netflix</option>
                <option value="2">Amazon</option>
                <option value="3">Crunchyroll</option>
            </select><br> <br>
            <input class="btn btn-success" type="submit" value="Actualizar Cliente"><br> <br>
            <a class="btn btn-warning" href="index.php">Regresar</a>
        </form>
    </div>
    <?php }?>  
    <?php

        include('config.php');
        error_reporting(0);
        $id = $_GET['id'];
        $email = $_GET['email'];
        $nombre = $_GET['nombre'];
        $codigo = $_GET['codigo'];

        if ($email != null || $nombre != null || $codigo != null) {
            mysqli_query($con, "UPDATE clientes set email='$email', nombre='$nombre', codigo='$codigo' where id='$id'");
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