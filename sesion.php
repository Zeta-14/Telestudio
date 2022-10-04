<?php
include("validar.php");
session_start();

$_SESSION['usuario'] = $usuario; 
header("Location:panel.php");
   


?>