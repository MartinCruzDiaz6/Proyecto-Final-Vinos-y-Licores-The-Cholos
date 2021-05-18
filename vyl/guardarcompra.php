<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$existencia=$_POST['existencia'];
$cantidad=$_POST['cantidad'];
session_start();
$idUsuario=$_SESSION['idUsuario'];
$fecha=date("Y-m-d H:i:s");
if(empty($nombre)) //valido que no sea vacío
{
   header("Location:index.php");
   exit(); 
}
include_once 'conexion.php';
$mysqlConexion=new mysqli($servidorBD,$usuarioBD,$passwordBD,$nombreBD);
$sqlConsulta="SELECT * FROM productos WHERE Id='".$id."'";
$resultado=$mysqlConexion->query($sqlConsulta);
    if($row = $resultado->fetch_array(MYSQLI_ASSOC))
    {   
        $existencia =$row['Existencia'];
        $inventario=$existencia-$cantidad; //resta la cantidad vendida
        if($inventario>=0)
        {
            
            $sqlModifica = "UPDATE productos SET Existencia='$inventario' WHERE Id='".$id."'"; //query que modifica la existencia
            if($modifica=$mysqlConexion->query($sqlModifica))
            {
               
                header("Location:index.php");
              
            }
            else
            {
                header("Location:detalles.php"); //en caso de existir algun error
            }
        }
        else
            {
                header("Location:index.php"); //en caso de existir algun error
            }
    }         
?>