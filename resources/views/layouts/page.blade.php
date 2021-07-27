<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Consorcio Vimalca</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/page/img/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200;300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="/page/css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="/page/css/style.css" />

</head>
<style>
    .logo img {
        width: 100%;
    }

    @media screen and (max-width: 992px) {
        .logo img {
            width: 95px;
        }
    }

    @media screen and (max-width: 600px) {
        .logo img {
            width: 95px;
        }
    }

    @media screen and (max-width: 600px) {
        .about .ftbox ul li {
            width: 100%;
            padding: 10px;
            text-align: center;
            background: #f7f7f7;
            border-radius: 5px;
            position: relative;
        }
    }

    .navbar-collapse .nav-item .m-0 {
        margin: 10px !important;
        margin-left: 0px !important;
        font-size: 13px;
        width: 20px;
    }

    .floatwspp {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 0px;
        right: 0px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .floatwspp:hover {
        text-decoration: none;
        color: #25d366;
        background-color: #fff;
    }

    .my-float {
        margin-top: 16px;
    }
</style>

<body>

    <div id="preloader">
    </div>

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <nav class="navbar change navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="{{route('index')}}">
                <img src="/page/img/logo-blanco.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php#misvis">Mision</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php#misvis">Vision</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Nuestras Empresas</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="fabrica-hielo.php">Fábrica de Hielo Vimalca</a>
                            <a class="dropdown-item" href="grifo-market.php">Grifo & Minimarket Vimalca Repsol</a>
                            <a class="dropdown-item" href="pesca.php">Transporte & Pesca Vimalca</a>
                            <a class="dropdown-item" href="agua-mesa.php">Agua de Mesa Vimalca</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactanos.php">Contáctanos</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    {{$slot}}

    <a href="https://api.whatsapp.com/send?phone=51955991195&text=Hola!%20Vengo%20desde%20la%20Web%20de%20Vimalca" class="floatwspp" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <footer class="footer-half sub-bg section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="cont">
                        <div class="logo">
                            <a href="#0">
                                <img src="/page/img/logo.png" alt="" style="width: 250px;">
                            </a>
                        </div>
                        <div class="con-info custom-font">
                            <ul>
                                <li><span>Email : </span> contabilidad.grupovimalca@hotmail.com</li>
                                <li><span>Dirección : </span> KM 0.8 Carretera Santa Rosa - Pimentel, Santa Rosa
                                </li>
                                <li><span>Teléfono : </span> (+51) 955 991 195</li>
                            </ul>
                        </div>
                        <div class="social-icon">
                            <h6 class="custom-font stit simple-btn">Síguenos</h6>
                            <div class="social">
                                <a href="https://www.instagram.com/consorcio.vimalca/" class="icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=51955991195&text=Hola!%20Vengo%20desde%20la%20Web%20de%20Vimalca" class="icon">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <div class="subscribe mb-50">
                        <h6 class="custom-font stit simple-btn">Información:</h6>
                        <p class="">LConsorcio Vimalca tiene 10 años de experiencia iniciando propiamente con la pesca su presencia en el mercado inicio en el año 2011.</p>
                    </div>
                    <div class="insta">
                        <h6 class="custom-font stit simple-btn">Instagram Post</h6>
                        <div class="insta-gallary">
                            <a href="#0">
                                <img src="/page/img/insta/1.jpg" alt="">
                            </a>
                            <a href="#0">
                                <img src="/page/img/insta/2.jpg" alt="">
                            </a>
                            <a href="#0">
                                <img src="/page/img/insta/3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyrights text-center">
                <p>© 2021, Todos los derechos Reservados.</p>
            </div>
        </div>
    </footer>
    </div>
    <!-- jQuery -->
    <script src="/page/js/jquery-3.0.0.min.js"></script>
    <script src="/page/js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="/page/js/plugins.js"></script>

    <!-- custom scripts -->
    <script src="/page/js/scripts.js"></script>
</body>

</html>