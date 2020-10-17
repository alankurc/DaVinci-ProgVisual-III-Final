<?php

session_start();

include 'templates/conexion.php';

$_tituloPagina = "Info Artista";
$_pagina = "Info Artista";

$id = mysqli_real_escape_string($db, $_GET['id']);

$consulta = "SELECT 
	artistas.id_dj,
	artistas.nombre,
	artistas.edad,
	artistas.pais,
    artistas.biografia,
    artistas.imagen AS imagendj,
	artistas.discos
	
    FROM artistas
    WHERE artistas.id_dj = '$id'";

$resArtistas = mysqli_query($db, $consulta);

$consulta = "SELECT 
    tracks.id_track,
    tracks.id_dj,
    tracks.id_sello,
    tracks.titulo,
    tracks.precio,
    tracks.id_genero,
    tracks.lanzamiento,
    tracks.duracion,
    tracks.imagen,
    tracks.link,
    sellos.nombre,
    sellos.id_sello
    
    FROM tracks
    LEFT JOIN sellos
    ON tracks.id_sello = sellos.id_sello
    WHERE tracks.id_dj = '$id'";

$resTracks = mysqli_query($db, $consulta);

include 'templates/header.php';
?>

<section class="container-fluid py-5">
    <div class="row">
        <div class="container">
            <div class="row">
                <?php while ($fila = mysqli_fetch_assoc($resArtistas)): ?>
                    <div class="col-12 mb-5">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <?php if (!empty($fila['imagendj'])): ?>
                                    <img class="w-75" src="<?= 'assets/imgs/' . $fila['imagendj']; ?>"
                                         alt="<?= $fila['nombre']; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-8 pt-3 pt-md-0">
                                <h1 class="titulo pb-3"><?= $fila['nombre']; ?></h1>
                                <p class="font14"><b>País:</b> <?= $fila['pais']; ?></p>
                                <p class="font14"><b>Edad:</b> <?= $fila['edad']; ?></p>
                                <p class="font14"><b>Discos lanzados:</b> <?= $fila['discos']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pb-3">
                        <p class="font16"><?= $fila['biografia']; ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="row">
                <?php while ($fila = mysqli_fetch_assoc($resArtistas)): ?>
                    <div class="col-12 mb-5">
                        <div class="row">
                            <div class="col-4">
                                <?php if (!empty($fila['imagendj'])): ?>
                                    <img class="w-75" src="<?= 'assets/imgs/' . $fila['imagendj']; ?>"
                                         alt="<?= $fila['nombre']; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-8">
                                <h1 class="titulo pb-3"><?= $fila['nombre']; ?></h1>
                                <p class="font14"><b>País:</b> <?= $fila['pais']; ?></p>
                                <p class="font14"><b>Edad:</b> <?= $fila['edad']; ?></p>
                                <p class="font14"><b>Discos lanzados:</b> <?= $fila['discos']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pb-3">
                        <p class="font16"><?= $fila['biografia']; ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid pb-5">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="titulo">Tracks del Artista</h2>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th class="w-25">Portada</th>
                                <th>Nombre</th>
                                <th>Artista</th>
                                <th>Duración</th>
                                <th>Precio</th>
                                <th>Escuchar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php while ($fila = mysqli_fetch_assoc($resTracks)): ?>
                                <audio id="<?= $fila['id_track']; ?>" class="d-none" controls>
                                    <source src="<?= 'assets/musica/' . $fila['id_track'] . "." . $fila['link']; ?>" type="audio/mpeg">
                                </audio>
                                <tr>
                                    <?php if (!empty($fila['imagen'])): ?>
                                        <td><img class="w-25 img-fluid" src="<?= 'assets/imgs/' . $fila['id_track'] . "." . $fila['imagen']; ?>" alt="<?= $fila['titulo']; ?>"></td>
                                    <?php endif; ?>
                                    <td><a href="track-leer.php?id=<?= $fila['id_track']; ?>" class="text-dark font-weight-bold"><?= $fila['titulo']; ?></a></td>
                                    <td><?= $fila['nombre']; ?></td>
                                    <td><?= $fila['duracion']; ?></td>
                                    <td>$<?= $fila['precio']; ?></td>
                                    <td>
                                        <a href="javascript:;" class="font-negra btn-play mr-3" onclick="document.getElementById('<?= $fila['id_track']; ?>').play()"><i class="fas fa-play"></i></a>
                                        <a href="javascript:;" class="font-negra btn-play" onclick="document.getElementById('<?= $fila['id_track']; ?>').pause()"><i class="fas fa-pause"></i></a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'templates/footer.php'; ?>
