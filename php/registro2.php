<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/estiloingresar2.css">
</head>
<body>
  <div class="logo"><img src="../img/logo.png"></div>
<div class="login-page">
  <div class="form">
    <form class="register-form" method="POST" action="registro21.php">
      <input type="text" placeholder="Telefono" name="tele" />
      <select name="Tipo_identifi">
        <option value="0">--Tipo_identificion--</option>
        <option value="1">CEDULA DE CIUDADANIA</option>
        <option value="2">CEDULA DE EXTRANJERIA</option>
        <option value="3">PASAPORTE</option>
        <option value="4">TARJETA DE IDENTIDAD</option>
      </select>
      <input type="text" placeholder="No_identificacion" name="numero" />
      <input type="text" placeholder="Nacionalidad" name="nacio" />
      <input type="text" placeholder="Pais" name="Pas" />
      <input type="text" placeholder="Departamento" name="departa" />
      <input type="text" placeholder="Ciudad" name="ciuda" />
      
    </form>
     <p class="message"><a href="perfil.php">
    <button>
    GUARDAR
  </button>
   </a></p>
  </div>
</div>
 <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
      <script id="rendered-js" >
$('.message a').click(function () {
  $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
});
//# sourceURL=pen.js
    </script>
</body>
</html>