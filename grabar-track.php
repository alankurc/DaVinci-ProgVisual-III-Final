<?php

session_start();

if (empty($_SESSION['id_usuario'])) {
    $_SESSION['error'] = "No se puede ver esta página sin estar autenticado.";
    header("Location: login.php");
    exit;
}

include 'templates/conexion.php';

$id_dj = mysqli_real_escape_string($db, $_POST['id_dj']);
$id_sello = mysqli_real_escape_string($db, $_POST['id_sello']);
$id_genero = mysqli_real_escape_string($db, $_POST['id_genero']);
$titulo = mysqli_real_escape_string($db, $_POST['titulo']);
$precio = mysqli_real_escape_string($db, $_POST['precio']);
$lanzamiento = mysqli_real_escape_string($db, $_POST['lanzamiento']);
$nombre_imagen = $_FILES['imagen']['name'];
$imagen = pathinfo($nombre_imagen, PATHINFO_EXTENSION);
$nombre_link = $_FILES['link']['name'];
$link = pathinfo($nombre_link, PATHINFO_EXTENSION);
$descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);

$consulta = "INSERT INTO tracks (id_dj, id_sello, id_genero, titulo, precio, lanzamiento, imagen, link, descripcion)
        VALUES ('$id_dj', '$id_sello', '$id_genero', '$titulo', '$precio', '$lanzamiento', '$imagen', '$link', '$descripcion')";

$exito = mysqli_query($db, $consulta);
$ultimo_id = mysqli_insert_id($db);


if (!empty($nombre_imagen)) {
    move_uploaded_file($_FILES['imagen']['tmp_name'], 'assets/imgs/' . $ultimo_id . "." . $imagen);
}

if (!empty($nombre_link)) {
    move_uploaded_file($_FILES['link']['tmp_name'], 'assets/musica/' . $ultimo_id . "." . $link);
}

if ($exito) {

    $_SESSION['mensaje'] = "Track publicado!";

    header('Location: tracks.php');
} else {
    $_SESSION['error'] = "Hubo un error al publicar el track. Por favor, probá de nuevo más tarde.";
    header('Location: nuevo-track.php');

}
