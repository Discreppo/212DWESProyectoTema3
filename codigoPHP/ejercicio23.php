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
            <h1>Ejercicio 23</h1>
        </header>
        <main>            
            <?php
            /**
             * @author Carlos García Cachón
             * @version 1.0 
             * @since 24/10/2023
             */
            //Incluyo las librerias de validación para comprobar los campos
            require_once '../core/231018libreriaValidacion.php';
            //Inicializo las variables
            $fechaActualFormateada = date('d-m-Y');
            $entradaOK = true;
            $aRespuestas = ['nombre' => "", 'fechaNac' => "", 'hora' => ""];
            $aErrores = ['nombre' => "", 'fechaNac' => "", 'hora' => ""];
            //En el siguiente if pregunto si el '$_REQUEST' recupero el valor 'enviar' que enviamos al pulsar el boton de enviar del formulario.
            if (isset($_REQUEST['enviar'])) {
                //Inicializo el array con los mensajes de error. (Los metodos que uso en caso de no validar devuelven un mensaje de error.)
                $aErrores = [
                    'nombre' => validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], 20, 3, 1),
                    'fechaNac' => validacionFormularios::validarFecha($_REQUEST['fecha'], $fechaActualFormateada, "01/01/1950", 1),
                    'hora' => validacionFormularios::validarHora($_REQUEST['hora'])
                ];
                //En este foreach recoremos el array buscando que exista NULL (Los metodos anteriores si son correctos devuelven NULL)
                //Y en caso negativo cambiara el valor de '$entradaOK' a false
                foreach ($aErrores as $key => $value) {
                    if ($value != null) {
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
                    'fechaNac' => $_REQUEST['fecha'],
                    'hora' => $_REQUEST['hora']
                ];
                //Aqui recoremos el array mostrando los valores alamacenados en el array anterior
                echo "<h2>Respuestas:</h2>";
                foreach ($aRespuestas as $key => $value) {
                    echo "$key : $value <br>";
                }
            } else {
                ?>
                <!-- Codigo del formulario -->
                <form name="cuestionario2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <fieldset>
                        <table>
                            <thead>
                            <legend>Cuestionario 2</legend> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label for="nombre">Nombre:</label></td>
                                    <td>
                                        <input type="text" name="nombre">
                                        <?php if (!empty($aErrores['nombre'])) { ?>
                                            <span style="color: red;">
                                                <?php echo $aErrores['nombre']; ?></span>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="fecha">Fecha de nacimiento:</label></td>
                                    <td>
                                        <input type="text" name="fecha">
                                        <?php if (!empty($aErrores['fechaNac'])) { ?>
                                            <span style="color: red;">
                                                <?php echo $aErrores['fechaNac']; ?></span>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="hora">Hora:</label></td>
                                    <td>
                                        <input type="text" name="hora">
                                        <?php if (!empty($aErrores['hora'])) { ?>
                                            <span style="color: red;">
                                                <?php echo $aErrores['hora']; ?></span>
                                            <?php } ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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