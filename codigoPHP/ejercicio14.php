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
            <h1>Ejercicio 14</h1>
        </header>
        <main>

            <?php
            /**
             * @author Carlos García Cachón
             * @version 1.0 
             * @since 17/10/2023
             */
            /* Usando la libreria calculadora que guardo en el directorio /core , vamos a llamar a sus funciones
             * usando la función include
             */
            include_once '../core/calculadora.php';
            echo("El resultado de la suma es: " . suma(5, 5));
            echo('<br>');
            echo("El resultado de la resta es: " . resta(13, 5));
            echo('<br>');
            echo("El resultado de la multiplicación es: " . multiplicar(13, 5));
            echo('<br>');
            echo("El resultado de la multiplicación es: " . dividir(13, 5));
            ?>

        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>