<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Diário</title>
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

    <div class="conteudo-tabela">
            <table>
                <thead>
                    <tr>
                        <th>Data do Registro</th>
                        <th>Débito</th>
                        <th>Valor do Débito</th>
                        <th>Crédito</th>
                        <th>Valor do Crédito</th>
                        <th>Histórico</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pizza</td>
                        <td class="cor-saida">-50</td>
                        <td>Saidas</td>
                        <td>Lanhes</td>
                        <td>Excluir</td>
                        <td>Excluir</td>
                    </tr>
                    <tr>
                        <td>Projetos</td>
                        <td class="cor-entrada">1000</td>
                        <td>Entradas</td>
                        <td>Dinheiro Extra</td>
                        <td>Excluir</td>
                        <td>Excluir</td>
                    </tr>
                    <tr>
                        <td>Peças do PCs</td>
                        <td class="cor-saida">-500</td>
                        <td>Saidas</td>
                        <td class="cor-equipamento">Equipamentos</td>
                        <td>Excluir</td>
                        <td>Excluir</td>
                    </tr>
                    <tr>
                        <td>Queijo e Presunto</td>
                        <td class="cor-saida">-100</td>
                        <td>Saidas</td>
                        <td>Supermercado</td>
                        <td>Excluir</td>
                        <td>Excluir</td>
                    </tr>
                </tbody>
              </table>
        </div>

    </body>
    </html>