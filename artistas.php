<?php

$_tituloPagina = "Artistas";
$_pagina = "Artistas";

session_start();
include 'templates/conexion.php';

$consulta = "SELECT id_dj, nombre, pais, imagen FROM artistas";
$res = mysqli_query($db, $consulta);


include 'templates/header.php';
?>

<section class="container-fluid pt-5">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="titulo">Artistas</h1>
                    <p class="font24">Encontra a tus artistas favoritos y descubri sus mejores tracks.</p>
                </div>
                <div class="col-10 offset-1 py-4"><hr></div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid pb-5">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <?php while ($fila = mysqli_fetch_assoc($res)): ?>
                    <div class="row">
                        <div class="col-12 col-md-8 text-center text-md-left order-2 order-md-1">
                            <a href="artista-leer.php?id=<?= $fila['id_dj']; ?>">
                                <h2 class="font-roja font24 "><?= $fila['nombre']; ?></h2>
                            </a>
                            <p class="font16 mb-5"><b>País:</b> <?= $fila['pais']; ?></p>
                            <a href="artista-leer.php?id=<?= $fila['id_dj']; ?>" class="btn-leer">Leer mas...</a>
                        </div>
                        <div class="col-12 col-md-4 text-center text-md-right order-1 order-md-2">
                            <a href="artista-leer.php?id=<?= $fila['id_dj']; ?>">
                                <?php if (!empty($fila['imagen'])): ?>
                                <div class="img-block">
                                    <img class="img-fluid w-75" src="<?= 'assets/imgs/' . $fila['imagen']; ?>" alt="<?= $fila['nombre']; ?>">
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                        <div class="col-10 offset-1 py-4"><hr></div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'templates/footer.php'; ?>
