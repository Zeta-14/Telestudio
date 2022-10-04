<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap 4-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!--Iconos-->
        <script src="https://kit.fontawesome.com/18f6ccad15.js" crossorigin="anonymous"></script>
        <!--css-->
        <link rel="stylesheet" href="estilos.css">
        <title>Telestudio</title>
    </head>


<body>


    <!--Boostrap javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--End Boostrap javascript-->
    <!--Barra Navegacion-->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Telestudio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cuenta
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="login.php">Iniciar Sesión</a></li>
                  <li><a class="dropdown-item" href="register.php">Registrarse</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Logout.php">Cerrar Sesión</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
      <!--Fin barra navegación-->
    
    <div class="container p-4">
    
   

    <?php
    session_start();
    $var_session = $_SESSION['usuario']; 
    if (!isset($var_session)){
        
      header('location:login.php');
        
        die();
       
    }

    ?>
    <!--contenido de la pagina-->

    <?php

        echo "<h1 class='ok'> Bienvenido, $var_session </h1><br> puedes ir al home desde aquí: <a href='index.php'>Ir a Pagina principal</a>"

    ?>

    <!--Fin contenido pagina-->
    </div>
        

        </body>
        
        </html>
        