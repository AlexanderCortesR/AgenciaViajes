<?php 
    include("verificar.php"); 
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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
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
                <li class="nav-item active"><a href="perfilUser.php" class="nav-link text-dark"><b><?php  echo "$nombreUser";?></b></a>
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
                        <span aria-hidden="true">×</span>
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
        <div class="row no-gutters slider-text  align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Perfil del Viajero</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container m-0">
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
                    <a class="  nav-link" href="informe.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><strong>Informe 📊</strong></a>
                    <a class=" nav-link active"  href="perfilUser.php" role="tab" aria-controls="v-pills-messages" aria-selected="false"><strong>Perfil 😎</strong></a>
                </div>
            </div>
            <div class="col-9 p-2">
                <div class="tab-content" id="v-pills-tabContent">
                        <div class="p-4">
                            <h2>Datos de <?php  echo "$nombreUser";?>📝</h2> <hr> 
                            <!-- Mostrar los datos actualizados -->
                            <?Php
                            $conn = mysqli_connect("localhost", "root", "", "bd_agenciaViaje");

                                $sql = "SELECT * FROM user where  id ='$idUsuario' ";
                                $consulta =  mysqli_query($conn, $sql);
                                $fila = mysqli_num_rows($consulta);
        
                                if ($fila) {
                                        while ($registro = mysqli_fetch_assoc($consulta)) {
                                                $username = $registro["username"];
                                                $passw = $registro["passwor"];
                                                $ceddu = $registro["cedulaUser"];
                                                $nombreUser = $registro["nombre"];
                                                $direcci = $registro["direccion"];
                                                $telfo = $registro["telefono"];
                                        }
                                }
                            ?>
                            <!-- Formulario -->
                            <form action="codigo.php" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nombre</label>
                                        <input type="text" name="nombreU" class="form-control" value="<?php echo $nombreUser ?>" >
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Dirección</label>
                                        <input type="text" name="direccionU" class="form-control" value="<?php echo $direcci ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Teléfono</label>
                                        <input type="number" name="telefonoU" class="form-control" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                                        value="<?php echo $telfo ?>">                                        
                                    </div>
                                </div>

                                <h2>Datos de la Cuenta 🔒</h2> <hr>
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Nombre de Usuario</label>
                                            <input type="text" name="usernombU" class="form-control" value="<?php echo $username ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Contraseña</label>
                                            <input type="password" name="contrase" class="form-control" value="<?php echo $passw ?>">
                                        </div>
                                    </div>
                                    </div>
                                <!-- Boton de enviar los datos -->
                                 <button type="submit" name="btn_perfildata" class="btn btn-block btn-success p-3"> <strong>Actualizar Datos</strong></button>
                            </form>
                            <!-- fin formulario -->
                        </div>  
                    </div> <!--Fin de la ventana principal -->
                </div>
            </div>
        </div>
    </div>


    <footer class="ftco-footer ftco-bg-dark ftco-section  p-4" id="contact">
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



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>

    <!-- DatePicker Time -->
    <script>
        $('#timepicker').timepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

    <!-- Alert -->
    <script>
        function alertSave() {
        alert("¡Los Datos se han guardado satisfactoriamente 👍🏽!");
        }
</script>

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