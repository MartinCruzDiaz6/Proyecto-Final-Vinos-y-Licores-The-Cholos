<?php
session_start();
if(isset($_SESSION['usuario']))
{
        $usuarioSesion=$_SESSION['usuario'];
        $tipoSesion=$_SESSION['tipo'];
        $nombreSesion=$_SESSION['nombreUsuario'];
        if($tipoSesion<>1)
        {
                header("Location: ../index.php");
        }

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
        <link rel="stylesheet" href="../css/style4.css">
        
        <style>
#ultimo + div{
     visibility: hidden;
}
</style>
        
</head>
<body>
<marquee bgcolor="#977AB6" behavior="scroll" direction="left" width="100%" height="125">
<b><img src="../img/vinos.jpg" width="15%"  height="10%"></b>
<b><img src="../img/licores.jpg" width="10%"  height="10%"></b>

<b><img src="../img/vyl.jpg" width="10%"  height="10%"></b>

<b><img src="../img/licores.jpg" width="10%"  height="10%"></b>
<b><img src="../img/vinos.jpg" width="15%"  height="10%"></b>

<b><img src="../img/vinos.jpg" width="15%"  height="10%"></b>
<b><img src="../img/licores.jpg" width="10%"  height="10%"></b>

<b><img src="../img/vyl.jpg" width="10%"  height="10%"></b>

<b><img src="../img/licores.jpg" width="10%"  height="10%"></b>
<b><img src="../img/vinos.jpg" width="15%"  height="10%"></b>
</marquee>
   <h1 align="center">Nuevo Inventario</h1>
   <nav>
       <ul>
       <li><a href="../index.php">Inicio</a></li>
           <li><a href="../vinos.php">vinos</a></li>
           <li><a href="../licores.php">Licores</a></li>
           <li><a href="../cervezas.php">Cervezas</a></li>
           <li><a href="../nosotros.php">Nosotros</a></li>
           <li><a href="../contacto.php">Contacto</a></li>
           <li>
           <?php
             if($tipoSesion==1)
             {
                     ?>
                     <a href="inventario.php">Inventarios</a>
                     <?php
                
             }
           ?>
           </li>
          
              <?php
                  if($usuarioSesion<>'')
                  {
                          ?>
                          <p><?php echo $nombreSesion."(". $usuarioSesion.")" ?></p>
                          <a href="../usuarios/cerrarsesion.php">Cerrar Sesion</a>
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
   <h1>Datos del Producto</h1>
   <div>
     <form action="guardarinventario.php" method="post">
            <label>Nombre:</label>
            <input type="text" name="nombre" placeholder="Nombre del Producto" >
            <label>Precio:</label>
            <input type="text" name="precio" placeholder="Escribe el precio" >
            <label>Existencia:</label>
            <input type="text" name="existencia" placeholder="Escribe la existencia" >
            <input type="submit" value="Guardar">
     </form>  
   </div>
   <div id="ultimo"></div>
</body>
</html>