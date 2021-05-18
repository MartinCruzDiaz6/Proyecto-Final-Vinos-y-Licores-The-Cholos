<?php
   include_once "../conexion.php";
   $nombre=$_POST['nombre'];
   $precio=$_POST['precio'];
   $existencia=$_POST['existencia'];
   $conexion=new mysqli($servidorBD,$usuarioBD,$passwordBD,$nombreBD);
   $consulta="INSERT INTO productos(Nombre,Precio,Existencia) VALUES('$nombre','$precio','$existencia')";
if($resultado=$conexion->query($consulta))
{
    header("Location:inventario.php");
}
else{
    header("Location:nuevoinventario.php");
}
?>