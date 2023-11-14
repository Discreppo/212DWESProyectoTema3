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
            .asiento-vacio{
                background: green;
            }
            .asiento-ocupado{
                background: red;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Ejercicio 17</h1>
        </header>
        <main>

            <?php
            // Definir los límites de filas y asientos
            $numFilas = 20;
            $numAsientosPorFila = 15;

            // Inicializar el array bidimensional para el teatro con asientos vacíos            

            foreach (range(1, $numFilas) as $fila) {
                foreach (range(1, $numAsientosPorFila) as $asiento) {
                    $aTeatro[$fila][$asiento] = null;
                }
            }

            // Reservar algunos asientos (llenar 5 asientos)
            $aTeatro[1][1] = "Persona 1";
            $aTeatro[2][5] = "Persona 2";
            $aTeatro[5][10] = "Persona 3";
            $aTeatro[10][3] = "Persona 4";
            $aTeatro[15][12] = "Persona 5";

            // Recorrer el array y mostrar los asientos ocupados

            echo "<h2>FOREACH</h2><br>Asientos ocupados en el teatro:<br>";

            echo "<table border='1'>";

            foreach ($aTeatro as $fila => $asientos) {
                echo "<tr>";
                foreach ($asientos as $numAsiento => $persona) {
                    if ($persona === null) {
                        echo '<td class="asiento-vacio">Fila ' . $fila . ', Asiento ' . $numAsiento . '</td>';
                    } else {
                        echo '<td class="asiento-ocupado">Fila ' . $fila . ', Asiento ' . $numAsiento . ' (' . $persona . ')</td>';
                    }
                }
                echo "</tr>";
            }
            echo"</table>";

            echo "<h2>WHILE</h2><br>Asientos ocupados en el teatro:<br>";

            echo "<table border='1'>";

            $fila = 1;
            while ($fila <= $numFilas) {
                echo "<tr>";
                $asiento = 1;
                while ($asiento <= $numAsientosPorFila) {
                    if ($aTeatro[$fila][$asiento] === null) {
                        echo '<td class="asiento-vacio">Fila ' . $fila . ', Asiento ' . $asiento . '</td>';
                    } else {
                        echo '<td class="asiento-ocupado">Fila ' . $fila . ', Asiento ' . $asiento . ' (' . $aTeatro[$fila][$asiento] . ')</td>';
                    }
                    $asiento++;
                }
                echo "</tr>";
                $fila++;
            }
            echo"</table>";
            ?>


        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>