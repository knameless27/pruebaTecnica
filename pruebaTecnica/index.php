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

<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>


<nav class="navbar navbar-expand-lg navbar-light navbar-dark fixed-top" style="background-color: #563d7c !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <a href="index.php"> 
          <img src="img/cypher.jpg" width="80">
        </a>
      </li>
    </ul>
    <div class="my-2 my-lg-0">
      <h5 class="navbar-brand">TXT A MYSQL </h5>
    </div>
</nav>


<div class="container">

<h3 class="text-center">
    GEMA SAS Adjuntar Archivo Txt a MYSQL
</h3>
<hr>
<br><br>


 <div class="row">
    <div class="col-md-12">
      <form action="obteniendotxt.php" method="POST" enctype="multipart/form-data"/>
        <div class="file-input text-center">
            <input  type="file" name="dataCliente" id="file-input" class="file-input__input"/>
            <label class="file-input__label" for="file-input">
              <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
              <span>Adjuntar Archivo Txt</span></label>
          </div>
      <div class="text-center mt-5">
          <input type="submit" name="subir" class="btn-enviar" value="Enviar Txt"/>
      </div>
      </form>
      <a class="btn btn-success" href="add.php">Agregar registro</a>
    </div>
    
    <div class="col-md-12" id="activos">
      <br>
    <a class="btn btn-light" href="#activos">Activos</a>
    <a class="btn btn-light" href="#inactivos">Inactivos</a>
    <a class="btn btn-light" href="#espera">En espera</a>
    <br>
  <?php
  header("Content-Type: text/html;charset=utf-8");
  include('config.php');
  $sqlClientes = ("SELECT * FROM clientes WHERE codigo=1");
  $queryData   = mysqli_query($con, $sqlClientes);
  $total_client = mysqli_num_rows($queryData);
  ?>

      <h6 class="text-center">
        Clientes Activos <strong>(<?php echo $total_client; ?>)</strong>
      </h6>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
               <th>Email</th>
              <th>Nombre</th>
              <th>Codigo</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            while ($data = mysqli_fetch_array($queryData)) { ?>
            <tr>
              <th scope="row"><?php echo $i++; ?></th>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['nombre']; ?></td>
              <td><?php echo $data['codigo']; ?></td>
              <td>
                <a class="btn btn-info"   href="formedit.php?id=<?php echo $data['id'];?>">Editar</a>
                <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id'];?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>

    </div>

    <div class="col-md-12" id="inactivos">
    <a class="btn btn-light" href="#activos">Activos</a>
    <a class="btn btn-light" href="#inactivos">Inactivos</a>
    <a class="btn btn-light" href="#espera">En espera</a>
    <br>
  <?php
  $sqlClientes = ("SELECT * FROM clientes WHERE codigo=2");
  $queryData   = mysqli_query($con, $sqlClientes);
  $total_client = mysqli_num_rows($queryData);
  ?>

      <h6 class="text-center">
        Clientes Inactivos <strong>(<?php echo $total_client; ?>)</strong>
      </h6>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
               <th>Email</th>
              <th>Nombre</th>
              <th>Codigo</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            while ($data = mysqli_fetch_array($queryData)) { ?>
            <tr>
              <th scope="row"><?php echo $i++; ?></th>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['nombre']; ?></td>
              <td><?php echo $data['codigo']; ?></td>
              <td>
                <a class="btn btn-info"  href="formedit.php?id=<?php echo $data['id'];?>">Editar</a>
                <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id'];?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>

    </div>

    <div class="col-md-12" id="espera">
    <a class="btn btn-light" href="#activos">Activos</a>
    <a class="btn btn-light" href="#inactivos">Inactivos</a>
    <a class="btn btn-light" href="#espera">En espera</a>
    <br>
  <?php
  $sqlClientes = ("SELECT * FROM clientes WHERE codigo=3");
  $queryData   = mysqli_query($con, $sqlClientes);
  $total_client = mysqli_num_rows($queryData);
  ?>

      <h6 class="text-center">
        Clientes En Espera <strong>(<?php echo $total_client; ?>)</strong>
      </h6>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
               <th>Email</th>
              <th>Nombre</th>
              <th>Codigo</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            while ($data = mysqli_fetch_array($queryData)) { ?>
            <tr>
              <th scope="row"><?php echo $i++; ?></th>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['nombre']; ?></td>
              <td><?php echo $data['codigo']; ?></td>
              <td>
                <a class="btn btn-info"   href="formedit.php?id=<?php echo $data['id'];?>">Editar</a>
                <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id'];?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>

    </div>
  </div>

</div>
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 github:
    <a class="text-dark" href="https://github.com/crixus12cr">crixus12cr</a>
  </div>
  <!-- Copyright -->
</footer>


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