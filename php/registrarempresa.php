<?php

$empresa = $_POST['empresa'];
$nit = $_POST['nit'];
$gerente = $_POST['geren'];
$correo = $_POST['correo'];
$contraseña = $_POST['Pass'];
$Perfil = 3;
try{
	include "conexion.php";
$sql="INSERT INTO empresa(id_empresa, perfil, nombre, NIT, representante_legal, correo, contraseña) VALUES (NULL, :perfil, :empresa, :nit, :geren, :correo, :Pass)";

	$consulta = $conexion->prepare($sql);
	$consulta->execute(array(
		':empresa'=> $empresa,
		':nit' => $nit,
		':geren' => $gerente,
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