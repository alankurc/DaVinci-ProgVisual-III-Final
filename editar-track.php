<?php

session_start();

if(empty($_SESSION['id_usuario']) && $_SESSION['id_rol'] == 1) {

    $_SESSION['error'] = "Primero debes iniciar sesion.";
    header("Location: login.php");
    exit;
}

include 'templates/conexion.php';

$id = mysqli_real_escape_string($db, $_GET['id']);
$consultaDatos = "SELECT * FROM tracks WHERE id_track = '$id'";
$resDatos = mysqli_query($db, $consultaDatos);
$datosTrack = mysqli_fetch_assoc($resDatos);

$consulta = "SELECT id_dj, nombre FROM artistas";
$resArtista = mysqli_query($db, $consulta);

$consulta = "SELECT id_genero, nombre FROM generos";
$resGenero = mysqli_query($db, $consulta);

$consulta = "SELECT id_sello, nombre FROM sellos";
$resSello = mysqli_query($db, $consulta);


$_tituloPagina = "Editar Track";
$_pagina = "Nuevo Track";

include 'templates/header.php';
?>

<section class="container-fluid py-5">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="titulo">Editar Track</h1>
                </div>
                <div class="col-8 offset-2"><hr></div>
                <div class="col-12 col-md-10 offset-md-1 pt-4">
                    <form action="grabar-editar-track.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="id_dj">Artista</label>
                            <select id="id_dj" name="id_dj" class="form-control">
                                <option value="0">Selecionar</option>
                                <?php
                                while ($fila = mysqli_fetch_assoc($resArtista)):
                                    ?>
                                    <option value="<?= $fila['id_dj']; ?>" <?php if($fila['id_dj'] == $datosTrack['id_dj']) {
                                        echo "selected";}?>>
                                        <?= $fila['nombre']; ?>
                                    </option>
                                <?php
                                endwhile;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" id="titulo" name="titulo" class="form-control" value="<?php echo($datosTrack['titulo']);?>">
                        </div>
                        <div class="form-group">
                            <label for="genero">Genero</label>
                            <select name="id_genero" id="id_genero" class="form-control">
                                <option value="0">Selecionar</option>
                                <?php
                                while ($fila = mysqli_fetch_assoc($resGenero)):
                                    ?>
                                    <option value="<?= $fila['id_genero']; ?>" <?php if($fila['id_genero'] == $datosTrack['id_genero']) {
                                        echo "selected";}?>>
                                        <?= $fila['nombre']; ?>
                                    </option>
                                <?php
                                endwhile;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sello">Sello</label>
                            <select name="id_sello" id="id_sello" class="form-control">
                                <option value="0">Selecionar</option>
                                <?php
                                while ($fila = mysqli_fetch_assoc($resSello)):
                                    ?>
                                    <option value="<?= $fila['id_sello']; ?>" <?php if($fila['id_sello'] == $datosTrack['id_sello']) {
                                        echo "selected";}?>>
                                        <?= $fila['nombre']; ?>
                                    </option>
                                <?php
                                endwhile;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number" id="precio" name="precio" placeholder="00,00" class="form-control" value="<?php echo($datosTrack['precio']);?>">
                        </div>
                        <div class="form-group">
                            <label for="lanzamiento">Fecha de Lanzamiento</label>
                            <input type="date" id="lanzamiento" name="lanzamiento" class="form-control" value="<?php echo($datosTrack['lanzamiento']);?>">
                        </div>
                        <input type="hidden" value="<?php echo($datosTrack['id_track']);?>" name="id_track">
                        <button type="submit" class="btn btn-dark btn-block mt-5">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

include 'templates/footer.php';
?>
