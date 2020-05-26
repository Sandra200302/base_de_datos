<?php
	
	NuevoProducto($_POST['id_producto'], $_POST['producto'], $_POST['descripcion']);
	
	function NuevoProducto($id_prod, $nom, $descrip)
	{
		include 'conexion.php';
		$sentecia= "INSERT INTO dato (id_producto, nombre, descripcion	) VALUES ('".$id_prod."', '".$nom."', '".$descrip."') ";
		$conexion->query($sentecia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado Exitosamante!!");
	window.location.href='index.php';
</script>