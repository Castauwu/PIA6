<?php
session_start();

$telefono = $_POST['tele'];
$Tipo = $_POST['Tipo_identifi'];
$Noidenti = $_POST['numero'];
$Nacaionalidad = $_POST['nacio'];
$departa = $_POST['departa'];
$pais = $_POST['Pas'];
$ciudad = $_POST['ciuda'];
try{
	include "conexion.php";
$sql="UPDATE usuarios SET Telefono, Tipo_identificacion, No_identificacion, Nacionalidad, Pais, Departamento, Ciudad WHERE Telefono=:, Tipo_identificacion=:Tipo_identifi, Nacionalidad=:nacio, Pais=:Pas, Departamento=:departa, Ciudad=:ciuda"

	$consulta = $conexion->prepare($sql);
	$consulta->execute(array(
		':tele' => $telefono,
		':Tipo_identifi' => $Tipo,
		':numero' => $Noidenti,
		':nacio' => $Nacaionalidad,
		':departa' => $departa,
		':Pas' => $pais,
		':ciuda' => $ciudad,
	));

	header("location:../perfil.php");
					
}
catch(Exceptio $e){
	echo 'Error conectando a la base de datos'. $e->getMessage();
}
?>