<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php echo $_tituloPagina; ?> | Alan Kurc</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/jquery-confirm.min.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

<header class="container-fluid bg-dark">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <span class="navbar-brand">DaVinci 2019</span>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item"><a class="nav-link text-white" href="index.php">Home</a></li>
                                <li class="nav-item d-none d-md-block"><span class="nav-link text-white">|</span></li>
                                <li class="nav-item"><a class="nav-link text-white" href="artistas.php">Artistas</a></li>
                                <li class="nav-item d-none d-md-block"><span class="nav-link text-white">|</span></li>
                                <?php if(empty($_SESSION['id_usuario'])): ?>
                                    <li class="nav-item"><a class="nav-link text-white" href="tracks.php">Tracks</a></li>
                                <?php else: ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Tracks
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a href="tracks.php" class="dropdown-item">Ver todos</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="nuevo-track.php">Cargar nuevo</a>
                                        </div>
                                    </li>
                                <?php endif; ?>
                                <li class="nav-item d-none d-md-block"><span class="nav-link text-white">|</span></li>
                                <li class="nav-item"><a class="nav-link text-white" href="alumnos.php">Alumnos</a></li>
                                <li class="nav-item d-none d-md-block"><span class="nav-link text-white">|</span></li>
                                <li class="nav-item"><a class="nav-link text-white" href="contacto.php">Contacto</a></li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-2x fa-user-circle"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php if(empty($_SESSION['id_usuario'])): ?>
                                            <p class="dropdown-item disabled">Hola!</p>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="login.php">Ingresar</a>
                                            <a class="dropdown-item" href="signup.php">Registrarse</a>
                                        <?php else: ?>
                                            <p class="dropdown-item disabled"><?= $_SESSION['email'];?></p>
                                        <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="logout.php">Cerrar sesion</a>
                                        <?php endif; ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="container-fluid">
    <div class="row">
        <div class="col-12 px-0">
            <?php if (isset($_SESSION['mensaje'])): ?>
                <div class="alert alert-success"><?= $_SESSION['mensaje']; ?></div>
                <?php unset($_SESSION['mensaje']); endif; ?>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger"><?= $_SESSION['error']; ?></div>
                <?php unset($_SESSION['error']); endif; ?>
        </div>
    </div>
</section>
