<?php
  
  $consulta=ConsultarProducto($_GET['no']);

  function ConsultarProducto( $no_prod )
  {
   include 'conexion.php';
   $sentecia="SELECT * FROM dato WHERE no='".$no_prod."' ";
   $resultado= $conexion->query($sentecia) or die ("Error al consultar producto".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['id_producto'],
    $fila['nombre'],
    $fila['descripcion']
   ];
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Producto</title>
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
<div class="todo">

<body background="fondo.jpg"> 
  <font size="6" face="Monotype Corsiva" color="#0E2AD8">
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Datos de usuario</h1> </span>
  		<br>
	  <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="no"  >
  		<label>Numero </label>
  		<input type="text" id="id_producto" name="id_producto" value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label>Nombre </label>
  		<input type="text" id="producto" name="producto" value="<?php echo $consulta[1] ?>"><br>
  		
  		<label>correo </label>
  		<textarea style="border-radius: 10px;" rows="3" cols="50" name="descripcion"> <?php echo $consulta[2] ?>  </textarea><br>
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>

</div>
</font>

</body>
</html>