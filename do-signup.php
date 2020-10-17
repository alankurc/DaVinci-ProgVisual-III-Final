<?php

session_start();
include 'templates/conexion.php';

$email = mysqli_real_escape_string($db, $_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$nombre = mysqli_real_escape_string($db, $_POST['nombre']);
$apellido = mysqli_real_escape_string($db, $_POST['apellido']);

$consulta_mail = "SELECT email FROM usuarios WHERE email = '$email'";

$nuevo_mail = mysqli_query($db, $consulta_mail);

if (mysqli_num_rows($nuevo_mail) > 0) {
    $_SESSION['error'] = "El E-mail ya se encuentra registrado";
    header('Location: signup.php');
} else {
    $consulta = "INSERT INTO usuarios (email, password, nombre, apellido)
                VALUES ('$email','$password','$nombre','$apellido')";

    $exito = mysqli_query($db, $consulta);

    if ($exito) {

        $_SESSION['mensaje'] = "Registro completado!";

        header('Location: index.php');
    } else {
        $_SESSION['error'] = "Hubo un error al registrarse. Por favor, probá de nuevo más tarde.";
        header('Location: signup.php');

    }
}

