<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/estilohome.css">
  <link rel="stylesheet" href="../css/home.css">
</head>
<body>
 <header>
   <h3 class="letras">INICIO</h3>
   <?php echo "<h2 class='letras'>Bienvenido: ".$_SESSION['usuario']."</h2>"; ?>
   </header>
   <?php include "menu2.php"; ?>
</body>
</html>
