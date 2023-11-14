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
            <h1>Ejercicio 04</h1>
        </header>
        <main>

            <?php
            /* Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués. */
            // Establecer la zona horaria a Oporto (Portugal)
            date_default_timezone_set('Europe/Lisbon');

            // Establecer el idioma local a portugués
            setlocale(LC_TIME, 'pt_PT');

            // Obtener la fecha y hora actual
            $fechaHora = new DateTime();
            $fechaHoraFormato = $fechaHora->format('Y H:i:s');

            // Obtener el nombre del mes en portugués
            $nombreMes = strftime('%B');
            $dia = strftime('%d');

            // Imprimir la fecha y hora en Oporto, formateada en portugués
            echo 'A data e hora atuais em português é: '.$dia.' de '.$nombreMes.' de '. $fechaHoraFormato;
            ?>

        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>