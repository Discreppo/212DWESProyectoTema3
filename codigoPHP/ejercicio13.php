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
            <h1>Ejercicio 13</h1>
        </header>
        <main>

            <?php
            /**
             * @author Carlos García Cachón
             * @version 1.0 
             * @since 11/10/2023
             */
            //Primero iniciamos la sesión.
            session_start();
            /*
             * En el siguiente if comprobamos que la variable '$_SESSION' es distinto de NULL y 
             * sumamos cada vez que se realice una visita a la página.
             */
            if (!isset($_SESSION['contador'])) {
                //Si se cumple la condición iniciamos el contador a 0;
                $_SESSION['contador'] = 0;
            }
            //Y luego incrementamos el contador por cada visita a la página.
            $_SESSION['contador']++;
            echo("La página ha tenido " . $_SESSION['contador'] . " visitas.");
            ?>


        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>