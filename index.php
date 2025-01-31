<?php 
include "header.php";
//include "navbar.php";
?>

<html>

<div class="bg-dark text-white text-center position-relative" style="background: url('img/fondo1.jpg') no-repeat center center/cover; height: 100vh;">
<div class="position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center flex-wrap" style="width: 80%; max-width: 1200px;">
    <?php
        include "navbar.php";
    ?>

    <!-- Sección de Texto -->
    <section id="box-left">
        <h1>Build Group</h1>
            <p>En BUILD GROUP, estamos aquí para transformar tus proyectos en una realidad que supere tus expectativas. Ya sea que sueñes con una obra civil innovadora o necesites soluciones topográficas de alta precisión, nuestro equipo de expertos multidisciplinarios está listo para escucharte y trabajar contigo en cada detalle.
                Con un firme compromiso con la calidad, la sostenibilidad y el uso de tecnología de vanguardia como drones, software especializado y equipos de medición avanzados, te garantizamos resultados eficientes, responsables y personalizados.
                Tu visión es nuestra inspiración, y nuestra misión es hacerla realidad con el profesionalismo, la confianza y la dedicación que mereces. Cuéntanos tu proyecto, y juntos construiremos soluciones que marquen la diferencia para hoy y para el futuro. ¡Hablemos y demos vida a tus ideas!
            </p>
    </section>

    <!-- Sección del Formulario -->
    <section id="form-right">
        <h2>¡Hacemos realidad tus ideas! 💡🛠️</h2>
            <form method="post" enctype="multipart/form-data">
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                <input type="email" name="email" id="correo" placeholder="Correo" required>
                <input type="text" name="proyecto" id="proyecto" placeholder="Describe Aqui tu proyecto" required>
                <input type="file" accept="pdf" name="pdf" id="pdf">
                <button type="submit" name="register">Enviar</button>
            </form>

    <?php include("proyectos.php"); ?>
    </section>

</div>
</div>


</html>

<?php
include "footer.php";
?>