<?php

$mysqli = mysqli_connect("localhost", "root", "", "bd_agenciaViaje");
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Turistik 🛫</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Turistik 🛫</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a type="Button" href="login.php" class="nav-link btn btn-primary">Iniciar
                            Sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" id="index" style="background-image: url('images/bg_2.jpg'); height:10px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left"
                    data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.7 }">Vive una <br>
                        experiencia única🌎</h1>
                    <h4 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.3 }">¡Encuentre
                        excelentes opciones para
                        visitar increíbles lugares!</h4>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section justify-content-end ftco-search">
        <div class="container-wrap ml-auto">
            <div class="row no-gutters">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" role="tab"
                            aria-controls="v-pills-1" aria-selected="true">Vuelos ✈</a>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" role="tab"
                            aria-controls="v-pills-1" aria-selected="true">Hotel 🏨</a>
                    </div>
                </div>
                <div class="col-md-12 tab-wrap ">
                    <div class="tab-content p-4 px-5" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                            aria-labelledby="v-pills-nextgen-tab">
                            <form action="login.php" method="POST" class="search-destination">
                                <div class="col-md align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <button type="submit" class="form-control btn btn-primary"
                                                name="btn_index">Adquirir</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <section class="ftco-section" id="places">
                            <div class="container">
                                <div class="row justify-content-center mb-5 pb-3">
                                    <div class="col-md-7 heading-section text-center ftco-animate">
                                        <h2 class="mb-4">Destinos más popular</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm col-md-6 col-lg ftco-animate">
                                        <div class="destination">
                                            <a class="img img-2 d-flex justify-content-center align-items-center"
                                                style="background-image: url(images/CDMX.jpg);">
                                            </a>
                                            <div class="text p-3">
                                                <div class="d-flex">
                                                    <div class="one">
                                                        <h3>CDMX</h3>
                                                    </div>
                                                </div>
                                                <p>
                                                    Viaja a la Ciudad de México, paquetes completos. Transporte, trip, comida,
                                                    noche, tours. Uno de los
                                                    lugares más hermosos de México.
                                                </p>
                                                <hr>
                                                <p class="bottom-area d-flex">
                                                    <span><i class="icon-map-o"></i> CDMX, MEX</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm col-md-6 col-lg ftco-animate">
                                        <div class="destination d-md-flex flex-column-reverse">
                                            <a class="img img-2 d-flex justify-content-center align-items-center"
                                                style="background-image: url(images/cancun.jpg);">
                                            </a>
                                            <div class="text p-3">
                                                <div class="d-flex">
                                                    <div class="one">
                                                        <h3>Cancún</h3>
                                                    </div>
                                                </div>
                                                <p>
                                                    Con sus playas de fina arena blanca, aguas azul turquesa y espectaculares arrecifes de 
                                                    coral que yacen frente a sus costas, Cancún es uno de los destinos turísticos más populares de México.
                                                </p>
                                                <hr>
                                                <p class="bottom-area d-flex">
                                                    <span><i class="icon-map-o"></i> Cancún, MEX</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm col-md-6 col-lg ftco-animate">
                                        <div class="destination">
                                            <a class="img img-2 d-flex justify-content-center align-items-center"
                                                style="background-image: url(images/laPaz.jpg);">
                                            </a>
                                            <div class="text p-3">
                                                <div class="d-flex">
                                                    <div class="one">
                                                        <h3>La Paz</h3>
                                                    </div>
                                                </div>
                                                <p>
                                                La Paz se posiciona como un destino sustentable con iniciativas proactivas como eliminar los plásticos de un solo uso y promover el 
                                                ecoturismo para establecer conciencia y cuidado por nuestro medio ambiente. Pedimos su ayuda en el cuidado de nuestro hogar.
                                                </p>
                                                <hr>
                                                <p class="bottom-area d-flex">
                                                    <span><i class="icon-map-o"></i> La Paz, MEX</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm col-md-6 col-lg ftco-animate">
                                        <div class="destination d-md-flex flex-column-reverse">
                                            <a class="img img-2 d-flex justify-content-center align-items-center"
                                                style="background-image: url(images/tepoztlan.png);">
                                            </a>
                                            <div class="text p-3">
                                                <div class="d-flex">
                                                    <div class="one">
                                                        <h3>Tepoztlán</h3>
                                                    </div>
                                                </div>
                                                <p>
                                                No sabemos si es su atmósfera mística y bohemia o sus impresionantes vistas a cerros escarpados y verdes, lo que hacen de Tepoztlán, 
                                                Morelos, un destino perfecto para reservar tu viaje en Turistik y escaparse un fin de semana entre amigos o en pareja. 
                                                </p>
                                                <hr>
                                                <p class="bottom-area d-flex">
                                                    <span><i class="icon-map-o"></i> Tepoztlán, MEX</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="ftco-section-parallax" id="boletin">
                            <div class="parallax-img d-flex align-items-center">
                                <div class="container">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                                            <h2>Suscríbase a nuestro boletín 📧</h2>
                                            <p>Recibe nuestro boletín informativo y entérate de nuestras promociones
                                                antes que todos.</p>
                                            <div class="row d-flex justify-content-center mt-5">
                                                <div class="col-md-8">
                                                    <form method="post" action="sesion.php" class="subscribe-form">
                                                        <div class="form-group d-flex">
                                                            <input type="email" name="correo" class="form-control"
                                                                placeholder="Correo Electronico" required>
                                                            <button name="addboletin"
                                                                class="btn btn-lg btn-primary btn-block text-uppercase"
                                                                type="submit">Registrarse</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="ftco-about d-md-flex" id="AboutUs">
                            <div class="one-half img" style="background-image: url(images/about1.jpg);"></div>
                            <div class="one-half ftco-animate">
                                <div class="heading-section ftco-animate ">
                                    <h2 class="mb-4">La mejor agencia de viajes 🏆</h2>
                                </div>
                                <div>
                                    <p>
                                        Turistik 🛫 es la agencia de viaje líder en México. Tus boletos de avión están
                                        en Turistik al mejor precio, crucial
                                        para tener las mejores vacaciones. <br> Le asesoraremos paso a paso, para que su
                                        viaje de placer o de negocios sea óptimo.
                                        Somos la mejor opción de vuelo.
                                    </p>
                                </div>
                            </div>
                        </section>

                        <section class="ftco-section" id="About">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="intro ftco-animate">
                                            <h3>Misión ✈</h3>
                                            <p>Ofrecer una experiencia de viaje única a través de una asesoría
                                                profesional, responsable y transparente.
                                                Creando experiencias de viajes de calidad y personalizadas de acuerdo a
                                                sus necesidades. Garantizando
                                                seguridad y confianza en todos los servicios que ofrecemos. Buscando
                                                siempre la satisfacción total de
                                                nuestros clientes.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="intro ftco-animate">
                                            <h3>Visión 📷</h3>
                                            <p>En 10 años llegar a ser una agencia de viajes reconocida de manera
                                                nacional e internacional; por la calidad
                                                humana con la que atendemos a las personas, buscando siempre generar
                                                seguridad y atender cada una de sus
                                                necesidades con excelencia a través de todos los servicios que ofrecemos
                                                demostrando el turismo sostenible.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="intro ftco-animate">
                                            <h3>Valores 🌴</h3>
                                            <p>Para la empresa es muy importante la amabilidad, calidad y excelencia en
                                                el servicio, puntualidad,
                                                confiabilidad, diversión y trabajo en equipo, honestidad, innovación e
                                                inspiración, integridad y respeto,
                                                pasión y compromiso.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <footer class="ftco-footer ftco-bg-dark ftco-section" id="contact">
                            <div class="container">
                                <div class="row mb-5">
                                    <div class="col-md">
                                        <div class="ftco-footer-widget mb-4">
                                            <h2 class="ftco-heading-2">Turistik 🛫</h2>
                                            <p>Selecciona tu destino preferido para ver las opciones que tenemos para
                                                ti. <br> Contamos con amplia experiencia,
                                                somos tu agencia de viajes preferida.</p>
                                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                                                <li class="ftco-animate"><a href="https://twitter.com/TuristikAgencia"
                                                        target="_blank"><span class="icon-twitter"></span></a></li>
                                                <li class="ftco-animate"><a
                                                        href="https://www.facebook.com/people/Turistik/100087982633995/?is_tour_dismissed=true"
                                                        target="_blank"><span class="icon-facebook"></span></a></li>
                                                <li class="ftco-animate"><a
                                                        href="https://www.instagram.com/turistik_agenciaviaje/"
                                                        target="_blank"><span class="icon-instagram"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="ftco-footer-widget mb-4 ml-md-4">
                                            <h2 class="ftco-heading-2">Información</h2>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="py-2 d-block">Consulta en línea</a></li>
                                                <li><a href="#boletin" class="py-2 d-block">Boletín Informativo</a></li>
                                                <li><a href="#AboutUs" class="py-2 d-block">Sobre nosotros</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="ftco-footer-widget mb-4">
                                            <h2 class="ftco-heading-2">¿Tiene alguna pregunta?</h2>
                                            <div class="block-23 mb-3">
                                                <ul>
                                                    <li><span class="icon icon-map-marker"></span><span class="text">Av
                                                            Hacienda de Rancho Seco S/N,
                                                            Plazas de Aragon, 57171 Nezahualcóyotl, Méx.</span></li>
                                                    <li><a href="https://wa.me/+525569656950" target="_blank"><span
                                                                class="icon icon-phone"></span><span class="text">+52 55
                                                                6965 6950
                                                            </span></a></li>
                                                    <li><span class="icon icon-envelope"></span><span
                                                            class="text">info@turistik.com</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">

                                        <p>
                                            Copyright &copy;
                                            <script>
                                                document.write(new Date().getFullYear());
                                            </script>
                                            Turistik 🛫 Todos los derechos Reservados | Proyecto realizado por
                                            <a target="_blank">MAVA 💻</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </footer>



                        <!-- loader -->
                        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                                    stroke="#eeeeee" />
                                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                                    stroke-miterlimit="10" stroke="#F96D00" />
                            </svg></div>


                        <script src="js/jquery.min.js"></script>
                        <script src="js/jquery-migrate-3.0.1.min.js"></script>
                        <script src="js/popper.min.js"></script>
                        <script src="js/bootstrap.min.js"></script>
                        <script src="js/jquery.easing.1.3.js"></script>
                        <script src="js/jquery.waypoints.min.js"></script>
                        <script src="js/jquery.stellar.min.js"></script>
                        <script src="js/owl.carousel.min.js"></script>
                        <script src="js/jquery.magnific-popup.min.js"></script>
                        <script src="js/aos.js"></script>
                        <script src="js/jquery.animateNumber.min.js"></script>
                        <script src="js/bootstrap-datepicker.js"></script>
                        <script src="js/jquery.timepicker.min.js"></script>
                        <script src="js/scrollax.min.js"></script>
                        <script
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
                            </script>
                        <script src="js/google-map.js"></script>
                        <script src="js/main.js"></script>

</body>

</html>