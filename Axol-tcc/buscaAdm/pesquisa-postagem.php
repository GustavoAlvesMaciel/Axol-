<?php

require_once('../model/Postagem.php'); 

try {
  $postagem = new Postagem();

  $nomePrestadorServico = $_POST['txtNome'];

  $pesquisaPostagem = $postagem->pesquisaPostagem($nomePrestadorServico);
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


	<!-- SIDEBAR -->
	<section id="sidebar">
  <a href="../index.php" class="brand">
    <img src="../assets/images/Axolote.png" width="60" height="60" loading="lazy" aria-hidden="true">
			<span class="text">Área Restrita</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="nav-restrita.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="form-especialidade.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Especialidade</span>
				</a>
			</li>
			<li>
				<a href="form-especieanimal.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Espécie Animal</span>
				</a>
			</li>
			<li>
				<a href="form-horario.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Horário</span>
				</a>
			</li>
            <li>
				<a href="form-comentario.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Comentário</span>
				</a>
			</li>
            <li>
				<a href="form-postagem.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Postagem</span>
				</a>
			</li>
            <li>
				<a href="form-prestador.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Prestador</span>
				</a>
			</li>
			<li>
				<a href="form-telefonePrestador.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Prestador - Telefone</span>
				</a>
			</li>
            <li>
                 <a href="form-especialidadeservico.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Especialidade - Serviço</span>
				</a>
			</li>
            <li>
				<a href="form-animais.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Animais</span>
				</a>
			</li>
            <li>
				<a href="especialidade-restrita.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Especialidade - CRUD</span> <!--CRUD Especialidade -->
				</a>
			</li>
            <li>
				<a href="especieAnimal-restrita.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Animais - CRUD</span> <!--CRUD Espécie Animal-->
				</a>
			</li>
            <li>
				<a href="horario-restrita.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Horário - CRUD</span> <!--CRUD Horário -->
				</a>
			</li>
            <li>
            <a href="comentario-restrita.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Comentario - CRUD</span> <!--CRUD Prestador Serviço(SÓ ALTERA, NÃO TA DELETANDO|ARRUMAR) -->
				</a>
			</li>
			<li>
            <a href="postagem-restrita.php">
                	<i class='bx bxs-group' ></i>
					<span class="text">Postagem - CRUD</span> <!--CRUD Animais completo -->
				</a>
			</li>
            <li>
            <a href="animais-restrita.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Animais Cadastrados - CRUD</span> <!--CRUD Animais completo -->
				</a>
			</li>
            <li>
            <a href="especialidadeservico-restrita.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Especialidade Serviço - CRUD</span> <!--CRUD Animais completo -->
				</a>
			</li>
			<li>
            <a href="usuario-restrita.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Usuario - CRUD</span> <!--CRUD Animais completo -->
				</a>
			</li>
			<li>
				<a href="prestador-restrita.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Prestador - CRUD</span>
				</a>
			</li>
			<li>
			<a href="telefoneusuario-restrita.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Telefone usuario - CRUD</span> <!--CRUD Animais completo -->
				</a>
			</li>
			<li>
            <a href="telefoneprestador-restrita.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Telefone Prestador - CRUD</span> <!--CRUD Telefone Prestador -->
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="../index.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Home</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Sair</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



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
						<h3>Lista Prestadores</h3>
            <!--FORMULÁRIO SISTEMA DE BUSCA-->
            <form class="d-flex" role="search" action="../buscas/pesquisa-postagem.php" method="post">
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
                <th>Curtida</th>
                <th>Descrição</th>
                <th>ID Prestador</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($pesquisaPostagem as $pesquisa) { ?>
                <tr>

                  <td><?php echo $codPostagem = $pesquisa['codPostagem'] ?></td>
                  <td><?php echo $curtidaPostagem = $pesquisa['curtidaPostagem'] ?></td>
                  <td><?php echo $descricaoPostagem = $pesquisa['descricaoPostagem'] ?></td>
                  <td><?php echo $pesquisa['nomePrestadorServico'] ?></td>


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
