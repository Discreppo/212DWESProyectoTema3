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
            <h1>Ejercicio 12</h1>
        </header>
        <main>

            <h2>PRINT_R:</h2>
            <?php
            /**
             * @author Carlos García Cachón
             * @version 1.0 
             * @since 11/10/2023
             */
            //Mostramos las variables con print_r()
            echo("<p>Contenido de <span>" . '$GLOBALS' . "</span> es de tipo <span>" . gettype($GLOBALS) . "</span> y tiene el valor " . print_r($GLOBALS) . "</p>");
            echo("<p>Contenido de <span>" . '$_SERVER' . "</span> es de tipo <span>" . gettype($_SERVER) . "</span> y tiene el valor " . print_r($_SERVER) . "</p>");
            echo("<p>Contenido de <span>" . '$_GET' . "</span> es de tipo <span>" . gettype($_GET) . "</span> y tiene el valor " . print_r($_GET) . "</p>");
            echo("<p>Contenido de <span>" . '$_POST' . "</span> es de tipo <span>" . gettype($_POST) . "</span> y tiene el valor " . print_r($_POST) . "</p>");
            echo("<p>Contenido de <span>" . '$_FILES' . "</span> es de tipo <span>" . gettype($_FILES) . "</span> y tiene el valor " . print_r($_FILES) . "</p>");
            echo("<p>Contenido de <span>" . '$_COOKIE' . "</span> es de tipo <span>" . gettype($_COOKIE) . "</span> y tiene el valor " . print_r($_COOKIE) . "</p>");
            if (isset($_SESSION)) {
                echo("<p>Contenido de <span>" . '$_SESSION' . "</span> es de tipo <span>" . gettype($_SESSION) . "</span> y tiene el valor ");
                print_r($_SESSION);
            } else {
                echo("<p>Contenido de <span>" . '$_SESSION' . "</span> esta vacia.</p>");
            }
            echo("<p>Contenido de <span>" . '$_REQUEST' . "</span> es de tipo <span>" . gettype($_REQUEST) . "</span> y tiene el valor " . print_r($_REQUEST) . "</p>");
            echo("<p>Contenido de <span>" . '$_ENV' . "</span> es de tipo <span>" . gettype($_ENV) . "</span> y tiene el valor " . print_r($_ENV) . "</p>");
            ?>
            <h2>FOREACH()</h2>
            <?php
            $key = "";
            $value = "";
            echo("La variable <span>" . '$GLOBALS' . "</span> no se puede mostrar con foreach().");
            echo("<p>Contenido de <span>" . '$_SERVER' . "</span> es de tipo <span>" . gettype($_SERVER) . "</span> y tiene el valor <br>");
            foreach ($_SERVER as $key => $value) {
                echo "{$key} => {$value}<br>";
            }
            echo("</p>");
            echo("<p>Contenido de <span>" . '$_GET' . "</span> es de tipo <span>" . gettype($_GET) . "</span> y tiene el valor <br>");
            foreach ($_GET as $key => $value) {
                echo "{$key} => {$value}<br>";
            }
            echo("</p>");
            echo("<p>Contenido de <span>" . '$_POST' . "</span> es de tipo <span>" . gettype($_POST) . "</span> y tiene el valor <br>");
            foreach ($_POST as $key => $value) {
                echo "{$key} => {$value}<br>";
            }
            echo("</p>");
            echo("<p>Contenido de <span>" . '$_FILES' . "</span> es de tipo <span>" . gettype($_FILES) . "</span> y tiene el valor <br>");
            foreach ($_FILES as $key => $value) {
                echo "{$key} => {$value}<br>";
            }
            echo("</p>");
            echo("<p>Contenido de <span>" . '$_COOKIE' . "</span> es de tipo <span>" . gettype($_COOKIE) . "</span> y tiene el valor <br>");
            foreach ($_COOKIE as $key => $value) {
                echo "{$key} => {$value}<br>";
            }
            echo("</p>");
            if (isset($_SESSION)) {
                echo("<p>Contenido de <span>" . '$_SESSION' . "</span> es de tipo <span>" . gettype($_SESSION) . "</span> y tiene el valor <br>");
                foreach ($_SESSION as $key => $value) {
                    echo "{$key} => {$value}<br>";
                }
            } else {
                echo("<p>Contenido de <span>" . '$_SESSION' . "</span> esta vacia.");
            }
            echo("</p>");
            echo("<p>Contenido de <span>" . '$_REQUEST' . "</span> es de tipo <span>" . gettype($_REQUEST) . "</span> y tiene el valor <br>");
            foreach ($_REQUEST as $key => $value) {
                echo "{$key} => {$value}<br>";
            }
            echo("</p>");
            echo("<p>Contenido de <span>" . '$_ENV' . "</span> es de tipo <span>" . gettype($_ENV) . "</span> y tiene el valor <br>");
            foreach ($_ENV as $key => $value) {
                echo "{$key} => {$value}<br>";
            }
            echo("</p>");
            ?>


        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>