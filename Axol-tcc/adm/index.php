INDEX

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
<body>

<h2> Efetuando consultas no Banco de Dados</h2>
            <p>&nbsp;</p>
            <h3>Consulta de clientes completo</h3>
            <form name="Cadastro" action="Usuario.php" method="POST">
                <label>Consulta a Banco de Dados completo:</label>
                <input type="submit" name="consulta-completa" value="consultar">
            </form>
    
</body>
</html>