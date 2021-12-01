<?php
session_start();

$user = $_SESSION['usuario'];

try{
  include "conexion.php";

  $sql="SELECT * FROM Inicio_Sesion WHERE Correo = :usuario";
  $consulta = $conexion -> prepare($sql);
  $consulta -> execute(array(
    ':usuario' => $user
    ));

$cuenta = $consulta->fetch(PDO::FETCH_OBJ);  
if($consulta -> rowCount() > 0){ 
  $correo = $cuenta -> Correo;
  $pwd = $cuenta -> Password;
}
  
}
catch(Exceptio $e){
  echo 'Error conectando a la base de datos'. $e->getMessage();
}


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/estiloperfil.css">
</head>
<body>
 <header>
   <header>
    <h3 class="letras">PERFIL</h3>
   </header>
   <?php include "menu.php"; ?>

   <div class="perfil">
<form>
  <h1><label>Correo:</label>
  <?php echo $correo; ?><br>
   <label>Contraseña:</label>
  <?php echo $pwd; ?></h1>
</form>
<a href="registro2.php">
  <button>
   Editar Perfil
  </button>
  </a>
</div>
</body>
</html>

