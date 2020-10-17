<?php
session_start();
include 'templates/conexion.php';

$titulo = mysqli_real_escape_string($db, $_GET['id']);

$consulta = "SELECT 
	tracks.id_track,
	tracks.imagen,
	tracks.lanzamiento,
	tracks.titulo,
	tracks.id_genero,
	tracks.precio,
	tracks.link,
    tracks.descripcion,
	sellos.nombre AS 'sellos',
	generos.nombre AS 'genero',
	artistas.id_dj,
	artistas.nombre AS 'djs'
FROM tracks
LEFT JOIN sellos
ON sellos.id_sello = tracks.id_sello
LEFT JOIN generos
ON generos.id_genero = tracks.id_genero
LEFT JOIN artistas
ON artistas.id_dj = tracks.id_dj
WHERE tracks.id_track = '$titulo'
ORDER BY tracks.lanzamiento DESC";

$res = mysqli_query($db, $consulta);

$consulta = "SELECT id_dj FROM artistas";
$resDj = mysqli_query($db, $consulta);

$fila = mysqli_fetch_assoc($res);

$_tituloPagina = $fila['titulo'];
$_pagina = "Tracks";

include 'templates/header.php'; ?>

<audio id="<?= $fila['titulo']; ?>" class="d-none" controls>
    <source src="<?= 'assets/musica/' . $fila['id_track'] . "." . $fila['link']; ?>" type="audio/mpeg">
</audio>

<section class="container-fluid py-5">
    <div class="row">
        <div class="container">
            <div class="row track">
                <div class="col-12 col-md-4">
                    <?php if (!empty($fila['imagen'])): ?>
                        <img class="img-fluid w-75" src="<?= 'assets/imgs/' . $fila['id_track'] . "." . $fila['imagen']; ?>" alt="<?= $fila['titulo']; ?>">
                    <?php endif; ?>
                </div>
                <div class="col-12 col-md-8 pt-3 pt-md-0">
                    <h1 class="titulo"><?= $fila['titulo']; ?></h1>
                    <p class="track-genero">Creado por <a href="artista-leer.php?id=<?= $fila['id_dj']; ?>" style="color: darkred;">
                            <b class="articulo-genero"><?= $fila['djs']; ?></b></a> el <i class="articulo-detalle_fecha"><?= $fila['lanzamiento']; ?></i>
                    </p>
                    <p class="track-sello"><b>Sello:</b> <?= $fila['sellos']; ?></p>
                    <p class="track-sello"><b>Género:</b> <?= $fila['genero']; ?></p>
                    <p>
                        <a href="javascript:;" class="font-negra btn-play mr-3" onclick="document.getElementById('<?= $fila['titulo']; ?>').play()">
                            <i class="fas fa-play"></i></a>
                        <a href="javascript:;" class="font-negra btn-play" onclick="document.getElementById('<?= $fila['titulo']; ?>').pause()">
                            <i class="fas fa-pause"></i></a>
                    </p>
                    <p class="descripcion"><?= $fila['descripcion']; ?> </p>
                </div>
                <div class="col-12"></div>
                <div class="col-12"></div>
            </div>
            <div class="row pt-5">
                <div class="col-12 text-center">
                    <?php
                    if(!empty($_SESSION['id_usuario']) && $_SESSION['id_rol'] == 1):
                        ?>
                        <a href="editar-track.php?id=<?= $fila['id_track']; ?>" class="btn btn-block btn-success">EDITAR</a>
                        <a href="track-eliminar.php?id=<?= $fila['id_track']; ?>" class="btn btn-block btn-danger" id="botonEliminar">ELIMINAR</a>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'templates/footer.php'; ?>
