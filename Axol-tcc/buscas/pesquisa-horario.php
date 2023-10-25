<?php

require_once('../model/Horario.php'); 

try {
  $horario = new Horario();

  $nomePrestadorServico = $_POST['txtNome'];

  $pesquisaHorario= $horario->pesquisaHorario($nomePrestadorServico);
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

 <!-- INICIO SIDEVAR -->
 <?php
include "../extend/sidevar2.inc"
  ?>
  <!-- FIM SIDEVAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Cadastros</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Pesquisar...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<i class='bx bx-user-circle'></i>			</a>
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Axol</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Acesso restrito</a>
						</li>
					</ul>
				</div>
				<!--BOTÃO RELATÓRIO-->

				<form class="d-flex" role="search" action="../relatorios/relatorio-prestador.php" method="post">
				<button  class="btn-download btn" type="submit">Relatório
				<i class='bx bxs-cloud-download' ></i>
				</button>
				
			</div>
<br>
          </form>
		  		<!--FIM BOTÃO RELATÓRIO-->
          <br>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>Serviços Cadastrados</h3>
						<p>(Em construção)</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>Clientes Cadastrados</h3>
						<p>(Em construção)</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>Produtos anúnciados</h3>
						<p>(Em construção)</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista de Horarios</h3>
            <!--FORMULÁRIO SISTEMA DE BUSCA-->
            <form class="d-flex" role="search" action="../buscas/pesquisa-horario.php" method="post">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" name="txtNome" id="txtNome">
            <button class="btn btn-outline-danger" type="submit"> <i class='bx bx-search' ></i> </button>
          </form>
      <!--FORMULÁRIO SISTEMA DE BUSCA-->
					</div>
					<div id="container">
    <table>
    <thead>
              <tr>
                <th>ID</th>
                <th>Dias da Semana</th>
                <th>Abertura</th>
                <th>Fechamento</th>
                <th>ID Prestador</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($pesquisaHorario as $pesquisa) { ?>
                <tr>

                  <td><?php echo $codHorario = $pesquisa['codHorario'] ?></td>
                  <td><?php echo $diaSemanaHorario = $pesquisa['diaSemanaHorario'] ?></td>
                  <td><?php echo $aberturaHorario = $pesquisa['aberturaHorario'] ?></td>
                  <td><?php echo $pesquisa['fechamentoHorario'] ?></td>
                  <td><?php echo $pesquisa['nomePrestadorServico'] ?></td>


                  <!--editar-->

                  <!-- data-bs-toggle="modal" data-bs-target="#editar" -->

                  <form action="../restrito/decisao-editarHorario.php" method="post">
                    <td><button type="submit" class="btn btn-secondary" name="linha" id="linha" value="<?php echo $codHorario ?>">Editar</button></td>
                  </form>

                  <!--excluir-->
                  <form action="../restrito/decisao-excluirHorario.php" method="post">
                    <td><button type="submit" class="btn btn-danger" name="linha" id="linha" value="<?php echo $codHorario ?>">Excluir</button></td>
                  </form>

                </tr>
        </div>

      </div>
    </div>

  <?php } ?>


  </tbody>
    </table>
  </div>
				
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

    <script src="../js/dash.js" defer></script></body>
</html>
