<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutra de Loops</title>

<body>
    <form nname="frmLoop" method="POST" action="index.php">
        <label>Digite até quando contar: </label>
        <input type="text" name="qtdNum">
        <input type="submit" name="btn_enviar" id="idEnviar"
        value="ENVIAR">
    </form>

        <?php
            if(isset($_POST["qtdNum"])){
                echo "<br><b>Loop FOR </b>";
                for($cont=0; $cont <= $_POST["qtdNum"]; $cont++){
                    echo $cont .", ";
                }
            }
        ?>

</body>