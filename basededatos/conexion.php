<?php
    $servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="base";

	$conexion = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	//Comprobar conexion
	if(mysqli_connect_errno())
	{
		printf("Fallo la conexion");
	}
	else {
		//printf("Estas conectado");
	}
?>
