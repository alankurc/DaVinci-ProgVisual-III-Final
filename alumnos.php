<?php

$_tituloPagina = "Alumnos";
$_pagina = "Alumnos";

session_start();
include 'templates/conexion.php';

include 'templates/header.php';
?>

<section class="container-fluid s-alumnos">
    <div class="row">
        <div class="col-12 col-md-5 pl-0 d-none d-md-block">
            <img src="assets/imgs/banner-alumnos.jpg" class="img-fluid w-100 h-100" alt="Banner">
        </div>
        <div class="col-12 col-md-7 mt-5 pl-5 d-flex flex-column text-center">
            <div class="mb-auto mt-5">
                <h1 class="titulo">Alumnos</h1>
                <h2 class="font22">Diseño Multimedial | Programacion Visual III</h2>
            </div>
            <div>
                <p class="font22"><strong>Profesor:</strong> Santiago Gallino</p>
                <p class="font22"><strong>Alumnos:</strong> Alan Kurc</p>
                <p class="font22"><strong>Comision:</strong> DMN4A</p>
            </div>
            <img src="assets/imgs/davinci.png" class="img-fluid w-25 mx-auto d-block mt-auto mb-5" alt="Logo DaVinci">
        </div>
    </div>
</section>

<?php

include 'templates/footer.php';
?>
