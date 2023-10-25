<?php
include('../adm/Conexao.php');
    $query_prestador = "SELECT COUNT(codPrestadorServico) AS qnt_cadastroP  FROM tbPrestadorServico  where codPrestadorServico ";
    $result_prestador = $pdo->prepare($query_prestador);
    $result_prestador->execute();
   $row_prestador = $result_prestador->fetch(PDO::FETCH_ASSOC);

   $query_usuario = "SELECT COUNT(codUsuario) AS qnt_cadastroU  FROM tbUsuario";
   $result_usuario = $pdo->prepare($query_usuario);
   $result_usuario->execute();
  $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);

    $query_especialidade = "SELECT COUNT(codEspecialidade) AS qnt_cadastroE  FROM tbEspecialidade";
    $result_especialidade = $pdo->prepare($query_especialidade);
    $result_especialidade->execute();
    $row_especialidade = $result_especialidade->fetch(PDO::FETCH_ASSOC);
?>

<!-- INICIO DE BLOCOS 3 QUARADOS -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<ul class="box-info">
    <li>
        <i class='bx bxs-calendar-check' ></i>
        <span class="text">
            <h3>Prestadores de Serviço</h3>
            <h2><?php echo"" .$row_prestador['qnt_cadastroP']. "";     
?></h2>
        </span>
    </li>
    <li>
        <i class='bx bxs-group' ></i>
        <span class="text">
            <h3>Clientes Cadastrados</h3>
            <h2><?php echo "" .$row_usuario['qnt_cadastroU']. ""; 
 
?></h2>
        </span>
    </li>
    <li>
        <i class='bx bxs-dollar-circle' ></i>
        <span class="text">
            <h3>Especialidade </h3>
            <h2><?php echo "" .$row_especialidade['qnt_cadastroE']. ""; ?></h2>
        </span>
    </li>
</ul>



</body>
</html>

