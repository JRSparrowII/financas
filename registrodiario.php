<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
        <?php 
        if (isset($_POST["dataRegistgro"])){
            $dataRegistro = $_POST["dataRegistro"];
        } else {
            $dataRegistro = "Sem definição";
        }

        if (isset($_POST["debito"])){
            $debito = $_POST["debito"];
        } else {
            $debito = "Sem definição";
        }

        if (isset($_POST["valorDebito"])){
            $valorDebito = $_POST["valorDebito"];
        } else {
            $valorDebito = "Sem definição";
        }

        if (isset($_POST["credito"])){
            $credito = $_POST["credito"];
        } else {
            $credito = "Sem definição";
        }

        if (isset($_POST["valorCredito"])){
            $valorCredito = $_POST["valorCredito"];
        } else {
            $valorCredito = "Sem definição";
        }

        if (isset($_POST["historico"])){
            $historico = $_POST["historico"];
        } else {
            $historico = "Sem definição";
        }
                 
        echo "dataRegistro:" . $dataRegistro. "<br>";
        echo "debito:" . $debito . "<br>"; 
        echo "valorDebito:" . $valorDebito . "<br>";
        echo "credito:" . $credito . "<br>";
        echo "valorCredito:" . $valorCredito . "<br>";
        echo "historico:" . $historico . "<br>";
        ?>


    </body>
    </html>