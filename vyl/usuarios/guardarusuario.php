<?php
   include_once "../conexion.php";
   $nombre=$_POST['nombre'];
   $correo=$_POST['correo'];
   $password=$_POST['password'];
   $conexion=new mysqli($servidorBD,$usuarioBD,$passwordBD,$nombreBD);
   $consulta="INSERT INTO usuarios(NombreCompleto,Correo,Password,Tipo) VALUES('$nombre','$correo','$password', 2)";
if($resultado=$conexion->query($consulta))
{
    header("Location:../login.php");
}
else{
    header("Location:guardarusuario.php");
}
?>