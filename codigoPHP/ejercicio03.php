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
            <h1>Ejercicio 03</h1>
        </header>
        <main>

            <?php
            /*MOSTRAR DE VARIAS MANERAS*/
    // Función para obtener el nombre del mes en español
    function obtenerNombreMes($numeroMes) {
        $meses = [
            1 => "enero",
            2 => "febrero",
            3 => "marzo",
            4 => "abril",
            5 => "mayo",
            6 => "junio",
            7 => "julio",
            8 => "agosto",
            9 => "septiembre",
            10 => "octubre",
            11 => "noviembre",
            12 => "diciembre"];
        return $meses[$numeroMes];
    }
    
    // Crear un objeto DateTime con la fecha y hora actual
    $fechaHora = new DateTime('now', new DateTimeZone('Europe/Madrid'));
    
    // Obtener el nombre del mes en español
    $numeroMes = $fechaHora->format('n');
    $nombreMes = obtenerNombreMes($numeroMes);
    
    // Formatear la fecha y hora en castellano
    $fechaHoraFormateada = $fechaHora->format('d') . ' de ' . $nombreMes . ' de ' . $fechaHora->format(' Y, H:i:s');
    
    // Mostrar la fecha y hora formateada
    echo "<p>La fecha y hora actual en castellano es: $fechaHoraFormateada</p>";
    ?>

        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>