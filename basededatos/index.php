<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Scarlett</title>
<link rel="stylesheet" href="dise%C3%B1os.css">
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
<!-- pagina_cosmeticos-->
 &nbsp;
    <p><center><img src="nombre.png" alt="error" ></center></p>
    <hr aling="center" size="5" with="30%" color="31C2EC">
    <center>
       <font size="8" face="Monotype Corsiva" color="#C190EA">Scarlett... la pagina web donde puedes descubrir sobre las mejores marcas economicas de maquillaje de Mexico y mucho mas!!!</font>
    </center>
    <div class="slider">
    <ul>
       &nbsp;
        <li><img src="imagen1.jpg" alt="no se va a poder"></li>
        <li><img src="imagen2.jpg" alt="tampoco de pudo"></li>
        <li><img src="imagen3.jpg" alt="ya valio"></li>
        <li><img src="imagen4.jpg" alt="no pos no"></li>        

    </ul>
    </div>
        &nbsp;
      <center>
          <a href=labiospagina.html><img src="labios.jpg"  alt="no carga" width="250" height="250" href=labiospagina.html></a>
      &nbsp;
      <img src="ojos.jpg" alt="no carga" width="250" height="250">
      &nbsp;
      <p>
       &nbsp;
      <img src="u%C3%B1as.png" alt="no carga" width="250" height="250">
       &nbsp;<img src="brochas.png" alt="no carga" width="250" height="250">
      </center>
        &nbsp;
       <marquee bgcolor="#A6F4ED" behavior="scroll" direction="left"><font color="#0E2AD8" size="6" face="Modern No. 20">Visita las paginas oficiales para mas informacion</font></marquee>
       <b>
        <center>
        <font size="6" face="Monotype Corsiva" color="#C190EA">
        Da click en la imagen para ir a su pagina principal.
        </font>
        <p>
        <button><a href="https://bissu.com/"><img src="bissu.png" width="100" height="35" alt=""></a></button>
        <button><a href="https://www.byapplecosmetics.com.mx/inicio"><img src="byapple.png" width="100" height="35" alt=""></a></button>
        <button><a href="https://www.saniye.com.mx/"><img src="saniye.png" width="100" height="35" alt=""></a></button>
        <button><a href="https://www.jafra.com.mx/"><img src="jaffra.jpg" width="100" height="35" alt=""></a></button>
        <button><a href="https://www.prosaproductosnaturales.mx/"><img src="prosa.png" width="100" height="35" alt=""></a></button>
        </center>
         &nbsp;
      </b>
<!-- termina-->
<font size="6" face="Monotype Corsiva" color="#0E2AD8">
       <center>
        Enterante de nuestras nuevas y mejores ofertas... registrate para enviarte de manera mas rapida la informacion.
        Da click en nuevo
       </center>
         </font>
 &nbsp;
 <font size="6" face="Century Schoolbook" color="#780ED0 ">
<div class="todo">
  <div id="contenido">
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>No.</th>
  			<th>Tel.celular</th>
  			<th>Nombre</th>
  			<th>Correo electronico</th>
  			<th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>
     
      <?php
        include "conexion.php";
        $sentecia="SELECT * FROM dato";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['no']; echo "</td>";
            echo "<td>"; echo $fila['id_producto']; echo "</td>";
            echo "<td>"; echo $fila['nombre']; echo "</td>";
            echo "<td>"; echo $fila['descripcion']; echo "</td>";
            echo "<td><a href='modif_prod1.php?no=".$fila['no']."'> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
            echo " <td><a href='eliminar_prod.php?no=".$fila['no']."'> <button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
          echo "</tr>";
        }
      ?>
     </font>
  		
  	</table>
  </div>
  
	

</div>


</body>
</html>