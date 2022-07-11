<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrarse</title>
    <link rel="stylesheet" href="/proyectos/pruebaTecnica/pruebaTecnica/css/rgister.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post">
        <div class="main">
            <div class="card">
                <div class="log">
                    <img src="https://pic.onlinewebfonts.com/svg/img_337531.png" width="80" class="lginImg">
                    <h1>Registrarse</h1>
                </div>
                <br>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Correo</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="juan">
                    <label for="floatingInput">Nombre</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Contraseña</label>
                </div>
                <br>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>¿que plataforma usas?</option>
                    <option value="1">Netflix</option>
                    <option value="3">Crunchyroll</option>
                    <option value="2">Amazon Prime Video</option>
                  </select>
                <br>
                <button type="button" class="btn btn-outline-primary">Registrarse</button>
                <br>
                <a href="login.php">Iniciar sesión!</a>
                <br>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>