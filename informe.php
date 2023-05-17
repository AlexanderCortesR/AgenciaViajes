<?php
include("verificar.php");
include("conexion.php");
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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
                    <li class="nav-item active"><a href="perfilUser.php" class="nav-link text-dark"><b>
                                <?php echo "$nombreUser"; ?>
                            </b></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-danger" href="#" data-toggle="modal" data-target="#logoutModal">
                            Cerrar sesión
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Preparado para irte?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión
                    actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="cerrar.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text  align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Informe
                        viajes</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container m-0 ">
        <div class="row">
            <div class="col-3 bg-dark">
                <div class=" nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse"
                            data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                            <i class="fas fa-fw fa-table"></i>
                            <span><strong>Realizar Compra 💵</strong></span>
                        </a>
                        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                            data-parent="#accordionSidebar">
                            <div class="bg-black py-2 collapse-inner rounded">
                                <a class="collapse-item active" href="registro.php" role="tab"
                                    aria-controls="v-pills-home" aria-selected="true"><strong> - Reservar Boleto de
                                        Avión 🛫</strong></a><br>
                                <a class="collapse-item" href="registroHotel.php" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true"><strong>- Reservar Hotel 🏨</strong></a><br>
                            </div>
                        </div>
                    </li>

                    <!-- <a class="  nav-link" id="v-pills-home-tab" href="registro.php" role="tab"
                        aria-controls="v-pills-home" aria-selected="true"><strong>Registrar Datos 📌</strong></a> -->
                    <a class="  nav-link active" href="informe.php" role="tab" aria-controls="v-pills-settings"
                        aria-selected="false"><strong>Informes 📊</strong></a>
                    <a class=" nav-link" id="v-pills-messages-tab" href="perfilUser.php" role="tab"
                        aria-controls="v-pills-messages" aria-selected="false"><strong>Perfil 😎</strong></a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent container">

                    <!-- Registrar Datos del Viajero -->
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab ">

                        <div class="p-4">
                            <h2>Informe de sus viajes ✈</h2>
                            <hr>
                            <!-- Tabla de Viajes -->
                            <?php
                            $sql = "SELECT * FROM  viaje2 WHERE ced_Viajero ='$IDUser'";
                            $consulta = mysqli_query($conn, $sql);
                            $linea = mysqli_num_rows($consulta);

                            echo "<table class=table-bordered>";
                            echo "<thead class=bg-dark>";
                            echo "<tr class=text-white>";
                            echo "<td class=p-1 align=center> Código Viaje</td>";
                            echo "<td align=center> Cantidad de Asientos </td>";
                            echo "<td class=p-1 align=center> Costo </td>";
                            echo "<td class=p-1 align=center> Fecha de Salida</td>";
                            echo "<td class=p-1 align=center> Hora de Salida</td>";
                            echo "<td class=p-1 align=center> Fecha de Regreso</td>";
                            echo "<td class=p-1 align=center> Hora de Regreso</td>";
                            echo "<td class=p-1 align=center> Lugar de Origen </td>";
                            echo "<td class=p-1 align=center> Lugar de Destino </td>";
                            echo "</tr>";
                            echo "</thead>";

                            if ($linea) {

                                while ($registro = mysqli_fetch_assoc($consulta)) {
                                    echo "<tr>";
                                    $codigoxX = $registro["codigo_Viaje"];
                                    echo "<td>";
                                    echo $codigoxX;
                                    echo "</td>";

                                    echo "<td>";
                                    echo $registro['num_Asientos'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo "$ " . $registro['costo_Viaje'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $registro['fecha_Salida'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $registro['hora_Viaje'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $registro['fecha_Regreso'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $registro['hora_reg'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $registro['cod_Origen'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $registro['cod_Destino'];
                                    echo "</td>";

                                    echo "</tr>";
                                }
                            }
                            echo "<table class=table-bordered>";
                            echo "</table>";
                            ?>
                        </div>
                        <hr>
                    </div>

                    <div class="p-4">
                            <h2>Informe de sus hoteles 🏨</h2>
                            <hr>
                            <!-- Tabla de Viajes -->
                            <?php
                            $sql = "SELECT * FROM  hotelreser WHERE usuario = $IDUser";
                            $consulta = mysqli_query($conn, $sql);
                            $linea = mysqli_num_rows($consulta);

                            echo "<table class=table-bordered>";
                            echo "<thead class=bg-dark>";
                            echo "<tr class=text-white>";
                            echo "<td class=p-1 align=center> Código Reservación</td>";
                            echo "<td class=p-1 align=center> Costo </td>";
                            echo "<td class=p-1 align=center> Fecha de Entrada</td>";
                            echo "<td class=p-1 align=center> Fecha de Salida</td>";
                            echo "</tr>";
                            echo "</thead>";

                            if ($linea) {

                                while ($registro = mysqli_fetch_assoc($consulta)) {
                                    echo "<tr>";
                                    $codigoxX = $registro["codRes"];
                                    echo "<td>";
                                    echo $codigoxX;
                                    echo "</td>";

                                    echo "<td>";
                                    echo "$ " . $registro['precio'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $registro['fechaEntr'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $registro['fechaSal'];
                                    echo "</td>";

                                    echo "</tr>";
                                }
                            }
                            echo "<table class=table-bordered>";
                            echo "</table>";
                            ?>
                        </div>
                        <hr>
                    </div>
                    <!--Fin de la ventana principal -->
                </div>
            </div>
        </div>
    </div>


    <footer class="ftco-footer ftco-bg-dark ftco-section p-4" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        Turistik 🛫 Todos los derechos Reservados | Proyecto realizado por
                        <a href="#PENDIENTEEEE" target="_blank">MAVA 💻</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>





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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>