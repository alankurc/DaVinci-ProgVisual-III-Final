<?php

$_tituloPagina = "Home";
$_pagina = "index";

session_start();
include 'templates/conexion.php';

include 'templates/header.php';
?>

<section class="container-fluid py-5 py-md-0 pl-md-0 home">
    <div class="row">
        <div class="col-12 col-md-5 d-none d-md-block">
            <img src="assets/imgs/banner.jpg" class="img-fluid w-100 h-100" alt="Banner">
        </div>
        <div class="col-12 col-md-7 mt-5 pl-0 text-center">
            <h1 class="titulo">Trabajo Final</h1>
            <h2 class="pt-4 px-4 font20">Bienvenido a nuestra biblioteca en línea de música electrónica con artistas
                nacionales e internacionales donde podrás encontrar los últimos tracks de tus djs preferidos.</h2>
        </div>
    </div>
</section>

<?php

include 'templates/footer.php'; ?>
