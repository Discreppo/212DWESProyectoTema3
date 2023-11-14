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
            <h1>Ejercicio 06</h1>
        </header>
        <main>

            <?php
            /* Para calcular la fecha y el día de la semana de dentro de 60 días, usamos el codigo anterior
             * y le añadimos 60dias en segundos, que en este caso son '5184000'
             */
            $horaStamp = time();
            $segundos60Dias = 5184000;
            //Los sumamos
            $nuevaHoraStamp = $horaStamp + $segundos60Dias;

            //Formateamos la nueva fecha
            $fechaFutura = date('d/m/Y', $nuevaHoraStamp);

            //Para hacer la fecha legible tendremos que formatearla con el siguiente código
            $nDiaSemana = date('w', $nuevaHoraStamp);

            // Definimos un array con los nombres de los días de la semana en Castellano
            $diasSemana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');

            // Obtener el nombre del día de la semana para la fecha futura
            $nombreDiaSemana = $diasSemana[$nDiaSemana];

            // Mostrar la fecha y el día de la semana futuros
            echo "Dentro de 60 días será $nombreDiaSemana, $fechaFutura";
            ?>

        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>