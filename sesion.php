<?php 
  include_once 'conexion.php';
  include_once 'codigo.php';

  if(!isset($_SESSION)) {
    session_start();
  }

  //FormularioBoletin
  if (isset($_POST["addboletin"])) {
    $email=$_POST['correo'];
    
      //Insertar datos en la tabla boletin
        $sql = "INSERT INTO boletin(correo) values('$email')";
      
        $verificar_correo = mysqli_query($conn, "SELECT * FROM boletin where correo ='$email'");
        if(mysqli_num_rows($verificar_correo) > 0){
          ?>
          <script>
            alert("Ya te has suscríto a nuestro boletín anteriormente!!!! :D");
            window.location = "index.php";
            </script>
          <?php 
          exit();
        }else{
          $consulta =  mysqli_query($conn, $sql);
          ?>
          <script>
            alert("Te has suscríto correctamente a nuestro boletín!!!! :D");
            window.location = "index.php";
            </script>
          <?php 
        }
      }
  
  //formulario de Registro
  if (isset($_POST['addlogin'])) {
    $nombreUsuario = $_POST['username'];
    $cedula = $_POST['cedula'];
    $contraseña = $_POST['passwor'];
    $nombreUser = $_POST['nombr'];
    $rol_Usuario = $_POST['rol_Usuario'];
    

    //Insertar datos en la tabla usuarios
    $sql = "INSERT INTO user (cedulaUser,username, passwor, nombre, rol_id )
    values('$cedula','$nombreUsuario','$contraseña','$nombreUser', '$rol_Usuario')";

    $verificar_usuario = mysqli_query($conn, "SELECT * FROM user where username ='$nombreUsuario'");
    if(mysqli_num_rows($verificar_usuario) > 0){
      ?>
      <script>
        alert("Este usuario ya está registrado, intente con otro diferente");
        window.location = "registroUser.php";
        </script>
      <?php 
      exit();
    }   

    $consulta =  mysqli_query($conn, $sql);
  }

  //Envia del checkout a informe
    if (isset($_POST['btn_checkout'])) {  
      $precioTotal = $_POST["precioTotal"];
      $codX = $_POST["codX"];
      $telf = $_POST["telf"];
      $address = $_POST["address"];
      $username = $_POST["usernamex"];

  //Insertar datos en la tabla viajes el costo total 
    $sql = "UPDATE viajes SET costo = '$precioTotal' WHERE codigoViaje = '$codX' ";
    $consulta =  mysqli_query($conn, $sql);

    //Insertar datos en la tabla usuarios (Direccion, telefono)
    $sql = "UPDATE user SET  direccion='$address', telefono='$telf' WHERE username = '$username' ";
    $consulta =  mysqli_query($conn, $sql);

      if ($sql) {
              header('Location: informe.php');
      }
      ?> 
        <script>
            function checkout(){
                alert("¡GRACIAS! EL pago del viaje sea realizado correctamente ✈😍 ");
            }
        </script>
      <?php
    }

    //Envia del checkout2 a informe
    if (isset($_POST['btn_checkout2'])) {  
      $priceTotal = $_POST["priceTotal"];
      $codiV = $_POST["codiV"];

  //Insertar datos en la tabla viajes el costo total 
    $sql = "UPDATE viaje2 SET costo_Viaje = '$priceTotal' WHERE codigo_Viaje = '$codiV' ";
    $consulta =  mysqli_query($conn, $sql);

      if ($sql) {
              header('Location: informe.php');
      }
      ?> 
        <script>
            function checkout(){
                alert("¡GRACIAS! EL pago del viaje sea realizado correctamente ✈😍 ");
            }
        </script>
      <?php
    }

  //Inicia Sesion del usuario registrado
  if (isset($_POST['addlogin'])) {
    $username = $_POST["username"];
    $password = $_POST["passwor"];

    $sql="SELECT * FROM user WHERE username='$username' and passwor ='$password'";
    $result = mysqli_query($conn, $sql);

    $registro = mysqli_fetch_array($result);
    $rol = $registro[8];

    if ($registro) { 
      $_SESSION['rol'] = $rol;

      $_SESSION["id_username"] = $registro["username"];
      $_SESSION["id_nombre"] = $registro["nombre"];
      $_SESSION["id_cedulaUser"] = $registro["cedulaUser"];


      $_SESSION["id_direccion"] = $registro["direccion"];
      $_SESSION["id_telefono"] = $registro["telefono"];
      $_SESSION["id_pass"] = $registro["passwor"];
      $_SESSION["id"] = $registro["id"];


      if($_SESSION['rol'] == 2){
          header('Location: registro.php');
      }
      }else{ ?>
        <script lenguage=javascript>
        alert("⚠ ¡ERROR! ⚠");
        window.location="login.php";
      </script>
        
   <?php 
      }
  }
    
  //formulario de iniciar sesion 
  if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["passwor"];

    $sql="SELECT * FROM user WHERE username='$username' and passwor ='$password'";
    $result = mysqli_query($conn, $sql);

    $registro = mysqli_fetch_array($result);
    $rol = $registro[8];

    if ($registro) { 
    //  header('Location: index.php');
      $_SESSION['rol'] = $rol;

      $_SESSION["id_username"]=$registro["username"];
      $_SESSION["id_nombre"]=$registro["nombre"];
      $_SESSION["id_cedulaUser"]=$registro["cedulaUser"];

      $_SESSION["id_direccion"] = $registro["direccion"];
      $_SESSION["id_telefono"] = $registro["telefono"];
      $_SESSION["id_pass"] = $registro["passwor"];
      $_SESSION["id"] = $registro["id"];

      switch($_SESSION['rol']){
        case 1:
          header('Location: dashboards/registrarAdmin.php');
        break;

        case 2:
          header('Location: registro.php');
        break;

        default;
      }
    }else if (!$registro[0]) {?>
      <script lenguage=javascript>
        alert("⚠ ERROR: Usuario y/o Contraseña Incorrecta ⚠");
        window.location="login.php";
      </script> 
        
   <?php 
      }
    
  }



?>

