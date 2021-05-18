<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VYL.com - Registro</title>
    <link rel="stylesheet" href="../css/style1.css">
    
    <style>
#ultimo + div{
     visibility: hidden;
}
</style>
    
</head>
<body background="../img/fd.jpg">
    
    <div class="form">
    <h2 align="center">Registrar usuario</h2>
        <form action="guardarusuario.php" method="post" align="center">
            <label>Nombre Completo</label><br>
            <input type="text" name="nombre" placeholder="Escribe tu nombre" required><br>
            <br><label>Correo Electronico</label><br>
            <input type="text" name="correo" placeholder="Escribe tu correo" required><br>
            <br><label>Password</label><br>
            <input type="password" name="password" required><br>
            <br><input type="submit" value="Guardar">
        </form>
    </div>
    <div id="ultimo"></div>
</body>
</html>