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
        <link rel="stylesheet" href="css/style3.css">
        
        <style>
#ultimo + div{
     visibility: hidden;
}
</style>
</head>
<body background="img/fondo1.jpg">
<marquee bgcolor="#977AB6" behavior="scroll" direction="left" width="100%" height="125">
<b><img src="img/vinos.jpg" width="15%"  height="10%"></b>
<b><img src="img/licores.jpg" width="10%"  height="10%"></b>

<b><img src="img/vyl.jpg" width="10%"  height="10%"></b>

<b><img src="img/licores.jpg" width="10%"  height="10%"></b>
<b><img src="img/vinos.jpg" width="15%"  height="10%"></b>
</marquee>
   <h1 align="center">Nosotros</h1>
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
                          <li><a href="usuarios/cerrarsesion.php">Cerrar Sesion</a></li><br>
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
   <article>
    	<section>
    		<h1>Vinos Y Licores</h1>
    			<p><strong>Autor:</strong>The Cholos</p>
    				<div>
    					<img src="img/vyl.jpg">
    					<p><b><span>HOLAAAA</span></b></p>
    				</div>
    					<h4>
                            Somos una pequeña tienda de Vinos y Licores en linea en donde podras encontrar una buena variedad de productos y distintas marcas de vinos, licores y tambien cervezas.

                            <br> aun nos encontramos creciendo, y nos alegra que confies en nosotros al adquirir nuestros productos
                        </h4>
    	</section>
    		<aside>
    			<h1>EQUIPO</h1>	
    			    <p id="alumnoperfil"><img src="https://proyectoambientales963413350.files.wordpress.com/2021/04/the-cholos-1.jpg?w=1024" width="100%" height="70%" /></p>
    			    <p><strong>Nombre:</strong>The Cholos</p>
    			    <p><strong>Integrantes:</strong><br>
                    <br>Luis Enrique Chavez Ovalles
                    <br> Luis Fernando Gomez Molina
                    <br>Juan Carlos Anaya Gomez
                    <br>Martin Cruz Diaz
                </p>
    				<p><b><a href="http://www.unach.mx">Sitio UNACH</a></b></p>
    		</aside>
    </article>
    <footer><!--Pie de pagina-->
        <p align="left">Fraccionamiento Sta Fe, #2817, calle san angel, municipio de Chiapa de Corzo;Chis</p>
        <p align="left">&copy;  Copyright 2021. The cholos</p>
        </footer>
        <div id="ultimo"></div>
</body>
</html>