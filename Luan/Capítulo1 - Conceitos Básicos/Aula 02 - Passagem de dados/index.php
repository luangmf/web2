<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Formulário HTML </h1>
    <form name="FormTest" method="GET">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite seu nome">
        <label>Ano Nascinomento: </label>
        <input type="text" name="anoNasc" placeholder="Digite o ano de nascimento">
        <input type="submit" name="btnEnviar" id="idEnviar" value="Enviar">
        
        <?php
            $nome;
            $anoNasc;
            $anoAtual = date("Y");
            $texto = "Olá, seja bem vindo,";

            //recebe informações do formulário
            /* o uso do if é para que não de erro quando as
            box estiverem sem preenchimento*/
            if(isset($_GET["nome"])|| isset($_GET["anoNasc"])){
            $nome = $_GET["nome"];
            $anoNasc = $_GET["anoNasc"];
            $idade = $anoAtual-$anoNasc;

            echo"<br> $texto $nome vi que você nasceu em $anoNasc então você tem $idade anos.";
            } else {
                echo"<br><br><b><i> Existem informações faltando</i></b>";
            }
        ?>
    </form>
</body>

</html>