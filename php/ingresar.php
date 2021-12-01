<?php
session_start();
$correo = $_POST['user'];
$pwd = $_POST['pass'];
$perfil = 1;
$perfil = 2;
$perfil = 3;
try{
	include "conexion.php";

$sql="SELECT * FROM inicio_sesion WHERE Correo = :email and Password = :pwd";
$sql2="SELECT * FROM usuarios WHERE Perfil = :perfil";

	$consulta = $conexion->prepare($sql);
	$consulta->execute(array(
		':email'=> $correo,
		':pwd' => $pwd 
		));

	$consulta2 = $conexion->prepare($sql2);
	$consulta2->execute(array(
		':perfil'=> $perfil, 
		));

	$cuenta = $consulta->rowCount();
				if($cuenta > 0)
				{
					$_SESSION['usuario']=$correo;	
					header("location:home.php");
				}
				elseif ($correo==email && $perfil == 1 )
				{
					header("location:../admin/index.html");
				}
				else 
				{
					header("location:../index.html");
				}
}
catch(Exceptio $e){
	echo 'Error conectando a la base de datos'. $e->getMessage();
}
?>