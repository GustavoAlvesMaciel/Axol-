
<?php
include('../adm/Conexao.php');
require_once('../model/PrestadorServico.php'); 

try {
  $prestadorServico = new PrestadorServico();

  $nomePrestadorServico = $_POST['nomePrestadorServico'];

  $pesquisaPrestador = $prestadorServico->pesquisaPrestador($nomePrestadorServico);
} catch (Exception $e) {
  echo $e->getMessage();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <link rel="stylesheet" href="../css/dash.css">
    <link rel="shortcut icon" href="./assets/images/Axolote.png" type="image/x-icon">

	<title>Axol (Área Restrita)</title>
</head>
<body>
            <!--FORMULÁRIO SISTEMA DE BUSCA-->
            <form class="d-flex" role="search" action="../cards/pesquisa-prestador.php" method="post">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" name="nomePrestadorServico" id="nomePrestadorServico">
            <button class="btn btn-outline-danger" type="submit"> <i class='bx bx-search' ></i> </button>
          </form>
      <!--FORMULÁRIO SISTEMA DE BUSCA-->
					</div>
					<div id="container">
    
                    <main>

<?php 
        try{
            $stmt = $pdo->prepare("SELECT nomePrestadorServico, imgPrestadorServico, emailPrestadorServico, logradouroPrestadorServico, complementoPrestadorServico, cepPrestadorServico, bairroPrestadorServico, cidadePrestadorServico, numeroTelefonePrestadorServico, diaSemanaHorario, aberturaHorario, fechamentoHorario FROM tbprestadorservico
            INNER JOIN tbtelefoneprestadorservico ON tbtelefoneprestadorservico.codPrestadorServico = tbprestadorservico.codPrestadorServico
            INNER JOIN tbhorario ON tbhorario.codPrestadorServico = tbprestadorservico.codPrestadorServico");

            $stmt->execute();


            while($row = $stmt->fetch(PDO::FETCH_BOTH)){  ?>


    <div class="wrapper">
        <figure class="card">
        <img <?php echo "src='../restrito/imagens/".$row['imgPrestadorServico']."'"; ?>>
            <figcaption class="card__cap">
                <h3 name="nomePrestadorServico"><?php  echo $row['nomePrestadorServico']. "<br>";?></h3>
                <div class="carddesc"> <?php echo"Logradouro: " .$row['logradouroPrestadorServico']. "<br>";?></div>
                <div class="carddesc"> <?php echo"Email: " .$row['emailPrestadorServico']. "<br>";?></div>
                <div class="carddesc"> <?php echo"Telefone: " .$row['numeroTelefonePrestadorServico']. "<br>";?></div>
                <div class="carddesc"> <?php echo"Complemento: " .$row['complementoPrestadorServico']. "<br>";?></div>
                <div class="carddesc"> <?php echo"CEP: " .$row['cepPrestadorServico']. "<br>";?></div>
                <div class="carddesc"> <?php echo"Bairro: " .$row['bairroPrestadorServico']. "<br>";?></div>
                <div class="carddesc"> <?php echo"Cidade: " .$row['cidadePrestadorServico']. "<br>";?></div>
                <div class="carddesc"> <?php echo"Dias aberto: " .$row['diaSemanaHorario']. "<br>";?></div>
                <div class="carddesc"> <?php echo"Abertura: " .$row['aberturaHorario']. "<br>";?></div>
                <div class="carddesc"> <?php echo"Fechamento: " .$row['fechamentoHorario']. "<br>";?></div>
            </figcaption>
            <button class="det__btn">Detalhes</button>
        </figure>                
    </div>

<?php  
 } //fecha o laço while
    } //fecha o try
    catch(PDOException $e){
        echo "Erro" .$e->getMessage();
    }
?>



            <tbody>
              <?php foreach ($pesquisaPrestador as $pesquisa) { ?>
                <tr>

                  <td><?php echo $codPrestadorServico = $pesquisa['codPrestadorServico'] ?></td>
                  <td><?php echo $nomePrestadorServico = $pesquisa['nomePrestadorServico'] ?></td>
                  <td><?php echo $pesquisa['cnpjPrestadorServico'] ?></td>
                  <td><?php echo $pesquisa['emailPrestadorServico'] ?></td>
                  <td><?php echo $pesquisa['senhaPrestadorServico'] ?></td>
                  <td><?php echo $pesquisa['imgPrestadorServico'] ?></td>
                  <td><?php echo $pesquisa['logradouroPrestadorServico'] ?></td>
                  <td><?php echo $pesquisa['complementoPrestadorServico'] ?></td>
                  <td><?php echo $pesquisa['cepPrestadorServico'] ?></td>
                  <td><?php echo $pesquisa['bairroPrestadorServico'] ?></td>
                  <td><?php echo $pesquisa['cidadePrestadorServico'] ?></td>

                </tr>
        </div>

  <?php } ?>

  </tbody>

    <script src="../js/dash.js" defer></script></body>
</html>
