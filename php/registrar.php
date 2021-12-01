<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$pwd = $_POST['Pass'];
$Genero = $_POST['Genero'];
$Perfil = 2;
try{
	include "conexion.php";
$sql="INSERT INTO usuarios(Id_usuarios, Nombre, Apellido, Sexo, Perfil) VALUES (NULL, :nombre, :apellido, :sexo, :perfil)";
$sql2="INSERT INTO inicio_sesion(Id, Correo, Password) VALUES (NULL, :email, :pass)";

	$consulta = $conexion->prepare($sql);
	$consulta->execute(array(
		':nombre'=> $nombre,
		':apellido' => $apellido,
		':sexo' => $Genero,
		':perfil' => $Perfil,
	));

	$consulta2 = $conexion->prepare($sql2);
	$consulta2->execute(array(
		':email'=> $correo,
		':pass' => $pwd 
		));
	header("location:../index.html");	
}
catch(Exceptio $e){
	echo 'Error conectando a la base de datos'. $e->getMessage();
}
?>