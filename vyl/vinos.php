<?php
session_start();
if(isset($_SESSION['usuario']))
{
        $usuarioSesion=$_SESSION['usuario'];
        $tipoSesion=$_SESSION['tipo'];
        $nombreSesion=$_SESSION['nombreUsuario'];

}
else
{
        $usuarioSesion='';
        $tipoSesion='';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
        <title>VYL.com</title>
        <link rel="stylesheet" href="css/style2.css">
        
        <style>
#ultimo + div{
     visibility: hidden;
}
</style>
</head>
<body>
<marquee bgcolor="#977AB6" behavior="scroll" direction="left" width="100%" height="125">
<b><img src="img/vinos.jpg" width="15%"  height="10%"></b>
<b><img src="img/vinoespumoso.jpg" width="13%"  height="10%"></b>
<b><img src="img/vinotinto.jpg" width="10%"  height="10%"></b>

<b><img src="img/vyl.jpg" width="10%"  height="10%"></b>

<b><img src="img/vinotinto.jpg" width="10%"  height="10%"></b>
<b><img src="img/vinoespumoso.jpg" width="13%"  height="10%"></b>
<b><img src="img/vinos.jpg" width="15%"  height="10%"></b>
</marquee>
   <h1 align="center">Vinos</h1>
   <nav>
       <ul>
           <li><a href="index.php">Inicio</a></li>
           <li><a href="vinos.php">vinos</a></li>
           <li><a href="licores.php">Licores</a></li>
           <li><a href="cervezas.php">Cervezas</a></li>
           <li><a href="nosotros.php">Nosotros</a></li>
           <li><a href="contacto.php">Contacto</a></li>
           <?php
             if($tipoSesion==1)
             {
                     ?>
                     <li><a href="inventarios/inventario.php">Inventario</a></li>
                     <?php
                
             }
           ?>

          
              <?php
                  if($usuarioSesion<>'')
                  {
                          ?>
                          <p><?php echo $nombreSesion."(". $usuarioSesion.")" ?></p>
                          <a href="usuarios/cerrarsesion.php">Cerrar Sesion</a>
                          <?php
                  }
                  else
                  {
                          ?>
                          <a href="login.php">Iniciar Sesion</a>
                          <?php
                  }

              ?>
           
       </ul>
   </nav>
   <div>
   <table width="100%" border="1">
   		<tr><!--encabezado-->
   			<td colspan="2" align="center" bgcolor="#000000">
   			 <img src="http://world-wines.es/media/wysiwyg/banner-3.png" />
   			</td>									
   		</tr>
    <tr>
   	 <td> <!-- seccion-->
   	  <div>
   		<h2>Vino Espumoso</h2>
   		  <a href="index.php"><img src="img/vinoespumoso.jpg" width="300px" height="150px"> <img src="img/vinoespumoso1.jpg" width="150px" height="150px"></a>
   		  <p>Los vinos espumosos son vinos frescos, divertidos y con gas, el cual se consigue gracias a una segunda fermentaci??n, en botella cerrada o en dep??sitos cerrados. Se caracterizan por ser burbujeantes donde la espuma se eleva r??pidamente dentro de la copa. Son vinos que han ganado mucha popularidad a lo largo de los a??os y que se utilizan para cualquier ocasi??n sobre todo en festividades. Hoy en En Copa de Bal??n te explicamos qu?? son los vinos espumosos, cuales son los m??todos m??s famosos para su elaboraci??n y algunos de las D.O m??s importantes de vino espumoso.</p>
   	  </div>
   	 </td>
   	</tr>
   	<tr>
   	   <td> <!-- Seccion -->
   		 <div>
   			<h2>Vino Tinto</h2>
               <a href="index.php"><img src="img/vinotinto1.jpg" width="300px" height="150px"> <img src="img/vinotinto.jpg" width="150px" height="150px"></a>
   				<p>El vino tinto est?? realizado con mostos de uvas tintas y en su elaboraci??n se consigue la difusi??n de la materia colorante que contienen los hollejos de la uva. En funci??n del tiempo de envejecimiento que se realice en la barrica y en la botella, pueden obtenerse vinos j??venes, crianzas, reservas o grandes reservas.</p>
   		 </div>
   		</td>
   	</tr>
   	<tr>
   		<td> <!-- seccion -->
   		  <div>
   			<h2>Vino Blanco</h2>
               <a href="index.php"><img src="img/vinoblanco.jpg" width="300px" height="150px"> <img src="img/vinoblanco1.jpg" width="150px" height="150px"></a>
   				<p>El vino blanco es una bebida producida mediante la fermentaci??n alcoh??lica de diferentes tipos de uvas blancas. Puede beberse tanto solo como acompa??ado de comida, y tradicionalmente se ha asociado con el maridaje de pescados, mariscos y algunas carnes blancas. El vino blanco es, por lo tanto, una bebida alcoh??lica en torno a la cual existe todo un sector de producci??n. El producto se consigue ??nicamente tras un largo proceso de cultivar la uva, recogerla, limpiarla, prepararla y fermentarla durante periodos que pueden ir desde unos pocos meses hasta varias d??cadas. </p>
   		  </div>	
   		</td>
   	</tr>
       </div>
       <tr height="100px"><!-- pie de p??gina -->
   		<td colspan="2">
   			<h3>Licenciatura en Sistemas Computacionales</h3>
   			<p>&copy; Copyright 2021. The Cholos</p>
   		</td>
        </tr>
    </table>
    <div id="ultimo"></div>
</body>
</html>