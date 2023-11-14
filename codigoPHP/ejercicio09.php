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
            <h1>Ejercicio 09</h1>
        </header>
        <main>

            <?php
            //Existe la constante '__FILE__' para mostrar la ruta completa del archivo actual.
            $rutaArchivo = __FILE__;
            echo("La ruta del archivo que se está ejecutando es: " . $rutaArchivo);
            ?>

        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>