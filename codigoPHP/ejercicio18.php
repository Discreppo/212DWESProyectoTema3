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
            <h1>Ejercicio 18</h1>
        </header>
        <main>

           <?php
                    /**
                     * @author Oscar Pascual Ferrero
                     * @version 1.0 
                     * @since 18/10/2023
                     */
                    //Declaramos el array
                    $aButacasTeatro;
                    
                    //Ahora lo recorremos el array con 2 bucles for
                    for ($fila = 1; $fila < 21; $fila++) { //La variable '$fila' la utilizo para contar las 20 filas
                        for ($asiento = 1; $asiento < 16; $asiento++) { //La variable '$asiento' la utilizo para contar los asientos 15 en las 20 filas
                            //Iniciamos cada asiento a NULL
                            $aButacasTeatro[$fila][$asiento] = null;
                        }
                    }                
                    //Reservo los asientos
                    $aButacasTeatro[1][1] = "Carlos";
                    $aButacasTeatro[3][6] = "Alvaro";
                    $aButacasTeatro[7][7] = "Oscar";
                    $aButacasTeatro[8][12] = "Ismael";
                    $aButacasTeatro[15][5] = "Borja";
                    
                    /*
                     * Para recorrer el array usando funciones, primero tenemos que pasar el array bidimensional (matriz)
                     * a una dimensión (vector)
                     */
                    //En esta línea estamos llamando a una función para fusionar los contenidos del array '$aButacasTeatro'
                    $aVectorButacasTeatro = call_user_func_array('array_merge', $aButacasTeatro);  

                    /*
                     * Aqui creamos una instancia de la clase ArrayIterator y volcamos el array '$aVectorButacasTeatro' dentro del constructor
                     * para poder recorrerlo utilizando los metodos de la clase ArrayIterator
                     */
                    $iterador = new ArrayIterator($aVectorButacasTeatro);

                    //Usando un bucle recorremos el array
                    while ($iterador->valid()) { //En esta línea le indicamos al while que se seguira ejecutando mientras '$iterador' tenga elementos validos
                        $estado = $iterador->current() ? $iterador->current() : "vacio"; //Con esta variable preguntamos el estado de la butaca 
                        /*
                         * En la siguiente linea se calcula la fila del asiento dividiendo (el índice actual) por 15 y luego agregando 1 para 
                         * convertirlo en un número de fila basado en 1 y con la función 'intval()' me quedo con la parte entera del resultado
                         */
                        $fila = intval($iterador->key() / 15) + 1; 
                        /*
                         * En esta se calcula el número de asiento en la fila actual usando el resto de 15 y luego sumando 1 para convertirlo 
                         * en un número de asiento basado en 1 y de nuevo usamos la función 'intval()'
                         */
                        $asiento = intval($iterador->key() % 15) + 1; 
                        //Dependiendo del estado modificará la clase del div y con ello su color de fondo
                        echo("<div class='butacas " . $estado . "'> [$fila][$asiento]: " . $estado . "</div>");

                        $iterador->next(); //Con la función 'next()' avanzariamos al siguiente valor del array
                    }

                    ?>

        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>