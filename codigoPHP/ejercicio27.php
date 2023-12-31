<!DOCTYPE html>
<html lang="es">
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Oscar Pascual Ferrero</title>
        <link rel="stylesheet" href="../webroot/css/style.css">
        <link rel="icon" type="image/x-icon" href="/webroot/image/botonFavicon.png">
    </head>
    <body>
        <header>
            <h1>Ejercicio 27</h1>
        </header>
        <main>            
            <?php
            /**
             * @author Rebeca Sánchez Pérez
             * @version 1.0
             * @since 16/11/2023
             */
            
            // DECLARACION E INICIALIZACION DE VARIABLES
            // Se incuye la libreria de validacion para usar los metodos de validacion de las entradas del formulario
            require_once '../core/231018libreriaValidacion.php';

            //Declaración de constantes por OBLIGATORIEDAD
            define('OPCIONAL', 0);
            define('OBLIGATORIO', 1);

            //Declaración de los limites para el metodo comprobar ALFABETICO
            define('TAM_MAX_ALFABETICO', 1000);
            define('TAM_MIN_ALFABETICO', 1);

            //Declaración de los limites para el metodo comprobar ALFANUMERICO
            define('TAM_MAX_ALFANUMERICO', 1000);
            define('TAM_MIN_ALFANUMERICO', 1);

            //Declaración de los limites para el metodo comprobar ENTERO
            define('TAM_MAX_ENTERO', PHP_INT_MAX);
            define('TAM_MIN_ENTERO', PHP_INT_MIN);

            //Declaración de los limites para el metodo comprobar FLOAT
            define('TAM_MAX_FLOAT', PHP_FLOAT_MAX);
            define('TAM_MIN_FLOAT', PHP_FLOAT_MIN);

            //Declaración de los limites para el metodo comprobar FECHA
            define('FECHA_MAX', date('d-m-Y'));
            define('FECHA_MIN', "01/01/1950");

            //Declaración de los limites para el metodo comprobar PASSWORD
            define('LONG_MAX', 16);
            define('LONG_MIN', 2);
            //Hace referencia a los tipos de complejidad de la contraseña
            define('LOW', 1);
            define('MEDIUM', 2);
            define('HARD', 3);

            //Declaración del limite de caracteres para metodos que comprueben un MAXIMO y MINIMO (MINTAMANIO/MAXTAMANIO/NOMBREARCHIVO)
            define('TAM_MAX_CARACTERES', 16);
            define('TAM_MIN_CARACTERES', 1);

            //Declaración del limite de alfanumericos dentro del campo TEXTAREA
            define("TAM_MAX_TEXTO", 255);
            define("TAM_MIN_TEXTO", 1);
            
            // Se instancia un objeto que almacena la fecha y hora actual de la region de Europe/Madrid
            $oFecha = new DateTime('now', new DateTimeZone('Europe/Madrid'));

            // Declaración de un array para que almacene las EXTENSIONES por defecto de la función validarNombreArchivo
            $aExtensiones = ['txt', 'json'];

            // La varible $entradaOK es un interruptor que recibe el valor true cuando no existe ningun error en la entrada
            $entradaOK = true;
            
            // El array $aRespuestas almacena los valores que son introducidos en cada input del formulario
            $aRespuestas = [
                'alfabeticoObligatorio' => "",
                'fechaObligatorio' => "",
                'radioButtonObligatorio' => "",
                'enteroObligatorio' => "",
                'listaObligatorio' => "",
                'textAreaObligatorio' => ""
            ];

            // El array $aErrores almacena los valores que no cumplan los requisitos que se hayan introducido en el formulario
            $aErrores = [
                'alfabeticoObligatorio' => "",
                'fechaObligatorio' => "",
                'radioButtonObligatorio' => "",
                'enteroObligatorio' => "",
                'listaObligatorio' => "",
                'textAreaObligatorio' => ""
            ];
            
            // Si el fromulario ha sido rellenado, se valida la entrada
            if (isset($_REQUEST['enviar'])) {                
                // VALIDACIONES
                $aErrores = [
                    'alfabeticoObligatorio' => validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoObligatorio'], TAM_MAX_ALFABETICO, TAM_MIN_ALFABETICO, OBLIGATORIO),
                    'fechaObligatorio' => validacionFormularios::validarFecha($_REQUEST['fechaObligatorio'], FECHA_MAX, FECHA_MIN, OBLIGATORIO),
                    'radioButtonObligatorio' => NULL,
                    'enteroObligatorio' => validacionFormularios::comprobarEntero($_REQUEST['enteroObligatorio'], TAM_MAX_ENTERO, TAM_MIN_ENTERO, OBLIGATORIO),
                    'listaObligatorio' => NULL,
                    'textAreaObligatorio' => validacionFormularios::comprobarAlfanumerico($_REQUEST['textAreaObligatorio'], TAM_MAX_TEXTO, TAM_MIN_TEXTO, OBLIGATORIO)
                ];

                /*
                 * En los siguientes 'if' comprobamos que existe valor dentro de las siguientes variables y en caso negativo mostramos un mensaje error.
                 * Ya que dentro de la función validarElementoLista' no tenemos manera de hacerlo obligatorio, lo hacemos por el siguiente 'if'.
                 */
                if (!isset($_REQUEST['radioButtonObligatorio'])) {
                    $aErrores['radioButtonObligatorio'] = "Debes elegir al menos 1 opción.";
                }

                // Se recorre el array de errores 
                foreach ($aErrores as $campo => $error) {
                    // Si existe algun error se cambia el valor de $entradaOK a false y se limpia ese campo
                    if ($error != null) {
                        $_REQUEST[$campo] = "";
                        $entradaOK = false;
                    }
                }
            
            // Si el formulario NUNCA ha sido rellenado, se inicializa $entradaOK a false    
            } else {
                $entradaOK = false;
            }
            
            // Si todos los valores intruducidos son correctos, se muestran los campos del formulario y sus respuestas
            if ($entradaOK) {
                // TRATAMIENTO DE DATOS
                // Se añaden al array $aRespuestas las respuestas cuando son correctas
                $aRespuestas = [
                    'alfabeticoObligatorio' => $_REQUEST['alfabeticoObligatorio'],
                    'fechaObligatorio' => $_REQUEST['fechaObligatorio'],
                    'radioButtonObligatorio' => $_REQUEST['radioButtonObligatorio'],
                    'enteroObligatorio' => $_REQUEST['enteroObligatorio'],
                    'listaObligatorio' => $_REQUEST['listaObligatorio'],
                    'textAreaObligatorio' => $_REQUEST['textAreaObligatorio']
                ];
                
                // Se muestran por pantalla los valores del formulario                
                echo('<div class="ejercicio">');
                echo('Hoy ... a las <b>'.$oFecha->format('H:i').'</b>.<br>');
                echo('D. <b>'.$aRespuestas['alfabeticoObligatorio'].'</b> nacido hace <b>'.$aRespuestas['fechaObligatorio'].'</b> años se siente <b>'.$aRespuestas['radioButtonObligatorio'].'</b>.<br>');
                echo('Valora su curso actual con <b>'.$aRespuestas['enteroObligatorio'].'</b> sobre 10.<br>');
                echo('Estas navidades las dedicará a <b>'.$aRespuestas['listaObligatorio'].'</b><br>');
                echo('Y, además, opina que: <br>');
                echo('<b>'.$aRespuestas['textAreaObligatorio'].'</b>');
                echo("</div>");
                
            // Si no son correctos los valores de entrada, se muestra el formulario 
            } else {
                ?>
                <div class="ejercicio">
                    <h3>Cuestionario:</h3>
                    <!-- Se crea un formulario tipo post -->
                    <form name="plantilla" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form23">
                        
                            <!-- Alfabético Obligatorio -->
                            
                                <p><label for="alfabeticoObligatorio">Nombre y apellidos del alumno:</label></p>
                                <p><input class="iObligatorio" type="text" name="alfabeticoObligatorio" value="<?php echo (isset($_REQUEST['alfabeticoObligatorio']) ? $_REQUEST['alfabeticoObligatorio'] : ''); ?>"></p>
                                <p><?php // Se muestra el mensaje de error 
                                    echo('<p class="error">'.$aErrores['alfabeticoObligatorio'].'</p>');?> 
                                </p>
                            

                            <!-- Fecha Obligatorio -->
                            
                                <p><label for="fechaObligatorio">Fecha de nacimiento:</label></p>
                                <p><input class="iObligatorio" type="text" name="fechaObligatorio" value="<?php echo (isset($_REQUEST['fechaObligatorio']) ? $_REQUEST['fechaObligatorio'] : ''); ?>"></p>
                                <p><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['fechaObligatorio'].'</p>');?> 
                                </p>
                            
                            
                            <!-- Radio Obligatorio -->
                            
                                <p><label for="radioButtonObligatorio">¿Cómo te sientes hoy?</label></p>
                                <p>
                                    <input class="iRadio" type="radio" id="muymal" name="radioButtonObligatorio" value="muy mal" 
                                    <?php if (is_null($aErrores['radioButtonObligatorio']) && isset($_REQUEST['radioButtonObligatorio']) && $_REQUEST['radioButtonObligatorio'] == 'muy mal') { echo 'checked';} ?>>
                                    <label for="radioButtonObligatorio">MUY MAL</label>
                                    <br>
                                    
                                    <input class="iRadio" type="radio" id="mal" name="radioButtonObligatorio" value="mal" 
                                    <?php if (is_null($aErrores['radioButtonObligatorio']) && isset($_REQUEST['radioButtonObligatorio']) && $_REQUEST['radioButtonObligatorio'] == 'mal') { echo 'checked';} ?>>
                                    <label for="radioButtonObligatorio">MAL</label>
                                    <br>
                                    
                                    <input class="iRadio" type="radio" id="regular" name="radioButtonObligatorio" value="regular" 
                                    <?php if (is_null($aErrores['radioButtonObligatorio']) && isset($_REQUEST['radioButtonObligatorio']) && $_REQUEST['radioButtonObligatorio'] == 'regular') { echo 'checked';} ?>>
                                    <label for="radioButtonObligatorio">REGULAR</label>
                                    <br>
                                    
                                    <input class="iRadio" type="radio" id="bien" name="radioButtonObligatorio" value="bien" 
                                    <?php if (is_null($aErrores['radioButtonObligatorio']) && isset($_REQUEST['radioButtonObligatorio']) && $_REQUEST['radioButtonObligatorio'] == 'bien') { echo 'checked';} ?>>
                                    <label for="radioButtonObligatorio">BIEN</label>
                                    <br>
                                    
                                    <input class="iRadio" type="radio" id="muybien" name="radioButtonObligatorio" value="muy bien" 
                                    <?php if (is_null($aErrores['radioButtonObligatorio']) && isset($_REQUEST['radioButtonObligatorio']) && $_REQUEST['radioButtonObligatorio'] == 'muy bien') { echo 'checked';} ?>>
                                    <label for="radioButtonObligatorio">MUY BIEN</label>
                                </p>
                                <p><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['radioButtonObligatorio'].'</p>');?>
                                </p>
                            
                            
                            <!-- Entero Obligatorio -->
                            
                                <p><label for="enteroObligatorio">¿Cómo va el curso? [1-10]</label></p>
                                <p><input class="iObligatorio" type="text" name="enteroObligatorio" value="<?php echo (isset($_REQUEST['enteroObligatorio']) ? $_REQUEST['enteroObligatorio'] : ''); ?>"></p>
                                <p><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['enteroObligatorio'].'</p>');?> 
                                </p>
                            
                            
                            <!-- Lista Obligatorio -->
                           
                                <p><label for="listaObligatorio">¿Cómo se presentan las vacaciones de navidad?</label></p>
                                <p>
                                    <select class="iObligatorio" name="listaObligatorio">
                                        <option value="ni idea" <?php if (isset($_REQUEST['listaObligatorio'])){echo 'selected';}?>>Ni idea</option>
                                        <option value="con la familia" <?php if (isset($_REQUEST['listaObligatorio'])){echo 'selected';}?>>Con la familia</option>
                                        <option value="de fiesta" <?php if (isset($_REQUEST['listaObligatorio'])){echo 'selected';}?>>De fiesta</option>
                                        <option value="trabajando" <?php if (isset($_REQUEST['listaObligatorio'])){echo 'selected';}?>>Trabajando</option>
                                        <option value="estudiando DWES" <?php if (isset($_REQUEST['listaObligatorio'])){echo 'selected';}?>>Estudiando DWES</option>
                                    </select>    
                                </p>
                                <p><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['listaObligatorio'].'</p>');?> 
                                </p>
                             
                            
                            <!-- TextArea Obligatorio -->
                            
                                <p><label for="textAreaObligatorio">Describe brevemente tu estado de ánimo:</label></p>
                                <p>
                                    <textarea class="iObligatorio" rows="4" cols="50" name="textAreaObligatorio"><?php if ($aErrores['textAreaObligatorio'] == null && isset($_REQUEST['textAreaObligatorio'])) { echo ($_REQUEST['textAreaObligatorio']);} ?></textarea>
                                </p>
                                <p><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['textAreaObligatorio'].'</p>');?> 
                                </p>
                            
                    
                    <button type="submit" name="enviar">Enviar</button>                    
                </form>
            </div>
    <?php
    }
    ?>
        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/Discreppo/212DWESProyectoTema3.git" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>