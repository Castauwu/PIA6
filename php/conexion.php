<?php
try{
$conexion = new PDO('mysql:host=localhost;dbname=pia6',"root","Andresfmejia");
} catch (PDOException $e) {
	echo "Error".$e->getMessage();
}
?>