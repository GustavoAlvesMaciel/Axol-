<?php

include ("Conexao.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<table border = "1px solid">
     <tr>
        
        <th>NOME</th>
        <th>CNPJ</th>
        <th>EMAIL</th>
        <th>SENHA</th>
        <th>IMG</th>
        <th>LOGRADOURO</th>
        <th>COMPLMENTO</th>
        <th>CEP</th>
        <th>BAIRRO</th>
        <th>CIDADE</th>
        <th>TELEFONE</th>
        
    </tr>
    <?php

    $stmt1 = $pdo->prepare("SELECT  nomePrestadorServico, cnpjPrestadorServico, emailPrestadorServico, senhaPrestadorServico, imgPrestadorServico, logradouroPrestadorServico, complementoPrestadorServico, cepPrestadorServico, bairroPrestadorServico, cidadePrestadorServico, numeroTelefonePrestadorServico FROM tbPrestadorServico
     INNER JOIN tbTelefonePrestadorServico ON tbPrestadorServico.codPrestadorServico = tbTelefonePrestadorServico.codPrestadorServico
  ");
    $stmt1 ->execute();

    

    while($row1 = $stmt1 ->fetch(PDO::FETCH_NUM)){
        echo ("<tr>");
        echo '<td width="60px">';
        echo (" " . $row1[0] . " ");
        echo '</td>';
        echo "<td>";
      
        echo " " .$row1[1]; 
        echo "<td>". $row1[2]."</td>";
        echo "<td>". $row1[3]."</td>";
        echo "<td>". $row1[4]. "</td>";
        echo "<td>". $row1[5]. "</td>";
        echo "<td>". $row1[6]. "</td>";
        echo "<td>". $row1[7]. "</td>";
        echo "<td>". $row1[8]. "</td>";
        echo "<td>". $row1[9]. "</td>";
        /* <span>'. $row1[11]. '</span>'; */ 

        echo "</tr>";
    echo '</td>';
echo ('</tr>');
    }

    ?>

<?php
    $query_usuario = "SELECT COUNT(codPrestadorServico) AS qnt_cadastro FROM tbPrestadorServico";
    $result_usuario = $pdo->prepare($query_usuario);
    $result_usuario->execute();

   $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
   echo "Quantidade de UsuÃ¡rios Cadastrados: " .$row_usuario['qnt_cadastro']. "<br><br>"; 
    
    ?>
</table>

<body>

            <form name="Cadastro" action="index.php" method="POST">
              
                <input type="submit" name="consulta-completa" value="voltar">
            </form>
    
</body>
</html>