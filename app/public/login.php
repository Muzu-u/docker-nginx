<?php
    include("conexion.php");

    session_start();

    $correo = $_POST["mail"];
    $password = $_POST["password"];

    $query = "SELECT COUNT(*) as contar FROM usuarios WHERE email = '$correo' and pass = '$password'";

    $result = mysqli_query($conexion,$query) or die(mysqli_error($conexion));

    $row = mysqli_fetch_array($result);

    if ($row['contar']>0){
        $_SESSION["mail"] = $correo;
        header('Location: index.php');
        }

    else {
        header('Location: registro.html');
        }

    if (isset($_POST['mail']) && isset($_POST['password'])) {//El isset comprueba que no esten vacios
        $correo = $_POST["mail"];
        $password = $_POST["password"];

        $query = "SELECT COUNT (*) as contar FROM usuarios
                WHERE email = '$correo' and pass = $password";

        $result = mysqli_query($conexion,$query);
        $row = mysqli_fetch_array($result);
        // access session variables
// echo $_SESSION['logged_in_user_id'];
// echo $_SESSION['logged_in_user_name'];

        if ($row['contar']>0) {
            $rol = $row[4];
            $_SESSION['row'] = $rol;

            switch ($_SESSION['rol']) {
                case 1:
                    header('Location: admin.php');
                    break;

                case 2:
                    header('Location: usuario.php');
                    break;
                
                default:
                    header('Location: registro.html');
                    break;
            }
        }

    }
?>