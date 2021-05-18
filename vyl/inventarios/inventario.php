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
        if(isset($_GET['idEliminar'])){
                include_once "../conexion.php";
                   $conexion=new mysqli($servidorBD,$usuarioBD,$passwordBD,$nombreBD);
                   $consulta="DELETE FROM productos WHERE Id=".$_GET['idEliminar'];
                   $resultado=$conexion->query($consulta);
                   header("Location: $_SERVER[PHP_SELF]");
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
        <link rel="stylesheet" type="text/css" href="../Bootstrap/bootstrap.min.css">
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <title>VYL.com</title>
        <link rel="stylesheet" href="../css/style7.css">
        <script type="text/javascript">
              function editar(id){

              }
              function eliminar(id){
                      if(confirm('¿Estas seguro que quieres eliminar este producto?'))
                      {
                              window.location.href='inventario.php?idEliminar='+id;
                      }
              }
        </script>
        
        
<style>
#ultimo + div{
     visibility: hidden;
}
</style>
        
</head>
<body background="../img/fondo1.jpg">
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
   <h1 align="center">Inventario</h1>
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
   <h1>Lista de Inventario</h1>
   <a href="nuevoinventario.php">Nuevo Inventario</a>
   <div class="container">
       <table  class="table">
            <thead class="thead-dark">
               <tr>
               <th scope="col">Id</th>
               <th scope="col">Nombre</th>
               <th scope="col">Precio</th>
               <th scope="col">Existencia</th>
               <th scope="col"></th>
               <th scope="col"></th>
               </tr>
            </thead>
            <tbody>
              <?php
                   include_once '../conexion.php';
                   $conexion=new mysqli($servidorBD,$usuarioBD,$passwordBD,$nombreBD);
                   $consulta="SELECT * FROM productos";
                   $resultado=$conexion->query($consulta);
                   while($registro=$resultado->fetch_assoc())
                   {
                        ?>
                        <tr>
                          <td> <?php echo $registro['Id']; ?> </td>
                          <td> <?php echo $registro['Nombre']; ?> </td>
                          <td> <?php echo $registro['Precio']; ?> </td>
                          <td> <?php echo $registro['Existencia']; ?> </td>
                          <td><a href="javascript:editar('<?php echo $registro['Id'] ?>')"> <img src="../img/editar.png" width="50px"  height="50px"></a></td>
                          <td><a href="javascript:eliminar('<?php echo $registro['Id'] ?>')"> <img src="../img/cancelar.png" width="50px"  height="50px"></a> </td>
                        </tr>
                        <?php
                   }
              ?>
            </tbody>
       </table>
   </div>
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
   <tr height="100px"><!-- pie de página -->
   		<td colspan="2">
   			<h3>Licenciatura en Sistemas Computacionales</h3>
   			<p>&copy; Copyright 2021. The cholos</p>
   		</td>
        </tr>
        <div id="ultimo"></div>
</body>
</html>