<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Futbol</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark" style="background-color: #497d36;">
        <a class="navbar-brand" href="index.html">Fútbol Argento <ion-icon name="football" style="vertical-align:-4px;"></ion-icon></a>
        <!--<ul class="navbar-nav ml-auto mr-5">
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success my-2 my-sm-0" type="submit"><ion-icon name="search"></ion-icon></button>
            </form>
        </ul>-->
        <!--<a class='btn btn-primary my-2 my-sm-0 mr-3' type='button' href='#'>Login</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="equipos.html">Equipos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="form-post.html">Quiero postularme para un equipo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="form-apd.html">Quiero ingresar como patrocinador</a>
                  </li>
            </ul>
        </div>
      </nav>
    <!-- /Navbar -->
    
    <!-- Login -->
    <div class="container shadow-lg bg-white p-2 needs-validation" style="border-radius: 30px; max-width: 450px; height: 360px; margin-top: 10vh;" novalidate>
        <h4 class="text-center my-4">Iniciar Sesión</h4>
        <form method="POST" action="#" class="mx-2">
          <div class="form-group">
            <label for="loginEmail">Correo Electronico</label>
            <input type="email" name="Email_login" class="form-control" id="loginEmail" aria-describedby="emailHelp" required>
          </div>
          <div class="form-group">
            <label for="loginPass">Contraseña</label>
            <input type="password" name="Contraseña_login" class="form-control" id="loginPass" required>
          </div>
          <button type="submit" name="login" value="login" class="btn btn-primary">Enviar</button>
          <p href="register.php" class="text-primary ml-2 d-inline disabled" data-toggle="tooltip" data-placement="right" title="Puedes solicitar una cuenta postulandote para un equipo, o solicitando apadrinamiento ">Quiero solicitar una cuenta <ion-icon name="help-circle-outline" style="pointer-events: none;"></ion-icon></p>
        </form>
      </div>
      <!-- /login -->
    <!-- Optional JavaScript; choose one of the two! -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->

    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

  </body>
</html>