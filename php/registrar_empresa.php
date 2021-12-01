<?php

$empresa = $_POST['empresa'];
$NIT = $_POST['nit'];
$representante = $_POST['gerente'];
$correo = $_POST['correo'];
$contraseña = $_POST['Pass'];
$Perfil = 3;
try{
	include "conexion.php";
$sql="INSERT INTO empresa(id_empresa, nombre, NIT, representante_legal, correo, contraseña, Perfil) VALUES (NULL, :empresa, :nit, :gerente, :correo, :Pass :perfil)";
	$consulta = $conexion->prepare($sql);
	$consulta->execute(array(
		':empesa'=> $empresa,
		':nit' => $NIT,
		':gerente' => $representante,
		':correo' => $correo,
		':Pass' => $contraseña,
		':perfil' => $Perfil,
	));

	header("location:../index.html");	
}
catch(Exceptio $e){
	echo 'Error conectando a la base de datos'. $e->getMessage();
}
?>