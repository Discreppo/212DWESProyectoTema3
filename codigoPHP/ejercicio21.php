<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Oscar Pascual Ferrero</title>
        <style>
            body {
                display: flex;
                flex-direction: column;
            }
            header{
                position: fixed;
                top: 0;
                width: 100%;
                background-color: #fff;
            }
            main{
                margin-top: 10%;
            }
            footer{
                bottom: 0;
                text-align: center;
                width: 100%;
                background-color: lightgray;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Ejercicio 21</h1>
        </header>
        <main>
            <form action="tratamiento21.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre"><br><br>        
                <label for="edad">Edad:</label>
                <input type="text" name="edad"><br><br>
                <label for="sueldo">Sueldo:</label>
                <input type="text" name="sueldo"><br><br>

                <input type="submit" value="Enviar">
            </form>
            <?php
            /* Construir un formulario para recoger un cuestionario realizado a una persona y 
             * enviarlo a una página Tratamiento.php para que muestre las preguntas y las 
             * respuestas recogidas(Probar método post y get). */
            ?>

        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>