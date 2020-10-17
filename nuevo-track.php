<?php

session_start();

if (empty($_SESSION['id_usuario'])) {

    $_SESSION['error'] = "Primero debes iniciar sesion.";
    header("Location: login.php");
    exit;
}

include 'templates/conexion.php';

$consulta = "SELECT id_dj, nombre FROM artistas";
$resArtista = mysqli_query($db, $consulta);

$consulta = "SELECT id_genero, nombre FROM generos";
$resGenero = mysqli_query($db, $consulta);

$consulta = "SELECT id_sello, nombre FROM sellos";
$resSello = mysqli_query($db, $consulta);

$_tituloPagina = "Cargar Track";
$_pagina = "nuevo-track";

include 'templates/header.php';
?>

<section class="container-fluid py-5">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="titulo">Cargar Track</h1>
                </div>
                <div class="col-8 offset-2">
                    <hr>
                </div>
                <div class="col-12 col-md-10 offset-md-1 pt-4">
                    <form action="grabar-track.php" method="post" enctype="multipart/form-data" id="nuevo-track">
                        <div class="form-group">
                            <label for="id_dj">Artista</label>
                            <select id="id_dj" name="id_dj" class="form-control" required>
                                <option selected disabled>Selecionar</option>
                                <?php
                                while ($fila = mysqli_fetch_assoc($resArtista)):
                                    ?>
                                    <option value="<?= $fila['id_dj']; ?>">
                                        <?= $fila['nombre']; ?>
                                    </option>
                                <?php
                                endwhile;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_sello">Sello</label>
                            <select name="id_sello" id="id_sello" class="form-control" required>
                                <option selected disabled>Selecionar</option>
                                <?php
                                while ($fila = mysqli_fetch_assoc($resSello)):
                                    ?>
                                    <option value="<?= $fila['id_sello']; ?>">
                                        <?= $fila['nombre']; ?>
                                    </option>
                                <?php
                                endwhile;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_genero">Genero</label>
                            <select name="id_genero" id="id_genero" class="form-control" required>
                                <option selected disabled>Selecionar</option>
                                <?php
                                while ($fila = mysqli_fetch_assoc($resGenero)):
                                    ?>
                                    <option value="<?= $fila['id_genero']; ?>">
                                        <?= $fila['nombre']; ?>
                                    </option>
                                <?php
                                endwhile;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" id="titulo" name="titulo" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number" id="precio" name="precio" placeholder="00,00" class="form-control" step="any" required>
                        </div>
                        <div class="form-group">
                            <label for="lanzamiento">Fecha de Lanzamiento</label>
                            <input type="date" id="lanzamiento" name="lanzamiento" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" id="imagen" name="imagen" accept="image/*" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="link">Audio</label>
                            <input type="file" id="link" name="link" accept="audio/*" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea class="form-control" id="descripcion" rows="5" name="descripcion"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block mt-5">Publicar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/jquery-confirm.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/additional-methods.min.js" type="text/javascript"></script>
<script src="assets/js/localization/messages_es_AR.min.js" type="text/javascript"></script>
<script>
    $("#nuevo-track").validate({
        errorElement: "em",
        errorPlacement: function(error, element) {
            // Add the `invalid-feedback` class to the error element
            error.addClass("invalid-feedback");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.next("label"));
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        },
    });
</script>
</body>
</html>