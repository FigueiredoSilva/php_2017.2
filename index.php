<!DOCTYPE html>
<!--
Autor: Jonathan
Data: 08/03/2018
Finalidade: Projeto de aprendizagem PHP
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03</title>
    </head>
    <body>
        <?php
                # Quando queremos definir uma variável devemos utilizar o símbolo $
                $variavel = "Variável Exemplo";
                
                # Porém, quando queremos definir uma variável de variável utilizamos a simbolização $$
                $$variavel = 8;
                
                echo "O valor da $variavel é " . $$variavel;
                echo "<br>O valor da $variavel é {$$variavel}";
                echo "<br>";
                var_dump(boolval((0)));
                echo "<br>";
                var_dump(boolval(1));
        ?>
    </body>
</html>
