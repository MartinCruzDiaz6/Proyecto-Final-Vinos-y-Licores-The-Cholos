<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VYL.com - login</title>
    <link rel="stylesheet" href="css/style1.css">
    
    <style>
#ultimo + div{
     visibility: hidden;
}
</style>
</head>
<body background="img/lcd.jpg">

    <div >
    <h2 align="center">Iniciar Sesion</h2>
    <form action="usuarios/validarusuarios.php" method="POST" align="center">
            <label>Correo Electronico</label><br>
            <input type="text" name="correo" placeholder="Escribe tu correo" ><br>
            <br><label>Password</label><br>
            <input type="password" name="password" ><br>
            <br><input type="submit" value="Enviar">
        </form>
    </div>
    <div align="center">
        <a href="usuarios/nuevousuario.php" >Crear Cuenta</a>
    </div>
    <div id="ultimo"></div>
</body>
</html>