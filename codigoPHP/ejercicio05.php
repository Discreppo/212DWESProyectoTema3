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
            <h1>Ejercicio 05</h1>
        </header>
        <main>

            <?php
            /**
             * @author Oscar Pascual Ferrero
             * @version 1.0 
             * @since 18/10/2023
             */
            /* Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp) */

            // Inicializar la variable con la marca de tiempo actual
            $timestamp = time();
            
            echo '<h2>Timestamp</h2>';
            // Mostrar la marca de tiempo
            echo "Marca de tiempo actual: " . $timestamp;

            echo '<h2>Timestamp formateada</h2>';
            // Mostrar la marca de tiempo formateada como una fecha y hora
            echo "Marca de tiempo actual: " . date('Y-m-d H:i:s', $timestamp);
            ?>

        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>