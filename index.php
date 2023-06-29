<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Registro</title>
	<link rel="stylesheet" href="./css/contacto.css">
</head>
<body>
    <form method="post">
    	<h1>¡Contactanos!</h1>
        <p>Inicia tu registro</p>
        <div class="input_wrapper">
            <input type="text" name="name" placeholder="Nombre">
    	    <input type="email" name="email" placeholder="Email">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="text" name="fechanac" placeholder="Fecha nacimiento">
            <input type="tel" name="phone" placeholder="Telefono">
            <input type="text" name="mensaje" placeholder="Mensaje">
    	    <input type="submit" name="register">Enviar</input>
        </div>
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>