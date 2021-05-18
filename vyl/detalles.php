<?php
session_start();
if(isset($_SESSION['usuario']))
{
        $usuarioSesion=$_SESSION['usuario'];
        $tipoSesion=$_SESSION['tipo'];
        $nombreSesion=$_SESSION['nombreUsuario'];
        $id=$_GET['id'];
        include_once 'conexion.php';
        $conexion=new mysqli($servidorBD,$usuarioBD,$passwordBD,$nombreBD);
        $consulta="SELECT * FROM productos WHERE Id='".$id."'";
        $resultado=$conexion->query($consulta);
        if($registro=$resultado->fetch_array(MYSQLI_ASSOC))
        {
            $nombre=$registro['Nombre'];
            $precio=$registro['Precio'];
            $existencia=$registro['Existencia'];
        }
}
else
{
        header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
        <title>VYL.com</title>
        <link rel="stylesheet" href="css/style5.css">
        
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
   <h1 align="center">Vinos Y Licores The Cholos</h1>
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
                     <li><a href="Inventarios/inventario.php">Inventario</a></li>
                     <?php
                
             }
           ?>

          
              <?php
                  if($usuarioSesion<>'')
                  {
                          ?>
                          <p><?php echo $nombreSesion."(". $usuarioSesion.")" ?></p>
                          <li><a href="Usuarios/cerrarsesion.php">Cerrar Sesion</a></li><br>
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
           
        <form action="guardarcompra.php" method="post" >
           <labe>Id:</labe>
           <input type="text" name="id" placeholder="nombre del producto" value="<?php echo $id ?>" readonly ><br>
           <br><labe>Nombre:</labe>
           <input type="text" name="nombre" placeholder="nombre del producto" value="<?php echo $nombre ?>" readonly ><br>
           <br><labe>Precio:</labe>
           <input type="text" name="precio" placeholder="Escribe el precio" value="<?php echo $precio ?>" readonly><br>
           <br><labe>Existencia:</labe>
           <input type="text" name="existencia" placeholder="Escribe la existencia" value="<?php echo $existencia ?>" readonly><br>
           <br><labe>Cantidad a comprar:</labe>
           <input type="text" name="cantidad" placeholder="Cantidad a Comprar" ><br>
           <br><input type="submit" value="Guardar">
        </form>

   </div><br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
    <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <hr>
   <hr>
   <tr height="100px"><!-- pie de página -->
   		<td colspan="2">
   			<h3>Licenciatura en Sistemas Computacionales</h3>
   			<p>&copy; Copyright 2021. The cholos</p>
   		</td>
        </tr>
  <div id="ultimo"></div>
</body>
</html>