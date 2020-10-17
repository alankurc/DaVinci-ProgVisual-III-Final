<?php

session_start();
include 'templates/conexion.php';

$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);

$consulta = "SELECT id_usuario, email, password, id_rol FROM usuarios
            WHERE email = '$email'";

$res = mysqli_query($db, $consulta);

if(mysqli_num_rows($res) === 1) {
    $datos = mysqli_fetch_assoc($res);

    if(password_verify($password, $datos['password'])) {

        $_SESSION['id_usuario'] = $datos['id_usuario'];
        $_SESSION['id_rol'] = $datos['id_rol'];
        $_SESSION['email'] = $datos['email'];
        $_SESSION['mensaje'] = "Bienvenido/a " . $email . "!";
        header("Location: tracks.php");
        exit;
    }else{
        $_SESSION['error'] = "La contraseña no es valida.";
        header('Location: login.php');
    }
}else{
    $_SESSION['error'] = "El usuario no existe.";
    header('Location: login.php');
}




