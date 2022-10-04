<?php
require 'conn_db.php';
    session_start();
    $usuario = $_POST['usuario'] ;
    $password = $_POST['password'];
    $_SESSION[$usuario];

//consultar los resultados en la tabla
$consulta = "SELECT * FROM datos_registrar WHERE Username='$usuario' && pass='$password' ";
$resultado = mysqli_query($conex,$consulta);

//si hay un resultado nos dará un valor de cuántas filas tienen el mismo usuario y contraseña, y si no nos dará 0
$filas = mysqli_num_rows($resultado);

if ($filas>0){
    
    header("Location:index.php");
    $_SESSION['usuario'] = $usuario;
} else {
    echo "<h3>!Ups, algún dato es incorrecto</h3>";
}

//vaciar espacio en memoria
mysqli_free_result($resultado);
mysqli_close($conex);
