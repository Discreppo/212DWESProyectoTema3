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
            <h1>Ejercicio 15</h1>
        </header>
        <main>

            <?php
            /* Crear e inicializar un array con el sueldo percibido de lunes a domingo. 
             * Recorrer el array para calcular el sueldo percibido durante la semana. 
             * (Array asociativo con los nombres de los días de la semana). */
            $semana = [
                'lunes' => 100,
                'martes' => 1,
                'miercoles' => 3,
                'jueves' => 7,
                'viernes' => 12,
                'sabado' => 50,
                'domingo' => 150];
            $sueldoTotal = 0;
            foreach ($semana as $value) {
                $sueldoTotal += $value;
            }
            echo($sueldoTotal);
            ?>

        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>