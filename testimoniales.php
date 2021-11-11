<?php
//http://localhost/plb/Proyecto_Integradora_SFJE/index.php
$host = "localhost";
$port = "3307";
$dbname = "todos";
$user = "postgres";
$password = "";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Integradora</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="home.html">
                    <img src="img/logo.jpg" width="50px" height="50px">
                   Integradora
                </a>
                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/barras.svg" alt="Icono Menu">
                    </a>
                </div>

                <nav id="navegacion" class="navegacion">
                    <a href="nosotros.html">Nosotros</a>
                    <a href="anuncios.html">Catalogo</a>
                    <a href="contacto.html">Registro</a>
                    <a href="testimoniales.php">testimoniales</a>
                </nav>
            </div>
        </div>
    </header>

    <section class="testimoniales">
        <h3 class="centrar-texto fw-300">Testimoniales</h3>
        <div class="testimonial">
            
            <blockquote>
                <i class="fas fa-comment"></i> El personal se comportó de una excelente forma, muy buena atención, el producto cumplio mi expectativas.
            </blockquote>
            <p>- Lonny Daniel</p>
        </div>
    </section>

    <main class="contenedor seccion contenido-centrado">
    <h1>Agregar testimonial</h1>

    <form class="contacto" action="testimoniales.php" method="POST">
        <fieldset>
            <legend>Información Personal</legend>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" placeholder="Tu Nombre">

            <label for="mensaje">Mensaje: </label>
            <textarea  id="mensaje"></textarea>
    </fieldset>
    <input type="submit" value="Enviar" class="boton boton-verde">
    </form>
    <br><br>
    </main>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Catalogo</a>
                <a href="contacto.html">Registro</a>
                <a href="testimoniales.php">testimoniales</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2021 UDG virtual SFJE  jorfigsf1@gmail.com&copy; </p>
            <p class="copyright">Conceptualización de servicios en la nube Codigo: 219917517</p>
        </div>
    </footer>
</body>
</html>