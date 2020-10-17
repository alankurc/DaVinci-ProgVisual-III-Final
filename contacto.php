<?php

$_tituloPagina = "Contacto";
$_pagina = "Contacto";

session_start();
include 'templates/conexion.php';

include 'templates/header.php';
?>

<section class="container-fluid py-5">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="titulo">Contacto</h2>
                </div>
                <div class="col-12 col-md-8 offset-md-2 pt-3">
                    <form method="post" id="contacto-form">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="Teléfono" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea name="mensaje" id="mensaje" rows="5" placeholder="Mensaje" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-enviar">Enviar</button>
                        </div>
                    </form>
                    <div class="popup-email"><div class="element"></div></div>
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
    $('#btn').click(function() {
        $('.popup-email').fadeOut('fast');
    });
    $("#contacto-form").validate({
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
        submitHandler: function(form) {
            $.ajax({
                url: 'contacto-form.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    nombre: $('#nombre').val(),
                    telefono: $('#telefono').val(),
                    email: $('#email').val(),
                    mensaje: $('#mensaje').val()
                },
                success: function(response) {
                    if (response.status === true) {
                        $('.element p').remove();
                        $('.element').prepend('<p class="success">' + response.msg + '</p>');
                        $('.popup-email').fadeIn('fast');
                        $('#nombre').prop('value', '');
                        $('#telefono').prop('value', '');
                        $('#email').prop('value', '');
                        $('#mensaje').prop('value', '');
                    } else {
                        $('.element p').remove();
                        $('.element').prepend('<p class="error">' + response.msg + '</p>');
                        $('.popup-email').fadeIn('fast');
                    }
                }
            });
        }
    });
</script>
</body>
</html>
