<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ingresar datos</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body background="fondo.jpg">
<div class="todo">
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  	<font size="6" face="Monotype Corsiva" color="#0E2AD8">
  		<span> <h1>Ingresa tus Datos</h1> </span>
  		<br>
	  <form action="nuevo_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  		<label>Numero de celular </label>
  		<input type="text" id="id_producto" name="id_producto"><br>
  		 &nbsp;
  		<label>Nombre </label>
  		<input type="text" id="producto" name="producto" ><br>
  		 &nbsp;
  		<label>Correo: </label>
  		<textarea style="border-radius: 10px;" rows="3" cols="50" name="descripcion" ></textarea><br>
  		</font>
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
</div>
</body>
</html>