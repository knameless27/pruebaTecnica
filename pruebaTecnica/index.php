<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link type="text/css" rel="shortcut icon" href="img/cypher.jpg" />
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

  <nav class="navbar navbar-expand-lg navbar-light navbar-dark fixed-top" style="background-color: #4972F2 !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <a href="index.php">
          <img src="img/cypher.jpg" width="80">
        </a>
      </li>
    </ul>
    <div class="my-2 my-lg-0">
      <h5 class="navbar-brand">Adjuntar Archivo Txt a MYSQL </h5>
      <a href="/proyectos/pruebaTecnica/pruebaTecnica/login.php"><button type="button" class="btn btn-primary">Iniciar sesión</button></a>
<a href="/proyectos/pruebaTecnica/pruebaTecnica/register.php"><button type="button" class="btn btn-secondary">Registrarse</button></a>
    </div>
  </nav>
  <hr>
  <br><br>

  <div class="row">
    <div class="col-md-12">
      <form action="obteniendotxt.php" method="POST" enctype="multipart/form-data">
        <div class="file-input text-center">
          <input type="file" name="dataCliente" id="file-input" class="file-input__input" />
          <label class="file-input__label" for="file-input">
            <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
            <span>Adjuntar Archivo Txt</span></label>
        </div>
        <div class="text-center mt-5">
          <input type="submit" name="subir" class="btn-enviar" value="Enviar Txt" />
        </div>
      </form>
      <a class="btn btn-success" href="add.php">Agregar registro</a>
    </div>
  </div>
  <hr>
  <section class="layout">
    <div class="leftSide">
      <div class="col-md-12" id="activos">
        <?php
        header("Content-Type: text/html;charset=utf-8");
        include('config.php');
        $sqlClientes = ("SELECT * FROM clientes WHERE codigo=1");
        $queryData   = mysqli_query($con, $sqlClientes);
        $total_client = mysqli_num_rows($queryData);
        ?>
        <div class="l1">
          <div class="card"><a href="https://www.netflix.com">
              <div class="card-image"><img class="imCard" src="https://play-lh.googleusercontent.com/TBRwjS_qfJCSj1m7zZB93FnpJM5fSpMA_wUlFDLxWAb45T9RmwBvQd5cWR5viJJOhkI" alt=""></div>
              <div class="category"> Netflix
            </a></div>
          <div class="heading"> Personas viendo Netflix actualmente: <br><strong> <?php echo $total_client; ?></strong></div>
        </div>
      </div>
    </div>
    <div class="col-md-12" id="inactivos">
      <?php
      $sqlClientes = ("SELECT * FROM clientes WHERE codigo=2");
      $queryData   = mysqli_query($con, $sqlClientes);
      $total_client = mysqli_num_rows($queryData);
      ?>
      <div class="l1">
        <div class="card"><a href="https://www.primevideo.com">
            <div class="card-image"><img class="imCard" src="https://images-na.ssl-images-amazon.com/images/G/01/gc/designs/livepreview/amazon_a_black_noto_email_v2016_us-main._CB624175556_.png" alt=""></div>
            <div class="category"> Amazon
          </a></div>
        <div class="heading"> Personas viendo Amazon actualmente: <br><strong> <?php echo $total_client; ?> </strong>
        </div>
      </div>
    </div>
    </div>
    <div class="col-md-12" id="espera">
      <?php
      $sqlClientes = ("SELECT * FROM clientes WHERE codigo=3");
      $queryData   = mysqli_query($con, $sqlClientes);
      $total_client = mysqli_num_rows($queryData);
      ?>
      <div class="l1">
        <div class="card"><a href="https://www.crunchyroll.com">
            <div class="card-image"><img class="imCard" src="https://assets.nintendo.com/image/upload/ar_16:9,b_auto:border,c_lpad/b_white/f_auto/q_auto/dpr_auto/ncom/es_LA/games/switch/c/crunchyroll-switch/hero" alt=""></div>
            <div class="category"> crunchyroll
          </a></div>
        <div class="heading"> Personas viendo Crunchyroll actualmente: <strong> <?php echo $total_client; ?> </strong>
        </div>
      </div>
    </div>
    </div>
    </div>
    <div class="table">
          <div class="col-md-12" id="activos">
            <br>
            <a class="btn btn-light" href="#activos">Netflix</a>
            <a class="btn btn-light" href="#inactivos">Amazon</a>
            <a class="btn btn-light" href="#espera">Crunchyroll</a>
            <br>
            <?php
            header("Content-Type: text/html;charset=utf-8");
            include('config.php');
            $sqlClientes = ("SELECT * FROM clientes WHERE codigo=1");
            $queryData   = mysqli_query($con, $sqlClientes);
            $total_client = mysqli_num_rows($queryData);
            ?>

            <h6 class="text-center">
              Usuarios de Netflix <strong>(<?php echo $total_client; ?>)</strong>
            </h6>

            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Email</th>
                  <th>Nombre</th>
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
                    <td>
                      <a class="btn btn-info" href="formedit.php?id=<?php echo $data['id']; ?>">Editar</a>
                      <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']; ?>">Eliminar</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>

          </div>
        </td>
        <td>
          <div class="col-md-12" id="inactivos">
            <br>
            <?php
            $sqlClientes = ("SELECT * FROM clientes WHERE codigo=2");
            $queryData   = mysqli_query($con, $sqlClientes);
            $total_client = mysqli_num_rows($queryData);
            ?>

            <h6 class="text-center">
              Usuarios de Amazon <strong>(<?php echo $total_client; ?>)</strong>
            </h6>

            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Email</th>
                  <th>Nombre</th>
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
                    <td>
                      <a class="btn btn-info" href="formedit.php?id=<?php echo $data['id']; ?>">Editar</a>
                      <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']; ?>">Eliminar</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>

          </div>
        </td>
        <td>
          <div class="col-md-12" id="espera">
            <br>
            <?php
            $sqlClientes = ("SELECT * FROM clientes WHERE codigo=3");
            $queryData   = mysqli_query($con, $sqlClientes);
            $total_client = mysqli_num_rows($queryData);
            ?>

            <h6 class="text-center">
              Usuarios de Crunchyroll <strong>(<?php echo $total_client; ?>)</strong>
            </h6>

            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Email</th>
                  <th>Nombre</th>
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
                    <td>
                      <a class="btn btn-info" href="formedit.php?id=<?php echo $data['id']; ?>">Editar</a>
                      <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']; ?>">Eliminar</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>

          </div>
        </td>
    </div>
  </section>
  </div>
  <br><br><br><br>
  <hr>
  <footer class="bg-light text-center text-lg-start" id="futer">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 github:
      <a class="text-dark" href="https://github.com/crixus12cr">crixus12cr</a>
      & <a class="text-dark" href="http://https://github.com/knameless27">Knameless27</a>
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