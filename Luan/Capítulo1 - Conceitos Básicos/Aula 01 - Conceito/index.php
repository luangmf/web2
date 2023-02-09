<!DOCTYPE html>
<html>
    <head>
        <title>Conceito Básico</title>
    </head>
    <body>
        Conceito Básico - texto em html
        <?php
        echo"<br>OLÁ MUNDO!!!! - texto em php";

        // cometário em uma linha
        /* comentário em bloco,
        em mais de uma linha */

        //declaração de variável
        echo"<br>";
        $texto = "Fatec Registro - f299";
        echo"<br";

        //concatenação
        echo"o texto abaixo será concatenado<br>";
        $x = 5;
        $y = 3;

        echo $texto;
        echo"<br>";
        echo"<b> o valor de x é:".$x." e o valor de y é:".$y."</b>";
        echo"<br>";
        echo"<i> o valor de x é: $x e o valor de y é: $y </i>, a soma entre x e y é:".($x+$y);
        ?>


    </body>
</html>