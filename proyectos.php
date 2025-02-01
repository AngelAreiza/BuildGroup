<?php
    include("conex_bd.php");

    $directorio = "pdf/";
    
    if (isset($_POST['register'])) {
        // Verificar que se haya subido un archivo
        if (!isset($_FILES['pdf']) || $_FILES['pdf']['error'] !== UPLOAD_ERR_OK) {
            echo '<h3 class="text-center text-danger">¡Error al subir el archivo!</h3>';
            exit;
        }

        $pdf_name = basename($_FILES['pdf']['name']);
        $pdf_path = $directorio . $pdf_name;
        $tipoArchivo = strtolower(pathinfo($pdf_path, PATHINFO_EXTENSION));

        // Verificar que sea un PDF
        if ($tipoArchivo !== "pdf") {
            echo '<h3 class="text-center text-danger">¡Por favor seleccione un archivo PDF!</h3>';
            exit;
        }

        // Verificar que los campos no estén vacíos
        if (empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['proyecto'])) {
            echo '<h3 class="text-center text-danger">¡Por favor complete los campos!</h3>';
            exit;
        }

        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $proyecto = trim($_POST['proyecto']);
        $fecha_reg = date("Y-m-d"); // Formato compatible con MySQL

        // Mover el archivo a la carpeta 'pdf/'
        if (!move_uploaded_file($_FILES['pdf']['tmp_name'], $pdf_path)) {
            echo '<h3 class="text-center text-danger">¡Error al guardar el archivo!</h3>';
            exit;
        }

        // Insertar en la base de datos
        $consulta = "INSERT INTO `proyectos`(`nombre`, `correo`, `proyecto`, `pdf`, `fecha_reg`) 
                    VALUES ('$nombre','$email','$proyecto', '$pdf_path', '$fecha_reg')";

        if (mysqli_query($conex, $consulta)) {
            echo '<h3 class="text-center text-success">¡Registro exitoso!</h3>';
        } else {
            echo '<h3 class="text-center text-danger">¡Error en el registro!</h3>';
        }
    }
?>
