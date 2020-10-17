<?php
session_start();

$_pagina = "Sign Up";
$_tituloPagina = "Registrarse";

include 'templates/header.php';
?>

<section class="container-fluid py-5">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center py-5">
                    <h1 class="titulo">Registrarse</h1>
                </div>
                <div class="col-8 offset-2">
                    <form method="post" action="do-signup.php" id="signup">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <button class="btn btn-dark btn-block mt-5">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="container-fluid bg-dark py-3">
    <div class="row">
        <div class="col-12 text-center">
            <p class="text-white font16 mb-0">2019 - Alan Kurc</p>
        </div>
    </div>
</footer>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/jquery-confirm.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/additional-methods.min.js" type="text/javascript"></script>
<script src="assets/js/localization/messages_es_AR.min.js" type="text/javascript"></script>
<script>
    $("#signup").validate({
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

