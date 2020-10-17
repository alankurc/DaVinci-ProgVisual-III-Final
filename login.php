<?php
session_start();

$_pagina = "login";
$_tituloPagina = "Iniciar Sesión";

include 'templates/header.php';
?>

<section class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center py-5">
                    <h1 class="titulo">Iniciar sesion</h1>
                </div>
                <div class="col-8 offset-2">
                    <form method="post" action="do-login.php">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <button class="btn btn-dark btn-block mt-5">Ingresar</button>
                    </form>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-12 mb-4">
                    <h2 class="font24">Usuarios registrados</h2>
                </div>
                <div class="col-4">
                    <p><b>Email:</b> usuario_1@test.com</p>
                    <p><b>Password:</b> usuario1</p>
                    <p class="small">(Admin)</p>
                </div>
                <div class="col-4">
                    <p><b>Email:</b> usuario_2@test.com</p>
                    <p><b>Password:</b> usuario2</p>
                    <p class="small">(Usuario comun)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'templates/footer.php';
?>
