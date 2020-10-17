<?php

$db_host = "localhost";
$db_base = "2do_prog_visual";
$db_user = "root";
$db_pass = "";

$db = mysqli_connect($db_host, $db_user, $db_pass, $db_base);

if($db === false) {
    exit;
}

mysqli_set_charset($db, 'utf8mb4');
