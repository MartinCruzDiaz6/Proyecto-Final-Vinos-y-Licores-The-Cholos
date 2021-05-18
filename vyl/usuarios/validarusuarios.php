<?php
   include_once "../conexion.php";
   $correo=$_POST['correo'];
   $password=$_POST['password'];
   $conexion=new mysqli($servidorBD,$usuarioBD,$passwordBD,$nombreBD);
   $consulta="SELECT * FROM usuarios where correo='".$correo."'";
   $resultado=$conexion->query($consulta);
   if($registro=$resultado->fetch_array(MYSQLI_ASSOC))
   {
       if($registro['Password']==$password)
       {
           session_start();
           $_SESSION['idUsuario']=$registro['Id'];
           $_SESSION['nombreUsuario']=$registro['NombreCompleto'];
           $_SESSION['usuario']=$registro['Correo'];
           $_SESSION['tipo']=$registro['Tipo'];
           header("Location: ../index.php");
       }
       else
       {
        header("Location: ../login.php");
        exit();
       }
   }

?>