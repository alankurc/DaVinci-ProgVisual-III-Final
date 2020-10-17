<?php

session_start();

include 'templates/conexion.php';

$id_track        = mysqli_real_escape_string($db, $_POST['id_track']);
$id_dj           = mysqli_real_escape_string($db, $_POST['id_dj']);
$sello           = mysqli_real_escape_string($db, $_POST['id_sello']);
$genero          = mysqli_real_escape_string($db, $_POST['id_genero']);
$titulo          = mysqli_real_escape_string($db, $_POST['titulo']);
$precio          = mysqli_real_escape_string($db, $_POST['precio']);
$lanzamiento     = mysqli_real_escape_string($db, $_POST['lanzamiento']);

$consulta = "UPDATE tracks
            SET id_dj       = '$id_dj',
                id_sello    = '$sello',
                id_genero   = '$genero',
                titulo      = '$titulo',
                precio      = '$precio',
                lanzamiento = '$lanzamiento'                
            WHERE id_track  = '$id_track'";


if ($exito = mysqli_query($db, $consulta)){

    $_SESSION['mensaje'] = "Track editado exitosamente!";

    header('Location: track-leer.php?id=' . $id_track);
} else {
    header('Location: editar-track.php?id=' . $id_track);
}





