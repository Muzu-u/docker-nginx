<?php
    include("conexion.php");

    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordAgain = $_POST["passwordAgain"];

    if ($password != $passwordAgain) {
        die("Contraseña no coincide");
    }

    $consulta = "INSERT INTO usuarios(nombre, email, pass) VALUES ('$nombre', '$email', '$password')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    include("enviarCorreo.php");

    header('Location: login.html');
?>