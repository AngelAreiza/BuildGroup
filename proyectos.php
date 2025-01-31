<?php

    include("conex_bd.php");

    if (isset($_POST['register'])) {
        if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['proyecto']) >= 1) {
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);
            $proyecto = trim($_POST['proyecto']);
            // $pdf = trim($_FILES['pdf']);
            $fecha_reg = date("d/m/y");

            // $directorio = "pdf/";

            // $pdf = $directorio . basename($_FILES['pdf']['name']);

            $consulta = "INSERT INTO `proyectos`(`nombre`, `correo`, `proyecto`, `pdf`, `fecha_reg`) VALUES ('$nombre','$email','$proyecto', '$pdf', '$fecha_reg')";
            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
                ?>
                <h3 class="text-center text-success">¡Registro exitoso!</h3>
                <?php
            } else {
                ?>
                <h3 class="text-center text-danger">¡Error en el registro!</h3>
                <?php
            }
        } else{
            ?>
            <h3 class="text-center text-danger">¡Por favor complete los campos!</h3>
            <?php
        }
        
    }
?>