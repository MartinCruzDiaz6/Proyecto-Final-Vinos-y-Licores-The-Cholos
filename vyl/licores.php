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
<b><img src="img/licor.jpg" width="10%"  height="10%"></b>
<b><img src="img/licores.jpg" width="10%"  height="10%"></b>
<b><img src="img/brandi.jpg" width="10%"  height="10%"></b>

<b><img src="img/vyl.jpg" width="10%"  height="10%"></b>

<b><img src="img/brandi.jpg" width="10%"  height="10%"></b>
<b><img src="img/licores.jpg" width="10%"  height="10%"></b>
<b><img src="img/licor.jpg" width="10%"  height="10%"></b>
</marquee>
   <h1 align="center">Licores</h1>
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
   			 <img src="https://img.freepik.com/foto-gratis/vaso-whisky-o-conac-u-otro-tipo-alcohol-salpicaduras-cubo-hielo-sobre-fondo-madera_288539-20.jpg?size=626&ext=jpg" />
   			</td>									
   		</tr>
    <tr>
   	 <td> <!-- seccion-->
   	  <div>
   		<h2>Whisky</h2>
   		  <a href="index.php"><img src="img/licores1.png" width="300px" height="150px"> <img src="img/licor.jpg" width="150px" height="150px"></a>
   		  <p>El Whisky es una bebida alcoh??lica producida a partir de la destilaci??n del fermento de la malta, cereales (cebada, trigo, centeno y ma??z) o cervezas, posee grandes variedades que se originan a partir del m??todo de producci??n empleado, del a??ejamiento seg??n el productor y principalmente del agua empleada para su elaboraci??n. Su graduaci??n cal??rica, oscila entre los 35?? a 50??.</p>
   	  </div>
   	 </td>
   	</tr>
   	<tr>
   		<td> <!-- seccion -->
   		  <div>
   			<h2>Brandy</h2>
               <a href="index.php"><img src="img/brandi1.png" width="300px" height="150px"> <img src="img/brandi.jpg" width="150px" height="150px"></a>
   				<p>Es un licor hecho originalmente de hollejos de uvas. Hay variedades que incluyen la uva entera u otras frutas, y estas adquieren su nombre a partir de su origen o procesamiento, es considerado un licor fino para ser bebido como bajativo. El brandy es una bebida alcoh??lica destilada producida por la destilaci??n de vinos; el brandy tradicional se prepara a partir de vinos de uva, aunque tambi??n existen brandies hechos a partir de otras frutas y del bagazo de uva. En esta secci??n se presentan documentos relacionados con los aspectos m??s importantes a tener en cuenta en la calidad, composici??n y autenticidad del brandy, as?? como algunos estudios econ??micos sobre la producci??n de brandy de frutas.</p>
   		  </div>	
   		</td>
   	</tr>
       <tr>
   		<td> <!-- seccion -->
   		  <div>
   			<h2>Ron</h2>
               <a href="index.php"><img src="img/ron1.jpg" width="300px" height="150px"> <img src="img/ron.jpg" width="150px" height="150px"></a>
   				<p> Aguardiente obtenido por fermentaci??n y destilaci??n de las melazas, las cuales son un subproducto del jugo de ca??a de az??car; precisamente, es resultado del residuo del calentamiento y cristalizaci??n del jugo de ca??a, lo que deriva en az??car granulada; el resto que no se completa de cristalizar viene a ser un l??quido turbio y denso, eso es la melaza. El ron incluye a los tipos claros ligeros, t??picos de la Rep??blica Dominicana, Cuba y Puerto Rico, y los rones m??s pesados y de m??s sabor como los de Jamaica. Lleg?? a ser un producto importante de las Antillas (Indias Occidentales) luego de la introducci??n de la ca??a de az??car en 1493 por Crist??bal Col??n.</p>
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