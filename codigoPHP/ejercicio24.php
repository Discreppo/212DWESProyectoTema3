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
            <h1>Ejercicio 24</h1>
        </header>
        <main>            
            <?php
            /**
             * @author Carlos García Cachón
             * @version 1.2
             * @since 26/10/2023
             */
            //Incluyo las librerias de validación para comprobar los campos
            require_once '../core/231018libreriaValidacion.php';

            //Declaración de constantes por prioridad
            define('OPCIONAL', 0);
            define('OBLIGATORIO', 1);

            //Declaración de los limites para el metodo comprobar alfabetico
            define('TAM_MAX_ALFABETICO', 20);
            define('TAM_MIN_ALFABETICO', 3);

            //Declaración de los limites para el metodo comprobar fecha
            define('TAM_MAX_FECHA', date('d-m-Y'));
            define('TAM_MIN_FECHA', "01/01/1950");

            //Inicializo las variables
            $entradaOK = true;
            $aRespuestas = ['nombre' => "", 'fechaNac' => "", 'hora' => "", 'fechActual' => ""];
            $aErrores = ['nombre' => "", 'fechaNac' => "", 'hora' => ""];
            $_REQUEST['fechActual'] = date('d-m-Y');
            //En el siguiente if pregunto si el '$_REQUEST' recupero el valor 'enviar' que enviamos al pulsar el boton de enviar del formulario.
            if (isset($_REQUEST['enviar'])) {
                //Inicializo el array con los mensajes de error. (Los metodos que uso en caso de no validar devuelven un mensaje de error.)
                $aErrores = [
                    'nombre' => validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], TAM_MAX_ALFABETICO, TAM_MIN_ALFABETICO, OBLIGATORIO),
                    'fechaNac' => validacionFormularios::validarFecha($_REQUEST['fechaNac'], TAM_MAX_FECHA, TAM_MIN_FECHA, OBLIGATORIO),
                    'hora' => validacionFormularios::validarHora($_REQUEST['hora'], OPCIONAL)
                ];
                //En este foreach recoremos el array buscando que exista NULL (Los metodos anteriores si son correctos devuelven NULL)
                //Y en caso negativo cambiara el valor de '$entradaOK' a false y borrara el contenido del campo
                foreach ($aErrores as $campo => $error) {
                    if ($error != null) {
                        $_REQUEST[$campo] = "";
                        $entradaOK = false;
                    }
                }
            } else {
                $entradaOK = false;
            }
            //En caso de que '$entradaOK' sea true, cargamos las respuestas en el array '$aRespuestas'
            if ($entradaOK) {
                $aRespuestas = [
                    'nombre' => $_REQUEST['nombre'],
                    'fechaNac' => $_REQUEST['fechaNac'],
                    'hora' => $_REQUEST['hora'],
                    'fechActual' => $_REQUEST['fechActual']
                ];
                //Aqui recorremos el array mostrando los valores alamacenados en el array anterior
                echo("<div>");
                echo "<h2>Respuestas:</h2>";
                foreach ($aRespuestas as $campo => $respuesta) {
                    echo "<p class='d-flex justify-content-start'>" . strtoupper($campo) . " : " . $respuesta . "</p>";
                }
                echo("</div>");
            } else {
                ?>
                <!-- Codigo del formulario -->
                <form name="cuestionario3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <fieldset>
                        <table>
                            <thead>
                                <tr>
                                    <th class="rounded-top" colspan="3"><legend>Cuestionario 3</legend></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="d-flex justify-content-start"><label for="nombre">Nombre:</label></td>
                                    <td>                                <!-- El value contiene una condición en la que pregunto si el array esta vacio y 
                                                                        la variable que recogemos con '$_REQUEST' no sea null , devolvemos el contenido de '$_REQUEST' -->
                                        <input class="d-flex justify-content-start" type="text" name="nombre" value="<?php echo (isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : ''); ?>">

                                    </td>
                                    <td class="error">
                                        <?php
                                        //Aqui comrpobamos que el campo del array no esta vacio, si es así, mostramos el error
                                        if (!empty($aErrores['nombre'])) {
                                            echo $aErrores['nombre'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-flex justify-content-start"><label for="fechaNac">Fecha de nacimiento:</label></td>
                                    <td>                                <!-- El value contiene una condición en la que pregunto si el array esta vacio y 
                                                                        la variable que recogemos con '$_REQUEST' no sea null , devolvemos el contenido de '$_REQUEST' -->
                                        <input class="d-flex justify-content-start" type="text" name="fechaNac" value="<?php echo (isset($_REQUEST['fechaNac']) ? $_REQUEST['fechaNac'] : ''); ?>">

                                    </td>
                                    <td class="error">
                                        <?php
                                        //Aqui comrpobamos que el campo del array no esta vacio, si es así, mostramos el error
                                        if (!empty($aErrores['fechaNac'])) {
                                            echo $aErrores['fechaNac'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-flex justify-content-start"><label for="hora">Hora:</label></td>
                                    <td>                                <!-- El value contiene una condición en la que pregunto si el array esta vacio y 
                                                                        la variable que recogemos con '$_REQUEST' no sea null , devolvemos el contenido de '$_REQUEST' -->
                                        <input class="d-flex justify-content-start" type="text" name="hora" value="<?php echo (isset($_REQUEST['hora']) ? $_REQUEST['hora'] : ''); ?>">

                                    </td>
                                    <td class="error">
                                        <?php
                                        //Aqui comrpobamos que el campo del array no esta vacio, si es así, mostramos el error
                                        if (!empty($aErrores['hora'])) {
                                            echo $aErrores['hora'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-flex justify-content-start"><label for="fecha">Fecha:</label></td>
                                    <td>                                
                                        <input class="d-flex justify-content-start" type="text" id="fechActual" name="fechActual" value="<?php

                                    //Esta función sirve para obtener el mes en Castellano en función del número del mes.
                                    function obtenerNombreMes($nMes) {
                                        $aMeses = [
                                            1 => "Enero",
                                            2 => "Febrero",
                                            3 => "Marzo",
                                            4 => "Abril",
                                            5 => "Mayo",
                                            6 => "Junio",
                                            7 => "Julio",
                                            8 => "Agosto",
                                            9 => "Septiembre",
                                            10 => "Octubre",
                                            11 => "Noviembre",
                                            12 => "Diciembre"
                                        ];
                                        return $aMeses[$nMes];
                                    }

                                    // Creamos un objeto DateTime con la fecha y hora actual
                                    $OfechaHoraActual = new DateTime('now', new DateTimeZone('Europe/Madrid'));

                                    // Usamos el numero del mes y con la función obtenemos el nombre del mes en Castellano.
                                    $nMes = $OfechaHoraActual->format('n');
                                    $nombreMes = obtenerNombreMes($nMes);

                                    //Ahora formateamos la salida de fecha y hora: Ejemplo -> (1 de Enero de 2023 12:30:50)
                                    $fechaHoraFormateada = $OfechaHoraActual->format('d') . ' de ' . $nombreMes . ' de ' . $OfechaHoraActual->format(' Y');

                                    // Y mostramos la fecha y hora formateada
                                    echo($fechaHoraFormateada);
                                    ?>" disabled>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="reset" name="borrar">Borrar</button>
                        <button type="submit" name="enviar">Enviar</button>
                    </fieldset>
                </form>
                <?php
            }
            ?>

        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>