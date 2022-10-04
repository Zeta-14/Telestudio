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
        <a class="navbar-brand" href="index.php"><img src="logo2.ico" alt="logo" width="30px" class="img-logo"> <i> Telestudio </i></a>
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
                  <li><a class="dropdown-item" href="cuenta.php">Cuenta</a></li>
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
   <!-- contenido pagina-->
   <lu>
    <fieldset>
      <legend> ; ) Cómo queda factorizada la siguiente expresión por factor comun por agrupacion?...</legend><br><br>
      <form action="f-c-ejercicios.php" method="post">
      <li> 2a + ax + 2x + x<sup>2</sup></li>
      <p><input type="radio" name="r6" value="incorrect"> 2x<sup>2</sup>(a + ax +1) </p>
      <p><input type="radio" name="r6" value="incorrect"> x(2a + a + 2 +1)</p>
      <p><input type="radio" name="r6" value="correct">(2a+2x) (1+x)</p>
      <p><input type="radio" name="r6" value="T.A"> Todas las Anteriores</p><br>

      <li> am - bm + an + bn</li>
      <p><input type="radio" name="r7" value="incorrect"> 2m(a-b)</p>
      <p><input type="radio" name="r7" value="correct"> (m+n)(a-b)</p>
      <p><input type="radio" name="r7" value="incorrect">2a(m-n + a+b)</p>
      <p><input type="radio" name="r7" value="T.A"> Todas las Anteriores</p><br>

      <li> 2am - 2an + 20 - m + n - 1</li>
      <p><input type="radio" name="r8" value="incorrect"> (m-n+2)(a-1)  </p>
      <p><input type="radio" name="r8" value="incorrect"> (n-m+2)(2a-1) </p>
      <p><input type="radio" name="r8" value="correct"> (m-n+1)(2a-1) </p>
      <p><input type="radio" name="r8" value="T.A"> Todas las Anteriores</p><br>

      </form>
    </fieldset>
    </lu>
    <button>Enviar</button>
    <br><br><br><br><br><br><br><br>
    <a href="Factor-comun-agrupacion.php" align="left">volver a la teoría</a>
   <!-- fin contenido pagina-->
    </div>
    

</body>

</html>