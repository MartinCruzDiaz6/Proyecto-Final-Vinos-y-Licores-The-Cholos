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
<b><img src="img/oscura.jpg" width="9%"  height="10%"></b>
<b><img src="img/arte.jpg" width="12.2%"  height="10%"></b>
<b><img src="img/cerveza.jpg" width="10.5%"  height="10%"></b>

<b><img src="img/vyl.jpg" width="10%"  height="10%"></b>

<b><img src="img/cerveza.jpg" width="10.5%"  height="10%"></b>
<b><img src="img/arte.jpg" width="12.2%"  height="10%"></b>
<b><img src="img/oscura.jpg" width="9%"  height="10%"></b>
</marquee>
   <h1 align="center">Cervezas</h1>
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
   			 <img src="https://i1.wp.com/goula.lat/wp-content/uploads/2020/05/cerveza-.jpg?fit=1000%2C444&ssl=1" />
   			</td>									
   		</tr>
    <tr>
   	 <td> <!-- seccion-->
   	  <div>
   		<h2>Cerveza</h2>
   		  <a href="index.php"><img src="img/cerveza1.jpg" width="300px" height="150px"> <img src="img/cerveza.jpg" width="200px" height="150px"></a>
   		  <p>La cerveza es una bebida alcohólica que por miles de años ha hecho parte de la humanidad. Es un licor no destilado que generalmente contiene entre 3% y 9% de volumen de alcohol (pudiendo ser más) preparado a base de cebada u otros cereales, fermentada en agua con levadura y aromatizada con lúpulo u otras plantas.</p>
   	  </div>
   	 </td>
   	</tr>
   	<tr>
   		<td> <!-- seccion -->
   		  <div>
   			<h2>Cerveza Oscura</h2>
               <a href="index.php"><img src="img/oscura.jpg" width="300px" height="150px"> <img src="img/oscura1.jpg" width="200px" height="150px"></a>
   				<p>La cerveza negra es un tipo de cerveza lager alemana opaca, de color muy oscuro y sabor fuerte que recuerda al chocolate o al café. Aunque tienen un sabor parecido, son más suaves y menos amargas que las stouts o porters británicas, debido al uso de levadura lager en lugar de ale y a que están hechas de malta tostada, lo que les da su color oscuro.</p>
   		  </div>	
   		</td>
   	</tr>
       <tr>
   		<td> <!-- seccion -->
   		  <div>
   			<h2>Cerveza Artesanal</h2>
               <a href="index.php"><img src="img/arte.jpg" width="300px" height="150px"> <img src="img/arte1.jpg" width="200px" height="150px"></a>
   				<p> Las cervezas artesanales son cervezas sin aditivos ni conservantes y sin pasteurizar. Están vivas y son un producto evolutivo, que cambia cada día un poco, con presencia de levadura viva (visible o no). Se producen mediante un proceso natural a partir del grano, malta, sin utilizar extractos ni productos diferentes del agua, levadura, lúpulo y el cereal para hacer la malta.</p>
   		  </div>	
   		</td>
   	</tr>
       </div>
       <tr height="100px"><!-- pie de página -->
   		<td colspan="2">
   			<h3>Licenciatura en Sistemas Computacionales</h3>
   			<p>&copy; Copyright 2021. The Cholos</p>
   		</td>
        </tr>
    </table>
    <div id="ultimo"></div>
</body>
</html>