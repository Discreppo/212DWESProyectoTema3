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
            span{
                color: red;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Ejercicio 01</h1>
        </header>
        <main>
            <h2>ECHO</h2>
            <?php
            //Declaracion de variables
            $cadena = "palabra";
            $entero = 5;
            $real = 3.6;
            $buleano = true;
            
            /*LA MANERA DE IMPRIMIR POR PANTALLA SOLO ES PARA LA VARIABLE, EL RESTO DEL TEXTO CON ECHO*/

            //Echo
            echo("<p>La variable <span>" . '$cadena' . "</span> es de tipo <span>" . gettype($cadena) . "</span> y tiene el valor <span>" . $cadena . "</span></p>");
            echo("<p>La variable <span>" . '$entero' . "</span> es de tipo <span>" . gettype($entero) . "</span> y tiene el valor <span>" . $entero . "</span></p>");
            echo("<p>La variable <span>" . '$real' . "</span> es de tipo <span>" . gettype($real) . "</span> y tiene el valor <span>" . $real . "</span></p>");
            echo("<p>La variable <span>" . '$buleano' . "</span> es de tipo <span>" . gettype($buleano) . "</span> y tiene el valor <span>" . $buleano . "</span></p>");
            ?>
            <br><h2>PRINT</h2>
            <?php
            //print
            print("<p>La variable <span>" . '$cadena' . "</span> es de tipo <span>" . gettype($cadena) . "</span> y tiene el valor <span>" . $cadena . "</span></p>");
            print("<p>La variable <span>" . '$entero' . "</span> es de tipo <span>" . gettype($entero) . "</span> y tiene el valor <span>" . $entero . "</span></p>");
            print("<p>La variable <span>" . '$real' . "</span> es de tipo <span>" . gettype($real) . "</span> y tiene el valor <span>" . $real . "</span></p>");
            print("<p>La variable <span>" . '$buleano' . "</span> es de tipo <span>" . gettype($buleano) . "</span> y tiene el valor <span>" . $buleano . "</span></p>");
            ?>
            <br><h2>PRINTF</h2>
            <?php
            //printf
            printf("<p>La variable <span>%s</span> es de tipo <span>%s</span> y tiene el valor <span>%s</span></p>", '$cadena', gettype($cadena), $cadena);
            printf("<p>La variable <span>%s</span> es de tipo <span>%s</span> y tiene el valor <span>%d</span></p>", '$entero', gettype($entero), $entero);
            printf("<p>La variable <span>%s</span> es de tipo <span>%s</span> y tiene el valor <span>%f</span></p>", '$real', gettype($real), $real);
            printf("<p>La variable <span>%s</span> es de tipo <span>%s</span> y tiene el valor <span>%b</span></p>", '$buleano', gettype($buleano), $buleano);
            ?>
            <br><h2>PRINT_R</h2>
            <?php
            //print_r
            print_r("<p>La variable <span>" . '$cadena' . "</span> es de tipo <span>" . gettype($cadena) . "</span> y tiene el valor <span>" . $cadena . "</span></p>");
            print_r("<p>La variable <span>" . '$entero' . "</span> es de tipo <span>" . gettype($entero) . "</span> y tiene el valor <span>" . $entero . "</span></p>");
            print_r("<p>La variable <span>" . '$real' . "</span> es de tipo <span>" . gettype($real) . "</span> y tiene el valor <span>" . $real . "</span></p>");
            print_r("<p>La variable <span>" . '$buleano' . "</span> es de tipo <span>" . gettype($buleano) . "</span> y tiene el valor <span>" . $buleano . "</span></p>");
            ?>
            <br><h2>VAR_DUMP</h2>
            <?php
            //var_dump
            var_dump("<p>La variable <span>" . '$cadena' . "</span> es de tipo <span>" . gettype($cadena) . "</span> y tiene el valor <span>" . $cadena . "</span></p>");
            var_dump("<p>La variable <span>" . '$entero' . "</span> es de tipo <span>" . gettype($entero) . "</span> y tiene el valor <span>" . $entero . "</span></p>");
            var_dump("<p>La variable <span>" . '$real' . "</span> es de tipo <span>" . gettype($real) . "</span> y tiene el valor <span>" . $real . "</span></p>");
            var_dump("<p>La variable <span>" . '$buleano' . "</span> es de tipo <span>" . gettype($buleano) . "</span> y tiene el valor <span>" . $buleano . "</span></p>");
            ?>

        </main>
        <footer>
            <p><a href="../index.html">Oscar Pascual Ferrero</a></p>
            <p><a href="../indexProyectoTema3.php">Inicio</a> | <a href="https://github.com/discreppo" target="_blank" >GitHub</a></p>
        </footer>
    </body>
</html>