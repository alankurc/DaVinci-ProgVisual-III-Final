<?php
session_start();
include 'templates/conexion.php';

if (isset($_GET['titulo'])) {
    $titulo = mysqli_real_escape_string($db, $_GET['titulo']);

    $where = " WHERE titulo LIKE '%$titulo%'";
} else {
    $titulo = "";

    $where = "";
}

if (isset($_GET['id_dj']) && $_GET['id_dj'] !== '') {
    $id_dj = mysqli_real_escape_string($db, $_GET['id_dj']);

    $where = " WHERE tracks.id_dj = '$id_dj'";
} else {
    $id_dj = "";

    $where = "";
}

$consulta = "SELECT 
	tracks.id_track,
	tracks.id_genero,
	tracks.titulo,
	tracks.precio,
	tracks.lanzamiento,
	tracks.imagen,
	sellos.nombre,
	generos.nombre AS 'genero',
	artistas.nombre AS 'djs'
FROM tracks
INNER JOIN sellos
ON sellos.id_sello = tracks.id_sello
INNER JOIN generos
ON generos.id_genero = tracks.id_genero
INNER JOIN artistas
ON artistas.id_dj = tracks.id_dj
$where
ORDER BY tracks.lanzamiento DESC";
$res = mysqli_query($db, $consulta);

$consulta = "SELECT id_dj, nombre AS dj FROM artistas
            ORDER BY dj";
$resArtistas = mysqli_query($db, $consulta);

$_tituloPagina = "Listado de Tracks";
$_pagina = "Tracks";

include 'templates/header.php'; ?>

<section class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center py-5">
                    <h1 class="titulo">Listado de Tracks</h1>
                    <p class="font20">Encontra los mejores tracks y descubri donde comprarlos.</p>
                </div>
                <div class="col-8 offset-2">
                    <form action="tracks.php" method="get" class="mb-5">
                        <div class="form-group">
                            <label for="id_dj" class="font16">Buscar por Artista</label>
                            <select id="id_dj" name="id_dj" class="form-control">
                                <option value="">TODOS</option>
                                <?php while ($fila = mysqli_fetch_assoc($resArtistas)): ?>
                                    <option value="<?= $fila['id_dj']; ?>">
                                        <?= $fila['dj']; ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <button class="btn btn-dark" type="submit">Buscar</button>
                    </form>
                </div>
                <div class="col-10 offset-1"><hr></div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid mb-5">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                <?php while ($fila = mysqli_fetch_assoc($res)): echo "</pre>"; ?>
                        <div class="row">
                            <div class="col-8">
                                <a href="track-leer.php?id=<?= $fila['id_track']; ?>">
                                    <h2 class="font26 font-roja"><?= $fila['titulo']; ?></h2>
                                </a>
                                <p class="font16"><b>Artista:</b> <?= $fila['djs']; ?></p>
                                <p class="font16"><b>Sello:</b> <?= $fila['nombre']; ?></p>
                                <p class="font16"><i class="fas fa-money-bill-wave"> <?= $fila['precio']; ?></i>
                                    | <?= $fila['genero']; ?> | <?= $fila['lanzamiento']; ?></p>
                            </div>
                            <div class="col-4 text-right">
                                <div class="img-block">
                                    <?php if (!empty($fila['imagen'])): ?>
                                        <img class="img-fluid w-75" src="<?= 'assets/imgs/' . $fila['id_track'] . "." . $fila['imagen']; ?>" alt="<?= $fila['titulo']; ?>">
                                    <?php endif; ?>
                                </div>
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
