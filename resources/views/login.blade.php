<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CineMatrix</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="{{ asset("css/fontawesome.min.css") }}">
    <!-- flaticon css -->
    <link rel="stylesheet" href="{{ asset("fonts/flaticon.css") }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset("css/animate.css") }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset("css/responsive.css") }}">
</head>
<body>
    <!-- header begin -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex align-items-center">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-6 d-xl-block d-lg-block d-flex align-items-center">
                            <div class="logo">
                                <a href="/">
                                    <h4 class="text-light">CineMatrix</h4>
                                </a>
                            </div>
                        </div>
                        <div class="d-xl-none d-lg-none d-block col-6">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="mainmenu">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/login">Iniciar sesión</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/register">Crear Cuenta</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/booking">Reservar</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->
    <!-- breadcrump begin -->
    <div class="breadcrump">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="breadcrump-content">
                        <span class="page-name">Inicio</span>
                        <span class="icon"><i class="fas fa-chevron-right"></i></span>
                        <span class="page-name">Iniciar Sesión</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrump end -->

    <!-- contact begin -->
    <div class="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="add-space section-title text-center">
                        <h2>Iniciar Sesión</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <input type="email" placeholder="Ingresar Correo">
                                    <span></span>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <input type="password" placeholder="Ingresar Contraseña">
                                    <span></span>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <button>Iniciar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact end -->
</body>
</html>