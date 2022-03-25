<?php 
require_once "../controlador/controladorusuario.php";
//Método para insertar un usuario en la base de datos
if(isset($_POST["ingresar"])){   //Se activa cuando el usuario da clic en el boton

  $datos = array
        (
           $_POST["email"],
           $_POST["username"],
           $_POST["password"]
        );
  
    $insertar = ControladorUsuario::contrInsertarUsuarios($datos);
  
  
  if($insertar=="ok"){
    echo "<script>
        alert('Usuario insertado correctamente...');
       </script>";
        
  }

  if($insertar=="error"){
    echo "<script>
        alert('ERROR');
       </script>";
  }
  
}

?>
<!DOCTYPE html>
<html>
<head>

    <title>Registro | P&P</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/diseño_registro.css">
</head>
<body>
<?php require '../partials/header.php' ?>


    <div class="login-box">
        <h1>Registrate aquí</h1>
        <form id="frmagregar" role="form" method="POST" enctype="multipart/form-data">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Ingrese email">
        <!-- user -->
        <label for="username">Usuario</label>
        <input type="text" name="username" placeholder="Ingrese un nombre de usuario">

        <!-- user -->
        <label for="password">contraseña</label>
        <input type="password" name="password" placeholder="Ingrese una contraseña">

        <input type="submit" name="ingresar" class="btn btn-info" placeholder="Registrar">

        <a href="login.php">Ya tienes cuenta? logeate! </a>
        </form>
    </div>
</body>
</html>