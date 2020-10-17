<?php
include 'templates/conexion.php';

$id_track = mysqli_real_escape_string($db, $_GET['id']);

$consulta = "DELETE FROM tracks WHERE id_track = '$id_track'";

$exito = mysqli_query($db, $consulta);

if($exito) {

    header('Location: tracks.php');
} else {

    echo "Error al eliminar :(";
}







