<?php 
    include("conexion.php");

    if (isset($_POST['register'])){
        if(
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['apellido']) >= 1 &&
            strlen($_POST['fechanac']) >= 1 &&
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['mensaje']) >= 1
        )
        {
            $email = trim($_POST['email']);
            $name = trim($_POST['name']);
            $apellido = trim($_POST['apellido']);
            $fechanac = trim($_POST['fechanac']);
            $phone = trim($_POST['phone']);
            $mensaje = trim($_POST['mensaje']);
            $consulta="INSERT INTO asociacion(email, nombre, apellido, fecha_nac, telefono, mensaje)
            VALUES ('$email', '$name', '$apellido', '$fechanac', '$phone', '$mensaje')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado){
            ?>
                <h1 class="correcto">"¡Te has inscripto correctamente!"</h1>
            <?php 
            } else{
                ?>
                <h1 class="incorrecto">¡Ups ha ocurrido un error!"</h1>
            <?php 
         }
        } else {
            ?>
                <h1 class="incorrecto">Completa todos los campos!</h1>
                <?php 
        }
    }
?>