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
            <h1>Ejercicio 22</h1>
        </header>
        <main>            
            <?php
            /* Construir un formulario para recoger un cuestionario realizado a 
             * una persona y mostrar en la misma página las preguntas y las 
             * respuestas recogidas. */
            
            if (isset($_REQUEST['enviar'])) {
                //Código que se ejecuta cuando se envía el formulario
                $nombre = $_REQUEST["nombre"];
                $edad = $_REQUEST["edad"];
                $sueldo = $_REQUEST["sueldo"];

                echo "<p><strong>Nombre:</strong> $nombre</p>";
                echo "<p><strong>Edad:</strong> $edad</p>";
                echo "<p><strong>Color:</strong> $sueldo</p>";
            } else {
                //Código que se ejecuta antes de rellenar el formulario
                ?>                
                <form name="cuestionario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre"><br><br>        
                    <label for "edad">Edad:</label>
                    <input type="text" name="edad"><br><br>
                    <label for="sueldo">Sueldo:</label>
                    <input type="text" name="sueldo"><br><br>
                    <input name="enviar" type="submit" value="Enviar">
                </form>
                <?php
            }
            ?>

        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>