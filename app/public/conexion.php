<?php
  /*Validacion de datos del servidor */
  $user = "root";
  $pass = "TheSliver_12";
  $host = "mysql8-service";
  $bd = "movies";

  // Crea conexión
  $conexion = mysqli_connect($host, $user, $pass, $bd) or die(mysql_error($mysqli));

  // Verifica conexión
  if (!$conexion) {
    die("Connection failed:".mysqli_connect_error());
  }
?>