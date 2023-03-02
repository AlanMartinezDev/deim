<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEIM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700|Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="https://deim.urv.cat/~ajuda.deim2/web_deim/img/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="container-fluid">
        <!-- header -->
        <header>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <h1>
                        <a href="https://www.urv.cat">
                            <img src="https://www.urv.cat/media/img/logo-urv-2017.png" alt="Universitat Rovira i Virgili" width="302">
                        </a>
                    </h1>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row" style="background:#90282a;">
                <div class="col-2"></div>
                <div class="col-1 d-flex">
                    <a href="https://www.urv.cat">
                        <img src="https://deim.urv.cat/~ajuda.deim2/web_deim/img/logo-urv.png" alt="Logo URV" class="img-fluid">
                    </a>
                </div>
                <div class="col-4 d-flex">
                    <span class="align-self-center fw-bold text-white ms-3" style="text-transform: uppercase; margin: 22px 0 20px; font-size:28px; font-family: 'Montserrat', Arial, Helvetica, sans-serif;">
                        Departament d'Enginyeria Informàtica i Matemàtiques
                    </span>
                </div>
            </div>
        </header>
        <!-- navbar -->
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 d-flex justify-content-center">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="#" style="font-family: 'Montserrat', Arial, Helvetica, sans-serif;">ASSIGNATURES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="#" style="font-family: 'Montserrat', Arial, Helvetica, sans-serif;">HORARIS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="#" style="font-family: 'Montserrat', Arial, Helvetica, sans-serif;">LABORATORIS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="#" style="font-family: 'Montserrat', Arial, Helvetica, sans-serif;">REQUERIMENTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="#" style="font-family: 'Montserrat', Arial, Helvetica, sans-serif;">PROFESSORS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="#" style="font-family: 'Montserrat', Arial, Helvetica, sans-serif;">DESCÀRREGUES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="#" style="font-family: 'Montserrat', Arial, Helvetica, sans-serif;">INTRANET</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <div class="container"> @yield('content') </div>
    <!-- footer -->
    <footer>
        <div class="row" style="background:#90282a;">
            <div class="col-3"></div>
            <div class="col-4 d-flex ms-3 mt-5 mb-5">
                <ul class="nav flex-column">
                    <h1 class="fs-6 text-white fw-bold">
                        Departament d'Enginyeria Informàtica i Matemàtiques
                    </h1>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>